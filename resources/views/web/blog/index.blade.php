@extends('web.master')
@section('content')
    <x-web.blog.post.index :posts="$posts">
        <h1>List of principal post</h1>

        @slot('header')
            <h1>Post -- Slot con nombre</h1>
        @endslot
    </x-web.blog.post.index>
@endsection
