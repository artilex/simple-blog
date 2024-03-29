<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ArticleMorph;

class Tag extends Model
{
    public function articles()
    {
        return $this->morphMany(ArticleMorph::class, 'morph');
    }

    public function articleCount()
    {
        $count = $this->articles->count();
        return $count;
    }

}
