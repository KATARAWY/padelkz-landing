@extends('layouts.site', [
    'title' => 'Статьи о работе падел-клуба — Padel KZ',
    'description' => 'Как считать цену групп и абонементов, проводить турниры американо и мексикано, вести брони и кассу падел-клуба. Разборы на примерах из CRM Padel KZ.',
    'canonical' => route('blog.index'),
])

@push('jsonld')
{!! \App\Support\Seo::blog($articles) !!}
@endpush

@section('main')
<div class="wrap">
  <header class="blog-head">
    <h1>Статьи о работе падел-клуба</h1>
    <p>{!! \App\Support\Typo::text('Как считать группы, проводить турниры и вести кассу. Разборы на примерах из CRM Padel KZ.') !!}</p>
  </header>

  @if ($articles->isEmpty())
    <p class="blog-head">Первые статьи скоро появятся.</p>
  @else
  <ol class="posts" reversed>
    @foreach ($articles as $a)
    <li class="post">
      <a href="{{ route('blog.show', $a['slug']) }}">
        <div>
          <div class="post-meta"><time datetime="{{ $a['date']->toDateString() }}">{{ $a['date']->translatedFormat('j F Y') }}</time> · {{ $a['minutes'] }} мин</div>
          <h2>{!! \App\Support\Typo::text(e($a['title'])) !!}</h2>
          <p>{!! \App\Support\Typo::text(e($a['description'])) !!}</p>
          <span class="post-more">Читать</span>
        </div>
        @if ($a['cover'])
          <img src="/{{ $a['cover'] }}" alt="" width="600" height="375" loading="{{ $loop->first ? 'eager' : 'lazy' }}" decoding="async">
        @endif
      </a>
    </li>
    @endforeach
  </ol>
  @endif
</div>
@endsection
