<div {{ $attributes->class(['my-5'])->merge(['data-2']) }}>
    {{ $changeTitle() }}
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <p>{{ $post->created_at }}</p>
</div>
