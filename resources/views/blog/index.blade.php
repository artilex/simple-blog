@extends('layouts.app')

@section('content')

<div class="item-list">
    <div class="article-container">
    <div class="article">
        <div class="article-image-block">
            <img class="article-image" src="https://images.pexels.com/photos/67636/rose-blue-flower-rose-blooms-67636.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
        </div>
        <div class="article-description">
            <div class="article-tag-list">
                <div class="article-tag">
                    Первый тег
                </div>
                <div class="article-tag">
                    Второй тег
                </div>
                <div class="article-tag">
                    Третий тег
                </div>
            </div>
            <div class="article-title">
                Какая-то очень интересная статья
            </div>
            <div class="article-date">
                03-11-2019
            </div>
        </div>
    </div>
</div>
<div class="article-container">
    <div class="article">
        <div class="article-image-block">
            <img class="article-image" src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg">
        </div>
                <div class="article-description">
            <div class="article-tag-list">
                <div class="article-tag">
                    Первый тег
                </div>
                <div class="article-tag">
                    Второй тег
                </div>
                <div class="article-tag">
                    Третий тег
                </div>
            </div>
            <div class="article-title">
                Какая-то очень интересная статья
            </div>
            <div class="article-date">
                03-11-2019
            </div>
        </div>
    </div>
</div>
<div class="article-container">
    <div class="article">
        <div class="article-image-block">
            <img class="article-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTxbWDRp0uDnhvGkesRkA8DsHUomz2vNr07nD7AEE1_I29izRR6">
        </div>
                <div class="article-description">
            <div class="article-tag-list">
                <div class="article-tag">
                    Первый тег
                </div>
                <div class="article-tag">
                    Второй тег
                </div>
                <div class="article-tag">
                    Третий тег
                </div>
            </div>
            <div class="article-title">
                Какая-то очень интересная статья
            </div>
            <div class="article-date">
                03-11-2019
            </div>
        </div>
    </div>
</div>
<div class="article-container">
    <div class="article">
        <div class="article-image-block">
            <img class="article-image" src="https://cdn.arstechnica.net/wp-content/uploads/2016/02/5718897981_10faa45ac3_b-640x624.jpg">
        </div>
               <div class="article-description">
            <div class="article-tag-list">
                <div class="article-tag">
                    Первый тег
                </div>
                <div class="article-tag">
                    Второй тег
                </div>
                <div class="article-tag">
                    Третий тег
                </div>
            </div>
            <div class="article-title">
                Какая-то очень интересная статья
            </div>
            <div class="article-date">
                03-11-2019
            </div>
        </div>
    </div>
</div>
<div class="article-container">
    <div class="article">
        <div class="article-image-block">
            <img class="article-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQw9T-FyRzZhM1cJR9mmYqRbLAKdGhkFYtAqntaoQ3fwi2673lF">
        </div>
                <div class="article-description">
            <div class="article-tag-list">
                <div class="article-tag">
                    Первый тег
                </div>
                <div class="article-tag">
                    Второй тег
                </div>
                <div class="article-tag">
                    Третий тег
                </div>
            </div>
            <div class="article-title">
                Какая-то очень интересная статья
            </div>
            <div class="article-date">
                03-11-2019
            </div>
        </div>
    </div>
</div>
<div class="article-container">
    <div class="article">
            <img class="article-image" src="https://html5box.com/html5lightbox/images/mountain.jpg">
               <div class="article-description">
            <div class="article-tag-list">
                <div class="article-tag">
                    Первый тег
                </div>
                <div class="article-tag">
                    Второй тег
                </div>
                <div class="article-tag">
                    Третий тег
                </div>
                <div class="article-tag">
                    Четвертый тег
                </div>
            </div>
            <div class="article-title">
                Какая-то очень интересная статья
            </div>
            <div class="article-date">
                03-11-2019
            </div>
        </div>
    </div>
</div>
</div>

<div class="pagination">
    <a class="pag-item disabled" href="{{ route('blog.about') }}">Назад</a>
    <a class="pag-item" href="{{ route('blog.about') }}">1</a>
    <a class="pag-item" href="{{ route('blog.about') }}">2</a>
    <a class="pag-item" href="{{ route('blog.about') }}">3</a>
    <a class="pag-item" href="{{ route('blog.about') }}">4</a>
    <a class="pag-item" href="{{ route('blog.about') }}">5</a>
    <a class="pag-item" href="{{ route('blog.about') }}">Вперед</a>
</div>

@endsection