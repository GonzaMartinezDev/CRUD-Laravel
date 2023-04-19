<div>
    {{ $slot  }}
    {{ $header }}
    @foreach ($posts as $post)
        <div class="card card-white mb-2">
            <h3>{{ $post->title }}</h3>
            <a href="{{ route('web.blog.show', $post) }}">See</a>
            <h3>{{ $post->content }}</h3>
        </div>
    @endforeach

    {{ $posts->links() }}
</div>
