<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('createTask') }}">Создать задачу</a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="/">Skillbox Project</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
{{--                <a class="btn btn-sm btn-outline-secondary" href="{{ route('createArticle') }}">Создать статью</a>--}}
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" href="#">Главная</a>
            <a class="p-2 text-muted" href="{{ route('about') }}">О нас</a>
            <a class="p-2 text-muted" href="{{ route('contacts') }}">Контакты</a>
            <a class="p-2 text-muted" href="#">Создать статью</a>
            <a class="p-2 text-muted" href="#">Админ. раздел</a>
        </nav>
    </div>
</div>
