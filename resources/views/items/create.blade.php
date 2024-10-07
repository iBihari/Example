<!DOCTYPE html>
<html>
<head>
    <title>Create Book</title>
</head>
<body>
    <h1>Create Book</h1>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <label for="BookID">ID:</label>
        <input type="number" id="BookID" name="BookID" required>
        <br>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        <br>
        <label for="published_year">Published Year:</label>
        <input type="number" id="published_year" name="published_year" required>
        <br>
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('items.index') }}">Back to list</a>
</body>
</html>
