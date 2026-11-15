<?php

namespace App\Http\Controllers;

use App\Models\LeadChat;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

// Вебхук бота заявок: /start <ключ> подписывает чат, /stop отписывает.
// Ответ уходит прямо в ответе на вебхук, без отдельного запроса к Telegram.
class TelegramController extends Controller
{
    public function hook(Request $request): JsonResponse|Response
    {
        $secret = (string) config('landing.notify.webhook_secret');
        if ($secret === '' || ! hash_equals($secret, (string) $request->header('X-Telegram-Bot-Api-Secret-Token'))) {
            abort(403);
        }

        $chat = $request->input('message.chat');
        if (! is_array($chat) || ! isset($chat['id'])) {
            return response()->noContent();
        }

        $chatId = (string) $chat['id'];
        $text = trim((string) $request->input('message.text', ''));
        $key = (string) config('landing.notify.join_key');
        $private = ($chat['type'] ?? '') === 'private';

        if ($key !== '' && preg_match('~^/start(?:@\w+)?\s+(\S+)~', $text, $m) && hash_equals($key, $m[1])) {
            $title = $chat['title'] ?? trim(($chat['first_name'] ?? '').' '.($chat['last_name'] ?? ''));
            LeadChat::updateOrCreate(['chat_id' => $chatId], ['title' => mb_substr($title ?: ($chat['username'] ?? ''), 0, 150)]);
            $reply = "Готово. Заявки с сайта padelkz.kz будут приходить сюда.\nОтключить: /stop";
        } elseif (preg_match('~^/stop(?:@\w+)?$~', $text)) {
            $reply = LeadChat::where('chat_id', $chatId)->delete()
                ? 'Отключено, заявки сюда больше не приходят.'
                : null;
        } elseif ($private && ! LeadChat::where('chat_id', $chatId)->exists()) {
            $reply = 'Этот бот присылает заявки с сайта padelkz.kz. Подключение — по ссылке от администратора.';
        } else {
            $reply = null;
        }

        if ($reply === null) {
            return response()->noContent();
        }

        return response()->json(['method' => 'sendMessage', 'chat_id' => $chatId, 'text' => $reply]);
    }
}
