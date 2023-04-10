@extends('dashboard.layout')

@section('content')
    <h1>Edit Post</h1>

    @include('dashboard.fragment.errors')

    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")

        @include('dashboard.fragment.formCreateEdit', ["task" => "edit"])
        
    </form>
@endsection