@extends('dashboard.layout')
@section('content')
    <h1>View Create</h1>

    @include('dashboard.fragment.errors')
    <form action="{{ route('category.update', $category->id) }}" method="post">
        @csrf
        @method('PUT')
        @include('dashboard.fragmentCategory.formCategoryCreateEdit')
    </form>
@endsection