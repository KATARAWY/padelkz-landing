{!! '<'.'?xml version="1.0" encoding="UTF-8"?'.'>' !!}
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
  <title>Статьи Padel KZ</title>
  <link>{{ route('blog.index') }}</link>
  <atom:link href="{{ route('blog.feed') }}" rel="self" type="application/rss+xml"/>
  <description>Как вести падел-клуб: брони, касса, группы, тренеры и турниры.</description>
  <language>ru</language>
  @if ($articles->isNotEmpty())
  <lastBuildDate>{{ $articles->max(fn ($a) => $a['updated'])->toRssString() }}</lastBuildDate>
  @endif
  @foreach ($articles as $a)
  <item>
    <title>{{ $a['title'] }}</title>
    <link>{{ route('blog.show', $a['slug']) }}</link>
    <guid isPermaLink="true">{{ route('blog.show', $a['slug']) }}</guid>
    <pubDate>{{ $a['date']->toRssString() }}</pubDate>
    <description>{{ $a['description'] }}</description>
  </item>
  @endforeach
</channel>
</rss>
