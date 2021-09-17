@extends('layout.master')

@section('content')
    <div class="col-md-8 blog-main ">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Список статей
        </h3>
        <a class="btn btn-sm btn-outline-secondary mb-3" href={{ route('createArticle') }}>Создать статью</a>
        @foreach($articles as $article)
            @include('articles.item')
        @endforeach
    </div>
@endsection
