{{ csrf_field() }}
<label class="form-item">Название статьи</label>
<input type="text" name='articleName' class="form-item" value="{{ $article->title }}">

<label class="form-item">Описание статьи</label>
<textarea rows="3" class="form-item" name="articleContent">{{ $article->content }}</textarea>

<label class="form-item">Теги</label>
<div class="form-item">
    <select name="tags" id="tag-select">
        @foreach ($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
    </select>
    <button type="button" class="button" onclick="handleAdd()">Добавить тег</button>
</div>

<div class="form-item tag-list" id="tag-list"></div>

<input type="submit" value="Сохранить" class="form-item button">


<script src="{{ asset('js/article_tags.js') }}"></script>
<script src="{{ asset('js/textarea.js') }}"></script>