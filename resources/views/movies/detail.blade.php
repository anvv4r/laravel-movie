<!DOCTYPE html>
<html>

<head>
    <title>Movie Detail</title>
</head>

<body>
    {{-- @dd($movie) --}}
    <h1>{{ $movie->name }}</h1>
    <p>Year : {{ $movie->year }}</p>
    <p>Rating : {{ $movie->rating }}</p>

</body>

</html>