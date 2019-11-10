@extends('admin.layouts.panel')

@section('content')

<div class="inner-wrap">
    <div class="item-panel">
        <a class="button" href="{{ route('article.create') }}">
            Создать
        </a>
    </div>
    <div class="item-table">
        <div class="item-row">
            <div class="item-col">
                #
            </div>
            <div class="item-col">
                Название статьи
            </div>
            <div class="item-col">
                Создана
            </div>
            <div class="item-col">
                Изменена
            </div>
            <div class="item-col">
                Добавлена
            </div>
        </div>
        @foreach ($articles as $article)
            <div class="item-row">
                <div class="item-col">
                    {{ $article->id }}
                </div>
                <div class="item-col">
                    {{ $article->title }}
                </div>
                <div class="item-col">
                    {{ $article->created_at->format('d.m.Y') }}
                </div>
                <div class="item-col">
                    {{ $article->updated_at->format('d.m.Y') }}
                </div>
                <div class="item-col">
                    {{ $article->checked }}
                </div>
                <div class="item-col">
                    <a class="button" href="{{ route('article.edit', $article->id) }}">
                        Редактировать
                    </a>
                </div>
                <div class="item-col">
                    <span class="button" onclick="handleDeleteArticle( {{ $article->id }} );" >
                        Удалить
                    </span>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection