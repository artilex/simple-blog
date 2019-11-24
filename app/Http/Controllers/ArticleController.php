<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;
use App\ArticleMorph;

class ArticleController extends Controller
{
    public function index() {
        return view('admin.article.index', [
            'articles' => Article::all()
        ]);
    }

    public function create() {
        $article = new Article;
        $tags = Tag::all();

        return view('admin.article.create', [
            'article' => $article,
            'tags' => $tags,
        ]);
    }

    public function store(Request $request) {
        $article = new Article();
        $input = $request->only('articleName', 'articleContent', 'tagIds');

        $this->save($input, $article);

        return redirect()->route('articles');
    }

    public function edit($id) {
        $article = Article::find($id);
        $tags = Tag::all();
        $articleTags = $article->morph;

        return view('admin.article.edit', [
            'article' => $article,
            'tags' => $tags,
            'articleTags' => $articleTags
        ]);
    }

    public function update(Request $request, $id) {
        $article = Article::find($id);
        $input = $request->only('articleName', 'articleContent', 'tagIds');
        
        $this->save($input, $article);

        return redirect()->route('articles');
    }

    public function destoy($id) {
        $article = Article::find($id);
        $article->delete();
    }

    private function save($input, $article)
    {
        $article->title = $input['articleName'];
        $article->content = $input['articleContent'];
        $article->checked = true;
        $article->save();

        $tagIds = $input['tagIds'];

        foreach ($tagIds as $key => $value) {
            $articleMorph = new ArticleMorph;
            $articleMorph->article_id = $article->id;
            $articleMorph->morph_id = $key;
            $articleMorph->morph_type = Tag::class;
            $articleMorph->save();
        }
    }
}
