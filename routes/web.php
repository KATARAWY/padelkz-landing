<?php

use App\Http\Controllers\LeadController;
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
