<!DOCTYPE html>
<html>
<head>
    <title>View Book</title>
</head>
<body>
    <h1>{{ $item['BookID'] }}</h1>
    <h1>{{ $item['title'] }}</h1>
    <p>Author: {{ $item['author'] }}</p>
    <p>Description: {{ $item['description'] }}</p>
    <p>Published Year: {{ $item['published_year'] }}</p>
    <a href="{{ route('items.index') }}">Back to list</a>
</body>
</html>
