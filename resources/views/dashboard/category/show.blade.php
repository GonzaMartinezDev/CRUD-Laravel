@extends('dashboard.layout')
@section('content')
<h1>{{ $category->title }}</h1>

{{ $category->slug}}
@endsection
