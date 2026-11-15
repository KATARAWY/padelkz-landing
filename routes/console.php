<?php

use Illuminate\Foundation\Inspiring;
use App\Models\LeadChat;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Проверка почты для заявок: php artisan lead:mail-test
Artisan::command('lead:mail-test', function () {
    $to = config('landing.notify.email');
    if (! $to) {
        $this->error('В .env не задан LEAD_NOTIFY_EMAIL');

        return 1;
    }
    Mail::raw('Проверка: письма о заявках с padelkz.kz доходят.', fn ($m) => $m->to($to)->subject('padelkz.kz: проверка почты'));
    $this->info('Письмо ушло на '.$to.' через '.config('mail.default'));
})->purpose('Отправить тестовое письмо на адрес для заявок');

// Бот заявок: ставит вебхук и печатает ссылки для подписки. php artisan lead:tg-setup
Artisan::command('lead:tg-setup', function () {
    $token = config('landing.notify.bot_token');
    $secret = config('landing.notify.webhook_secret');
    $key = config('landing.notify.join_key');
    if (! $token || ! $secret || ! $key) {
        $this->error('В .env нужны LEAD_TELEGRAM_BOT_TOKEN, LEAD_TELEGRAM_WEBHOOK_SECRET и LEAD_TELEGRAM_JOIN_KEY');

        return 1;
    }
    $api = "https://api.telegram.org/bot{$token}";
    $set = Http::timeout(10)->post("{$api}/setWebhook", [
        'url' => route('tg.hook'),
        'secret_token' => $secret,
        'allowed_updates' => ['message'],
    ])->json();
    if (! ($set['ok'] ?? false)) {
        $this->error('setWebhook: '.json_encode($set, JSON_UNESCAPED_UNICODE));

        return 1;
    }
    $bot = Http::timeout(10)->get("{$api}/getMe")->json('result.username');
    $this->info('Вебхук: '.route('tg.hook'));
    $this->line("Подписать личку:  https://t.me/{$bot}?start={$key}");
    $this->line("Подписать группу: https://t.me/{$bot}?startgroup={$key}");
})->purpose('Поставить вебхук бота заявок и показать ссылки подписки');

// Кто получает заявки в Telegram. php artisan lead:tg-chats
Artisan::command('lead:tg-chats', function () {
    $fixed = array_filter(array_map('trim', explode(',', (string) config('landing.notify.chat_id'))));
    $rows = LeadChat::orderBy('id')->get(['chat_id', 'title', 'created_at'])->toArray();
    foreach ($fixed as $c) {
        $rows[] = ['chat_id' => $c, 'title' => '(из .env)', 'created_at' => ''];
    }
    $rows ? $this->table(['chat_id', 'кто', 'с'], $rows) : $this->warn('Получателей нет — заявки только в базе');
})->purpose('Список чатов, куда уходят заявки');
