<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function index() {
        return view('admin.tag.index', [
            'tags' => Tag::all()
        ]);
    }

    public function create() {
        return view('admin.tag.create');
    }

    public function store(Request $request) {
        $tag = new Tag();
        $tag->name = $request->input('tag_name');
        $tag->save();

        return redirect()->route('tags');
    }

    public function edit($id) {
        $tag = Tag::find($id);
        return view('admin.tag.create', [
            'tag' => $tag
        ]);
    }

    public function update(Request $request, $id) {
        $tag = Tag::find($id);
        $tag->name = $request->input('tag_name');
        $tag->save();

        return redirect()->route('tags');
    }

    public function destoy($id) {
        $tag = Tag::find($id);
        $tag->delete();
    }
}
