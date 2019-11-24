@extends('layouts.admin')

@section('content')

    <form method="POST" action="{{ route('article.update', $article->id) }}">
        <input name="_method" type="hidden" value="PUT">
        @include('admin.article._form', ['article' => $article])
        @foreach ($articleTags as $tag)
            <script type="text/javascript">
                const old = true;
                addToForm({{ $tag->tag->id }}, '{{ $tag->tag->name }}', old);
            </script>
        @endforeach
    </form>

@endsection