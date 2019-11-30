<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Article;
use App\Tag;

class BlogController extends Controller
{
    public function articles() {
        $articles = Article::paginate(15);

        return view('blog.index', [
            'articles' => $articles
        ]);
    }

    public function tagArticles($tagId)
    {
        $articles = Article::whereHas('morph', function($q)  use ($tagId) {
            $q->where('morph_id', '=', $tagId);
        })->paginate(15);

        $tagName = Tag::find($tagId)->name;

        return view('blog.index', [
            'articles' => $articles,
            'tagName' => $tagName
        ]);
    }

    public function searchArticles(Request $request)
    {
        $searchText = $request->search_text;
        $articles = Article::where('title', 'LIKE', '%'.$searchText.'%')
            ->paginate(15);

        return view('blog.index', [
            'articles' => $articles,
            'searchText' => $searchText
        ]);
    }

    public function article($id)
    {
        $article = Article::find($id);

        return view('blog.article', [
            'article' => $article,
        ]);
    }

    public function tags() {
        $tags = Tag::orderBy('name')
            ->paginate(30);

        return view('blog.tags', [
            'tags' => $tags
        ]);
    }

    public function about() {
        return view('blog.about');
    }
}
