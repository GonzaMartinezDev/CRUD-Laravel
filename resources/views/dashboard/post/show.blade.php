@extends('dashboard.layout')

@section('content')
    <h1>{{$post->title}}</h1>

    <p>{{$post->category->title}}</p>

    <p>{{$post->content}}</p>


@endsection