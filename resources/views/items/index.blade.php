<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
    <link rel="stylesheet" href="F:\TestMidTerm\TestMidTerm\resources\css\main.css">
</head>
<body>
    <h1>Book List</h1>
    <a href="{{ route('items.create') }}">Create New Book</a>
    <ul>
        @foreach ($items as $item)
            <li>
                {{ $item['BookID'] }} --- {{ $item['title'] }} --- {{ $item['author'] }}
                <a href="{{ route('items.show', $item['id']) }}">View</a>
                <a href="{{ route('items.edit', $item['id']) }}">Edit</a>
                <form action="{{ route('items.destroy', $item['id']) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
