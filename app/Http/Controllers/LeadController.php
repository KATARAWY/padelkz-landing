<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'club' => ['nullable', 'string', 'max:150'],
            'phone' => ['required', 'string', 'max:30', 'regex:/^[0-9+()\s-]{10,}$/'],
            'page' => ['nullable', 'string', 'max:500'],
        ]);

        $lead = Lead::create($data + ['ip' => $request->ip()]);

        // уведомления уходят уже после ответа, форма их не ждёт
        defer(fn () => $this->notify($lead));

        return response()->json(['ok' => true]);
    }

    // Уведомления на почту и в Telegram. Если не дошло — заявка всё равно лежит в базе
    private function notify(Lead $lead): void
    {
        $wa = 'https://wa.me/'.preg_replace('/\D/', '', $lead->phone);
        $text = "Заявка с padelkz.kz\nИмя: {$lead->name}\nКлуб: {$lead->club}\nТелефон: {$lead->phone}\nWhatsApp: {$wa}";

        if ($email = config('landing.notify.email')) {
            try {
                Mail::raw($text, fn ($m) => $m->to($email)->subject("Заявка на демо: {$lead->name}"));
            } catch (\Throwable $e) {
                Log::warning('Заявка #'.$lead->id.' не ушла на почту: '.$e->getMessage());
            }
        }

        $token = config('landing.notify.bot_token');
        $chat = config('landing.notify.chat_id');

        if (! $token || ! $chat) {
            return;
        }

        try {
            Http::timeout(5)->post("https://api.telegram.org/bot{$token}/sendMessage", [
                'chat_id' => $chat,
                'text' => $text,
            ])->throw();
        } catch (\Throwable $e) {
            Log::warning('Заявка #'.$lead->id.' не ушла в Telegram: '.$e->getMessage());
        }
    }
}
