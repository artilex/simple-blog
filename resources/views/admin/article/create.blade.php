@extends('layouts.admin')

@section('content')

<form method="POST" action="{{ route('article.store') }}" id="tag-form">
    @include('admin.article._form', ['article' => $article])
</form>

@endsection