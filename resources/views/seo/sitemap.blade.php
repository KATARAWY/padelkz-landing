{!! '<'.'?xml version="1.0" encoding="UTF-8"?'.'>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
  <url>
    <loc>https://padelkz.kz/</loc>
    <lastmod>{{ date('Y-m-d', $site) }}</lastmod>
@foreach (['og.jpg', 'schedule.webp', 'booking.webp', 'kassa.webp', 'group.webp', 'tour.webp', 'reports.webp', 'client.webp', 'app_home.webp'] as $img)
    <image:image><image:loc>https://padelkz.kz/img/{{ $img }}</image:loc></image:image>
@endforeach
  </url>
  <url>
    <loc>{{ route('blog.index') }}</loc>
    <lastmod>{{ date('Y-m-d', $latest) }}</lastmod>
  </url>
@foreach ($articles as $a)
  <url>
    <loc>{{ route('blog.show', $a['slug']) }}</loc>
    <lastmod>{{ $a['updated']->toDateString() }}</lastmod>
@if ($a['cover'])
    <image:image><image:loc>{{ url($a['cover']) }}</image:loc></image:image>
@endif
  </url>
@endforeach
</urlset>
