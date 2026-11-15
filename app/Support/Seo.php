<?php

namespace App\Support;

use Illuminate\Support\Collection;

/**
 * JSON-LD для блога. Собирается в PHP, а не в Blade: ключ "@context" Blade принял бы за свою директиву.
 * Организация и сайт ссылаются на узлы с главной (#org, #website).
 */
class Seo
{
    private const ORG = 'https://padelkz.kz/#org';

    private const SITE = 'https://padelkz.kz/#website';

    public static function blog(Collection $articles): string
    {
        return self::encode([
            [
                '@type' => 'Blog',
                '@id' => route('blog.index').'#blog',
                'name' => 'Статьи Padel KZ',
                'description' => 'Как вести падел-клуб: брони, касса, группы, тренеры и турниры.',
                'url' => route('blog.index'),
                'inLanguage' => 'ru',
                'isPartOf' => ['@id' => self::SITE],
                'publisher' => ['@id' => self::ORG],
                'blogPost' => $articles->map(fn ($a) => [
                    '@type' => 'BlogPosting',
                    'headline' => $a['title'],
                    'url' => route('blog.show', $a['slug']),
                    'datePublished' => $a['date']->toDateString(),
                    'dateModified' => $a['updated']->toDateString(),
                ])->values()->all(),
            ],
            self::crumbs([['Статьи', route('blog.index')]]),
        ]);
    }

    public static function article(array $a): string
    {
        $url = route('blog.show', $a['slug']);

        return self::encode([
            array_filter([
                '@type' => 'BlogPosting',
                '@id' => $url.'#article',
                'mainEntityOfPage' => $url,
                'url' => $url,
                'headline' => $a['title'],
                'description' => $a['description'],
                'image' => $a['cover'] ? url($a['cover']) : url('img/og.jpg'),
                'datePublished' => $a['date']->toDateString(),
                'dateModified' => $a['updated']->toDateString(),
                'inLanguage' => 'ru',
                'wordCount' => preg_match_all('/[\p{L}\p{N}]+/u', $a['text']),
                'timeRequired' => 'PT'.$a['minutes'].'M',
                'author' => ['@type' => 'Organization', 'name' => 'Padel KZ', 'url' => 'https://padelkz.kz/'],
                'publisher' => [
                    '@type' => 'Organization',
                    '@id' => self::ORG,
                    'name' => 'Padel KZ',
                    'logo' => ['@type' => 'ImageObject', 'url' => 'https://padelkz.kz/img/apple-touch-icon.png'],
                ],
                'isPartOf' => ['@id' => route('blog.index').'#blog'],
                'about' => ['@id' => 'https://padelkz.kz/#crm'],
            ]),
            self::crumbs([['Статьи', route('blog.index')], [$a['title'], $url]]),
        ]);
    }

    private static function crumbs(array $items): array
    {
        $list = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Padel KZ', 'item' => 'https://padelkz.kz/']];
        foreach ($items as $i => [$name, $url]) {
            $list[] = ['@type' => 'ListItem', 'position' => $i + 2, 'name' => $name, 'item' => $url];
        }

        return ['@type' => 'BreadcrumbList', 'itemListElement' => $list];
    }

    private static function encode(array $graph): string
    {
        $json = json_encode(['@context' => 'https://schema.org', '@graph' => $graph],
            JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | JSON_HEX_TAG);

        return '<script type="application/ld+json">'."\n".$json."\n".'</script>';
    }
}
