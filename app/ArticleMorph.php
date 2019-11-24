<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
use App\Tag;

class ArticleMorph extends Model
{
    public $timestamps = false;

    public function articles()
    {
        return $this->belongsMany(Article::class, 'id', 'article_id');
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class, 'morph_id', 'id');
    }
}
