@include('layout.master')

@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            {{ $task->title }}
        </h3>
    <hr>
        <a href="/tasks/">Вернуться к списку задач</a>
@endsection
