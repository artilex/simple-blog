@extends('layouts.app')

@section('content')

<div class="item-list">
    @foreach($tags as $tag)
        <div class="tag">
            <a href="{{ route('blog.tag_articles', $tag->id) }}">{{ $tag->name }}</a>
            <div class="tag-count">
                {{ $tag->articleCount() }}
            </div>
        </div>
    @endforeach
</div>

@endsection