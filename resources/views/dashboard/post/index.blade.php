@extends('dashboard.layout')
@section('content')
    {{-- <h1>view index</h1> --}}

    <a href="{{ route('post.create') }}" class="btn btn-success my-2">Create</a><br>

    <table class="table mb-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Posted</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->title }}</td>
                    <td>{{ $post->posted }}</td>
                    <td><a href="{{ route('post.show', $post) }}" class="btn btn-primary my-2">See</a>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary my-2">Edit</a>

                        <form action="{{ route('post.destroy', $post) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">
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
