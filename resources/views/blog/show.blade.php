@extends('layouts.site', [
    'title' => $article['title'].' — Padel KZ',
    'ogTitle' => $article['title'],
    'description' => $article['description'],
    'canonical' => route('blog.show', $article['slug']),
    'ogType' => 'article',
    'ogImage' => $article['cover'] ? url($article['cover']) : null,
])

@push('meta')
<meta property="article:published_time" content="{{ $article['date']->toDateString() }}">
<meta property="article:modified_time" content="{{ $article['updated']->toDateString() }}">
@endpush

@if ($article['cover'])
@push('preload')
<link rel="preload" href="/{{ $article['cover'] }}" as="image" fetchpriority="high">
@endpush
@endif

@push('jsonld')
{!! \App\Support\Seo::article($article) !!}
@endpush

@section('main')
<article class="wrap">
  <nav class="crumbs" aria-label="Навигация">
    <a href="/">Padel KZ</a><span aria-hidden="true">/</span><a href="{{ route('blog.index') }}">Статьи</a>
  </nav>

  <header class="art-head">
    <h1>{!! \App\Support\Typo::text(e($article['title'])) !!}</h1>
    <p class="art-lead">{!! \App\Support\Typo::text(e($article['description'])) !!}</p>
    <div class="art-meta">
      <time datetime="{{ $article['date']->toDateString() }}">{{ $article['date']->translatedFormat('j F Y') }}</time>
      @if ($article['updated']->gt($article['date']))
        · обновлено <time datetime="{{ $article['updated']->toDateString() }}">{{ $article['updated']->translatedFormat('j F Y') }}</time>
      @endif
      · {{ $article['minutes'] }} мин чтения
    </div>
  </header>

  @if ($article['cover'])
  <figure class="art-cover">
    @php($size = @getimagesize(public_path($article['cover'])) ?: [1600, 1000])
    <img src="/{{ $article['cover'] }}" alt="{{ $article['cover_alt'] }}" width="{{ $size[0] }}" height="{{ $size[1] }}" fetchpriority="high" decoding="async">
  </figure>
  @endif

  <div class="art">
    @if (count($article['toc']) > 1)
    <aside class="toc" aria-label="Содержание">
      <b>В статье</b>
      <ol>
        @foreach ($article['toc'] as $h)
          <li><a href="#{{ $h['id'] }}">{!! \App\Support\Typo::text(e($h['text'])) !!}</a></li>
        @endforeach
      </ol>
    </aside>
    @endif

    <div class="prose">
      @if (count($article['toc']) > 1)
      <details class="toc-m">
        <summary>Содержание</summary>
        <ol>
          @foreach ($article['toc'] as $h)
            <li><a href="#{{ $h['id'] }}">{!! \App\Support\Typo::text(e($h['text'])) !!}</a></li>
          @endforeach
        </ol>
      </details>
      @endif

      {!! $article['html'] !!}
    </div>
  </div>

  <section class="cta" aria-labelledby="cta-title">
    <h2 id="cta-title">Покажем CRM на&nbsp;примере вашего клуба</h2>
    <p>Оставьте контакты на главной: напишем в&nbsp;WhatsApp и&nbsp;договоримся о&nbsp;времени демо.</p>
    <div class="cta-row">
      <a class="btn btn-dark" href="/#demo">Записаться на демо</a>
      @if (config('landing.whatsapp'))
        <a class="btn btn-line" href="https://wa.me/{{ config('landing.whatsapp') }}" target="_blank" rel="noopener">Написать в WhatsApp</a>
      @endif
    </div>
  </section>

  @if ($more->isNotEmpty())
  <section class="more" aria-labelledby="more-title">
    <h2 id="more-title">Ещё статьи</h2>
    <ol class="posts">
      @foreach ($more as $a)
      <li class="post">
        <a href="{{ route('blog.show', $a['slug']) }}">
          <div>
            <div class="post-meta">{{ $a['minutes'] }} мин</div>
            <h2>{!! \App\Support\Typo::text(e($a['title'])) !!}</h2>
            <p>{!! \App\Support\Typo::text(e($a['description'])) !!}</p>
          </div>
          @if ($a['cover'])
            <img src="/{{ $a['cover'] }}" alt="" width="600" height="375" loading="lazy" decoding="async">
          @endif
        </a>
      </li>
      @endforeach
    </ol>
  </section>
  @endif
</article>
@endsection
