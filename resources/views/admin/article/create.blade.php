@extends('layouts.admin')

@section('content')

<form method="POST" action="{{ route('article.save', 'new') }}" id="tag-form">
    @include('admin.article._form', ['article' => $article])
</form>

@endsection