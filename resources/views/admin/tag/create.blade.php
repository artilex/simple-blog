@extends('admin.layouts.panel')

@section('content')

@if(isset($tag))
    {{ $tag->name }}
@else
    create
@endif

<form method="POST" action="{{ route('tag.update', $tag) }}">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">
    <label class="form-item" for='tag-name'>Название тега</label>
    <input type="text" name='tag_name' id='tag-name' class="form-item" value="{{ $tag->name }}">
    <input type="submit" value="Сохранить" class="form-item">
</form>

@endsection