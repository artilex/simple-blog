<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ArticleController extends Controller
{
    public function index() {

        return 'Article' . URL::to('/');
    }
}
