<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index() {
        return view('admin.article.index', [
            'articles' => Article::all()
        ]);
    }

    public function create() {
        return view('admin.article.create');
    }

    public function store(Request $request) {
        $article = new Article();
        $article->title = $request->get('article_name');
        $article->content = $request->get('article_content');
        $article->checked = true;
        $article->save();

        return redirect()->route('articles');
    }

    public function edit($id) {
        $article = Article::find($id);

        return view('admin.article.create', [
            'article' => $article
        ]);
    }

    public function update(Request $request, $id) {
        $article = Article::find($id);
        $article->title = $request->get('article_name');
        $article->content = $request->get('article_content');
        $article->save();

        return redirect()->route('articles');
    }

    public function destoy($id) {
        $article = Article::find($id);
        $article->delete();
    }
}
