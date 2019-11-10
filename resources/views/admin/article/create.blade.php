@extends('admin.layouts.panel')

@section('content')

@if(isset($article))
    <form method="POST" action="{{ route('article.update', $article->id) }}">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT">

        <label class="form-item">Название статьи</label>
        <input type="text" name='article_name' class="form-item" value="{{ $article->title }}">

        <label class="form-item">Описание статьи</label>
        <textarea rows="3" class="form-item" name="article_content">{{ $article->content }}</textarea>

        <input type="submit" value="Сохранить" class="form-item">
    </form>
@else
    <form method="POST" action="{{ route('article.store') }}">
        {{ csrf_field() }}
        <label class="form-item">Название статьи</label>
        <input type="text" name='article_name' class="form-item">

        <label class="form-item">Описание статьи</label>
        <textarea rows="3" class="form-item" name="article_content"></textarea>

        <input type="submit" value="Сохранить" class="form-item">
    </form>
@endif



@endsection