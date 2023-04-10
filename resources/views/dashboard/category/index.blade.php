@extends('dashboard.layout')
@section('content')
    {{-- <h1>View Index</h1> --}}

    <a href="{{ route('category.create') }}" class="btn btn-success my-3">Create</a>
    <table class="table mb-3">
        <thead>
            <tr>
                <th>
                    Title
                </th>
                <th>
                    Slug
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->slug }}</td>
                    <td><a href="{{ route('category.show', $category->id) }}" class="btn btn-primary my-2">See</a>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary my-2">Edit</a>
                        <form action="{{ route('category.destroy', $category) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
