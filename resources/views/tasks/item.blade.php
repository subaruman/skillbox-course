<div class="blog-post">
    <a href="/tasks/{{ $task->id }}">
        <h2 class="blog-post-title"> {{ $task->title }}</h2>
    </a>
    <p class="blog-post-meta">{{ $task->created_at->toFormattedDateString() }}</p>
    {{ $task->body }}
</div><!-- /.blog-post -->
