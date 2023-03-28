@extends('dashboard.layout')
@section('content')
    <h1>View Create</h1>

    @include('dashboard.fragment.errors')
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        @include('dashboard.fragmentCategory.formCategoryCreateEdit')
    </form>
@endsection
