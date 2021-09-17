@extends('layout.master')

@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            {{ $article->title }}
        </h3>
        {{ $article->detail_text }}
        <hr>
        <a href="/">Вернуться на главную</a>
    </div>
@endsection
