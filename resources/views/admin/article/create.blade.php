@extends('layouts.admin')

@section('content')

<form method="POST" enctype="multipart/form-data" action="{{ route('article.save', 'new') }}" id="tag-form">
    @include('admin.article._form', ['isNew' => true])
</form>

@endsection