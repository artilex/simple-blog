@extends('layouts.app')

@section('content')
    
    <h1 class="article-title">
        {{ $article->title }}
    </h1>

    <img class="article-image" src="{{ asset('img/articles/' . $article->image_name) }}">
    
    <div class="article-content">
        <pre>{{ $article->content }}</pre>
    </div> 

    <div>
        <div class="article-date">
            Дата последнего редактирования: {{ $article->updated_at->format('d M Y') }}
        </div>
    </div>

    <div>
        <div class="article-date">
            Дата создания: {{ $article->created_at->format('d M Y') }}
        </div>
    </div>

@endsection