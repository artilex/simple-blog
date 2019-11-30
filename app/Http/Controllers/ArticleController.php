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

    public function save(Request $request, $id)
    {
        if ($id == 'new') {
            $article = new Article();
            $article->image_name = 'no-image.jpg';
        } else {
            $article = Article::find($id);
        }

        $article->title = $request->articleName;
        $article->content = $request->articleContent;
        $article->checked = true;
        $article->save();

        if($request->hasFile('article_image')) {
            $file = $request->file('article_image');
            $fileName = $article->id . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/img/articles/';
            $file->move($filePath, $fileName);

            $article->image_name = $fileName;
            $article->save();
        }

        if ($request->has('tagIds')) {
            $tagIds = $request->get('tagIds');
        } else {
            $tagIds = [];
        }

        $deleteTagIds = $request->has('deleteTagIds') ? $request->get('deleteTagIds') : [];

        foreach ($deleteTagIds as $id) {
            $articleTag = ArticleMorph::where('article_id', '=', $article->id)
                ->where('morph_id', '=', $id)
                ->first();
            $articleTag->delete();
        }

        foreach ($tagIds as $key => $value) {
            $articleMorph = new ArticleMorph;
            $articleMorph->article_id = $article->id;
            $articleMorph->morph_id = $key;
            $articleMorph->morph_type = Tag::class;
            $articleMorph->save();
        }

        return redirect()->route('articles');
    }

    public function destoy($id) {
        $article = Article::find($id);
        $article->delete();

        $articleTags = ArticleMorph::
            where('article_id', '=', $id)
            ->get();

        foreach ($articleTags as $articleTag) {
            $articleTag->delete();
        }
    }
}
