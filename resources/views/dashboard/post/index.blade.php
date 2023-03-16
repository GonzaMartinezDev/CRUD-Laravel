@extends('dashboard.layout')

@section('content')
    <h1>view index</h1>

    <a href="{{ route("post.create") }}">Create</a><br>
    
    <table class="table">
        <thead>
            <tr>Title</tr>
            <tr>Category</tr>
            <tr>Posted</tr>
            <tr>Actions</tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category }}</td>
                    <td>{{ $post->posted }}</td>
                    <td>
                        <a href="{{ route("post.edit", $post->id) }}">Edit</a>
                        <a href="{{ route("post.show", $post) }}">See</a>
                        <form action="{{ route("post.destroy", $post) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
@endsection
