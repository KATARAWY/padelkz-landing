<?php

use App\Http\Controllers\LeadController;
use App\Http\Controllers\TelegramController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing', [
        'config' => [
            'whatsapp' => config('landing.whatsapp'),
            'telegram' => config('landing.telegram'),
            'endpoint' => route('lead', absolute: false),
        ],
    ]);
});

Route::post('/lead', [LeadController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('lead');

Route::post('/tg/hook', [TelegramController::class, 'hook'])->name('tg.hook');
