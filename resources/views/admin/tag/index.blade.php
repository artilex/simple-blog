@extends('admin.layouts.panel')

@section('content')

<div class="inner-wrap">
    <div class="item-panel">
        <a class="button" href="{{ route('tag.create') }}">
            Создать
        </a>
    </div>
    <div class="item-table">
        <div class="item-row">
            <div class="item-col">
                #
            </div>
            <div class="item-col">
                Название тега
            </div>
            <div class="item-col">
                Создан
            </div>
            <div class="item-col">
                Изменен
            </div>
        </div>
        @foreach ($tags as $tag)
            <div class="item-row">
                <div class="item-col">
                    {{ $tag->id }}
                </div>
                <div class="item-col">
                    {{ $tag->name }}
                </div>
                <div class="item-col">
                    {{ $tag->created_at->format('d.m.Y') }}
                </div>
                <div class="item-col">
                    {{ $tag->updated_at->format('d.m.Y') }}
                </div>
                <div class="item-col">
                    <a class="button" href="{{ route('tag.edit', $tag->id) }}">
                        Редактировать
                    </a>
                </div>
                <div class="item-col">
                    <span class="button" onclick="handleDeleteTag( {{ $tag->id }} );" >
                        Удалить
                    </span>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection