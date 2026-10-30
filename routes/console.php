<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
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
