<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function articles() {
        return view('blog.index');
    }

    public function tags() {
        return view('blog.tags');
    }

    public function about() {
        return view('blog.about');
    }
}
