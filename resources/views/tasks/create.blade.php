@extends('layout.master')

@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Создание задачи
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

        <form method="post" action="/tasks">
            @csrf
            <div class="form-group">
                <label for="inputTitle">Название задачи</label>
                <input type="text" class="form-control" name="title" id="inputTitle" placeholder="Введите название задачи">
            </div>
            <div class="form-group">
                <label for="inputBody">Описание задачи</label>
                <input type="text" class="form-control" name="body" id="inputBody" placeholder="Введите описание задачи">
            </div>
            <button type="submit" class="btn btn-primary">Создать задачу</button>
        </form>
    </div>

@endsection
