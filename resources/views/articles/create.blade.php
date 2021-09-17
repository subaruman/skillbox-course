@extends('layout.master')

@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Создание статьи
        </h3>

        @if($errors->count())
            <div class="alert alert-danger mt-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="/">
            @csrf
            <div class="form-group">
                <label for="inputTitle">Название статьи</label>
                <input type="text" class="form-control" name="title" id="inputTitle" placeholder="Введите название статьи">
            </div>
            <div class="form-group">
                <label for="previewText">Краткое описание статьи</label>
                <input type="text" class="form-control" name="preview_text" id="previewText" placeholder="Введите краткое описание статьи">
            </div>
            <div class="form-group">
                <label for="detailText">Полное описание статьи</label>
                <input type="text" class="form-control" name="detail_text" id="detailText" placeholder="Введите полное описание статьи">
            </div>
            <div class="form-group ">
                <label for="published">Опубликовано</label>
                <input type="checkbox" class="form-control" name="published" id="published">
            </div>
            <button type="submit" class="btn btn-primary">Создать статью</button>
        </form>
    </div>

@endsection
