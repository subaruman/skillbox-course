@extends('layout.master')

@section('content')
    <div class="col-md-8 blog-main ">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Контакты
        </h3>
        <h4 class="fs-4 mb-3">Обратная связь</h4>
        <form method="post" action="{{ route('createContact') }}">
            @csrf
            <div class="form-group">
                <label for="inputTitle">E-mail</label>
                <input type="email" class="form-control" name="title" id="inputTitle" placeholder="Введите e-mail">
            </div>
            <div class="form-group">
                <label for="inputBody">Сообщение</label>
                <input type="text" class="form-control" name="message" id="inputBody" placeholder="Введите сообщение">
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
@endsection
