@extends('layouts.app')

@section('content')
    
    @if (isset($searchText))
        <div class="info-block">
            Результаты поиска по <span class="info-name">{{ $searchText }}</span>
        </div>
    @endif

    @if (isset($tagName))
        <div class="info-block">
            Статьи с тегом <span class="info-name">{{ $tagName }}</span>
        </div>
    @endif

    <div class="item-list">

    @foreach($articles as $article)
        <a class="article-container" href="{{ route('blog.article', $article->id) }}">
            <div>
                <img class="article-image" src="{{ asset('img/articles/' . $article->image_name) }}">
            </div>
            <div class="article-description">
                <div class="article-tag-list">
                    @foreach($article->morph as $morph)
                        <div class="article-tag">
                            {{ $morph->tag->name }}
                        </div>
                    @endforeach
                </div>
                <div class="article-title">
                    {{ $article->title }}
                </div>
                <div class="article-date">
                    {{ $article->updated_at->format('d M Y') }}
                </div>
            </div>
        </a>
    @endforeach

    </div>

    {{ $articles->links() }}

@endsection