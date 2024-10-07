<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form action="{{ route('items.update', $item['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $item['title'] }}" required>
        <br>
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" value="{{ $item['author'] }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ $item['description'] }}</textarea>
        <br>
        <label for="published_year">Published Year:</label>
        <input type="number" id="published_year" name="published_year" value="{{ $item['published_year'] }}" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('items.index') }}">Back to list</a>
</body>
</html>
