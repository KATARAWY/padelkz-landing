<?php

namespace App\Http\Controllers;

use App\Support\Articles;
use Illuminate\Http\Response;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('blog.index', ['articles' => Articles::all()]);
    }

    public function show(string $slug): View
    {
        $article = Articles::find($slug) ?? abort(404);
        $more = Articles::all()->where('slug', '!=', $slug)->take(3);

        return view('blog.show', compact('article', 'more'));
    }

    public function feed(): Response
    {
        return response()
            ->view('blog.feed', ['articles' => Articles::all()->take(30)])
            ->header('Content-Type', 'application/rss+xml; charset=utf-8');
    }

    public function sitemap(): Response
    {
        $articles = Articles::all();
        $site = filemtime(resource_path('views/landing.blade.php'));
        $latest = $articles->max(fn ($a) => $a['updated']->timestamp) ?: $site;

        return response()
            ->view('seo.sitemap', compact('articles', 'site', 'latest'))
            ->header('Content-Type', 'application/xml; charset=utf-8');
    }

    // llms.txt: описание сайта для нейросетей + список статей с кратким содержанием
    public function llms(): Response
    {
        $text = rtrim(file_get_contents(resource_path('llms.txt')));
        $articles = Articles::all();

        if ($articles->isNotEmpty()) {
            $list = $articles->map(fn ($a) => '- ['.$a['title'].']('.route('blog.show', $a['slug']).'): '.$a['description'])->implode("\n");
            $text = preg_replace('/\n## In English/', "\n## Статьи\n\n{$list}\n\n## In English", $text, 1, $count);
            if (! $count) {
                $text .= "\n\n## Статьи\n\n{$list}";
            }
        }

        return response($text."\n")->header('Content-Type', 'text/plain; charset=utf-8');
    }

    // llms-full.txt: то же + полный текст каждой статьи в markdown, чтобы нейросеть могла цитировать без обхода страниц
    public function llmsFull(): Response
    {
        $text = rtrim($this->llms()->getContent());
        foreach (Articles::all() as $a) {
            $body = preg_replace('~\]\((?!https?://)/?~', '](https://padelkz.kz/', $a['markdown']);
            $text .= "\n\n---\n\n# {$a['title']}\n\n".route('blog.show', $a['slug'])
                ." · {$a['date']->toDateString()}\n\n> {$a['description']}\n\n{$body}";
        }

        return response($text."\n")->header('Content-Type', 'text/plain; charset=utf-8');
    }
}
