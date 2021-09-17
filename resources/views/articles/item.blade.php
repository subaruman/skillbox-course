<div class="blog-post">
    <a class="page-link" href="/articles/{{ $article->slug }}">
        <h4 class=""> {{ $article->title }}</h4>
    </a>
    <p class="blog-post-meta">{{ $article->created_at->toFormattedDateString() }}</p>
    {{ $article->preview_text }}
</div><!-- /.blog-post -->
