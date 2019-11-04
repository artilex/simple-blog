@extends('admin.layouts.panel')

@section('content')

<form method="POST" action="{{ route('tag.store') }}">
    {{ csrf_field() }}
    <label class="form-item" for='tag-name'>Название тега</label>
    <input type="text" name='tag_name' id='tag-name' class="form-item">
    <input type="submit" value="Сохранить" class="form-item">
</form>

@endsection