<!DOCTYPE html>
<html>
<head>
    <title>{{ $detail->title }}</title>
</head>
<body>
    <h1>{{ $detail->title }}</h1>
    <p>{{ $detail->content }}</p>
    <a href="{{ route('detail.index') }}">Back to Pages List</a>
</body>
</html>
