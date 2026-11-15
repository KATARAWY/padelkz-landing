<?php

return [

    // Номер для заявок в WhatsApp, только цифры: 77001234567
    'whatsapp' => env('LANDING_WHATSAPP', ''),

    // Ник в Telegram без @ — появится кнопка «Написать в Telegram»
    'telegram' => env('LANDING_TELEGRAM', ''),

    // Куда слать уведомление о заявке. Пусто — заявка только сохраняется в базе
    'notify' => [
        // Почта: отправка через SMTP из MAIL_* в .env, настраивается скриптом mail-setup.sh
        'email' => env('LEAD_NOTIFY_EMAIL'),
        'bot_token' => env('LEAD_TELEGRAM_BOT_TOKEN'),
        // Постоянные получатели через запятую. Остальные подписываются сами по ссылке
        // t.me/<бот>?start=<LEAD_TELEGRAM_JOIN_KEY> — ссылку печатает php artisan lead:tg-setup
        'chat_id' => env('LEAD_TELEGRAM_CHAT_ID'),
        'join_key' => env('LEAD_TELEGRAM_JOIN_KEY'),
        'webhook_secret' => env('LEAD_TELEGRAM_WEBHOOK_SECRET'),
    ],

];
