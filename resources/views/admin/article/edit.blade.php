@extends('layouts.admin')

@section('content')

    <form method="POST" enctype="multipart/form-data" action="{{ route('article.save', $article->id) }}">
        @include('admin.article._form', ['isNew' => false])
        @foreach ($articleTags as $tag)
            <script type="text/javascript">
                addToForm({{ $tag->tag->id }}, '{{ $tag->tag->name }}');
            </script>
        @endforeach
    </form>

@endsection