<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>View Index</h1>

    <a href="{{ route('category.create') }}">Create</a>
    <table>
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
                <td><a href="{{ route('category.edit', $category->id) }}">Edit</a></td>
                <td><a href="{{ route('category.show', $category->id) }}">See</a></td>
                <td><form action="{{ route('category.destroy', $category) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
