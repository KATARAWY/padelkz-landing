<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#0C110F">
<link rel="canonical" href="{{ $canonical }}">
<meta property="og:type" content="{{ $ogType ?? 'website' }}">
<meta property="og:site_name" content="Padel KZ">
<meta property="og:locale" content="ru_RU">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:title" content="{{ $ogTitle ?? $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $ogImage ?? url('img/og.jpg') }}">
<meta name="twitter:card" content="summary_large_image">
@stack('meta')
<link rel="alternate" type="application/rss+xml" title="Статьи Padel KZ" href="{{ route('blog.feed') }}">
<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/img/mark.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
<link rel="preload" href="/fonts/onest-cyrillic.woff2" as="font" type="font/woff2" crossorigin>
@stack('preload')
<style>@include('partials.site-css')</style>
@stack('jsonld')
</head>
<body>
<a class="skip" href="#main">К содержанию</a>
<header class="nav">
  <div class="wrap">
    <a class="nav-logo" href="/" aria-label="Padel KZ — на главную"><img src="/img/logo-white.svg" alt="Padel KZ" width="112" height="30"></a>
    <nav class="nav-links" aria-label="Разделы">
      <a href="/#day">Как работает</a>
      <a href="/#app">Приложение</a>
      <a href="{{ route('blog.index') }}" @class(['on' => request()->routeIs('blog.*')])>Статьи</a>
    </nav>
    <a class="btn btn-primary btn-sm" href="/#demo">Записаться на демо</a>
  </div>
</header>

<main id="main">
@yield('main')
</main>

<footer class="foot">
  <div class="wrap">
    <a href="/" aria-label="Padel KZ — на главную"><img src="/img/logo-white.svg" alt="Padel KZ" width="97" height="26"></a>
    <nav aria-label="Ссылки">
      <a href="{{ route('blog.index') }}">Статьи</a>
      <a href="https://apps.apple.com/app/padel-kz/id6759392401" target="_blank" rel="noopener">App Store</a>
      <a href="https://play.google.com/store/apps/details?id=com.padelkz.app" target="_blank" rel="noopener">Google Play</a>
      <a href="/#demo">Демо CRM</a>
    </nav>
    <span>© {{ date('Y') }} Padel KZ</span>
  </div>
</footer>
<script>/* телефон: внешние ссылки в той же вкладке — встроенные браузеры Telegram и Instagram молча глотают target=_blank */
if (matchMedia("(pointer: coarse)").matches) document.querySelectorAll('a[target="_blank"]').forEach(a => a.removeAttribute("target"));</script>
</body>
</html>
