<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\TelegramController;
use Illuminate\Support\Facades\Route;

// Страницы без сессии и cookie: их можно кэшировать, а поисковику и нейросетям отдаётся чистый HTML
$public = [
    \Illuminate\Session\Middleware\StartSession::class,
    \Illuminate\View\Middleware\ShareErrorsFromSession::class,
    \Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class,
];

Route::get('/', function () {
    return view('landing', [
        'config' => [
            'whatsapp' => config('landing.whatsapp'),
            'telegram' => config('landing.telegram'),
            'endpoint' => route('lead', absolute: false),
        ],
    ]);
})->withoutMiddleware($public)->middleware('cache.headers:public;max_age=600;etag');

Route::withoutMiddleware($public)->middleware('cache.headers:public;max_age=600;etag')->group(function () {
    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/feed.xml', [BlogController::class, 'feed'])->name('blog.feed');
    Route::get('/blog/{slug}', [BlogController::class, 'show'])->where('slug', '[a-z0-9-]+')->name('blog.show');
    Route::get('/sitemap.xml', [BlogController::class, 'sitemap']);
    Route::get('/llms.txt', [BlogController::class, 'llms']);
    Route::get('/llms-full.txt', [BlogController::class, 'llmsFull']);
});

Route::post('/lead', [LeadController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('lead');

Route::post('/tg/hook', [TelegramController::class, 'hook'])->name('tg.hook');
