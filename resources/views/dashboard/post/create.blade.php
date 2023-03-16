@extends('dashboard.layout')

@section('content')
    <h1>Create Post</h1>

    @include('dashboard.fragment.errors')
    <form action="{{ route('post.store') }}" method="post">

       @include('dashboard.fragment.formCreateEdit')

    </form>
@endsection
