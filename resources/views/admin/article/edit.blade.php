@extends('layouts.admin')

@section('content')

    <form method="POST" action="{{ route('article.save', $article->id) }}">
        @include('admin.article._form', ['article' => $article])
        @foreach ($articleTags as $tag)
            <script type="text/javascript">
                addToForm({{ $tag->tag->id }}, '{{ $tag->tag->name }}');
            </script>
        @endforeach
    </form>

@endsection