<?php

namespace App\Support;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

/**
 * Статьи блога — markdown-файлы в resources/articles/<slug>.md.
 *
 * В начале файла шапка между строками "---":
 *   title, description, date (ГГГГ-ММ-ДД), updated (необязательно),
 *   cover (путь от public/, например img/group.webp), cover_alt, draft: true — не публиковать.
 * Картинка в тексте: ![alt](img/x.webp "подпись") — станет figure с подписью.
 */
class Articles
{
    private static ?Collection $all = null;

    public static function dir(): string
    {
        return resource_path('articles');
    }

    /** Опубликованные статьи, свежие сверху */
    public static function all(): Collection
    {
        if (self::$all !== null) {
            return self::$all;
        }

        $items = collect(glob(self::dir().'/*.md') ?: [])
            ->map(fn ($path) => self::parse($path))
            ->filter(fn ($a) => $a && ! $a['draft'] && $a['date']->lte(now()))
            ->sortByDesc(fn ($a) => $a['date']->timestamp)
            ->values();

        return self::$all = $items;
    }

    public static function find(string $slug): ?array
    {
        return self::all()->firstWhere('slug', $slug);
    }

    private static function parse(string $path): ?array
    {
        $raw = str_replace("\r\n", "\n", file_get_contents($path));
        if (! preg_match('/\A---\n(.*?)\n---\n(.*)\z/s', $raw, $m)) {
            return null;
        }

        $meta = [];
        foreach (explode("\n", $m[1]) as $line) {
            if (preg_match('/^([a-z_]+):\s*(.*)$/', trim($line), $kv)) {
                $meta[$kv[1]] = trim($kv[2], " \"'");
            }
        }
        if (empty($meta['title']) || empty($meta['date'])) {
            return null;
        }

        $body = $m[2];
        [$html, $toc] = self::render($body);
        $date = Carbon::parse($meta['date']);
        $words = preg_match_all('/[\p{L}\p{N}]+/u', strip_tags($html));

        return [
            'slug' => basename($path, '.md'),
            'title' => $meta['title'],
            'description' => $meta['description'] ?? '',
            'date' => $date,
            'updated' => isset($meta['updated']) ? Carbon::parse($meta['updated']) : $date,
            'cover' => $meta['cover'] ?? null,
            'cover_alt' => $meta['cover_alt'] ?? $meta['title'],
            'draft' => ($meta['draft'] ?? '') === 'true',
            'html' => $html,
            'markdown' => trim($body),
            'toc' => $toc,
            'text' => trim(preg_replace('/\s+/u', ' ', html_entity_decode(strip_tags($html)))),
            'minutes' => max(1, (int) round($words / 170)),
        ];
    }

    /** markdown → HTML + оглавление по h2 */
    private static function render(string $md): array
    {
        $html = Str::markdown($md, ['html_input' => 'allow', 'allow_unsafe_links' => false]);

        // картинка одна в абзаце → figure; title становится подписью
        $html = preg_replace_callback('~<p><img ([^>]*?)\s*/?></p>~u', function ($m) {
            $attrs = $m[1];
            $caption = '';
            if (preg_match('~\stitle="([^"]*)"~u', $attrs, $t)) {
                $caption = $t[1];
                $attrs = str_replace($t[0], '', $attrs);
            }

            return '<figure><img '.self::imgAttrs($attrs).'>'.($caption !== '' ? '<figcaption>'.$caption.'</figcaption>' : '').'</figure>';
        }, $html);

        // id у h2 для оглавления и ссылок на раздел
        $toc = [];
        $html = preg_replace_callback('~<h2>(.*?)</h2>~us', function ($m) use (&$toc) {
            $text = trim(html_entity_decode(strip_tags($m[1])));
            $id = Str::slug(Str::limit($text, 60, ''), '-', 'ru') ?: 'r'.(count($toc) + 1);
            $toc[] = ['id' => $id, 'text' => $text];

            return '<h2 id="'.$id.'">'.$m[1].'</h2>';
        }, $html);

        // широкая таблица прокручивается сама, а не страница
        $html = str_replace(['<table>', '</table>'], ['<div class="tbl"><table>', '</table></div>'], $html);

        // внешние ссылки — в новой вкладке
        $html = preg_replace('~<a href="(https?://(?!padelkz\.kz)[^"]+)"~u', '<a href="$1" target="_blank" rel="noopener"', $html);

        return [Typo::glue($html), $toc];
    }

    /** ленивую загрузку и размеры картинке, чтобы страница не прыгала */
    private static function imgAttrs(string $attrs): string
    {
        if (preg_match('~src="([^"]+)"~', $attrs, $s) && ! str_contains($attrs, 'width=')) {
            $file = public_path(ltrim(parse_url($s[1], PHP_URL_PATH) ?? '', '/'));
            if (is_file($file) && ($size = @getimagesize($file))) {
                $attrs .= ' width="'.$size[0].'" height="'.$size[1].'"';
            }
            if (! str_starts_with($s[1], '/') && ! preg_match('~^https?://~', $s[1])) {
                $attrs = str_replace($s[0], 'src="/'.$s[1].'"', $attrs);
            }
        }

        return trim($attrs).' loading="lazy" decoding="async"';
    }
}
