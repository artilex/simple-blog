<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ArticleMorph;

class Article extends Model
{
    public function morph()
    {
        return $this->hasMany(ArticleMorph::class, 'article_id', 'id');
    }
}
