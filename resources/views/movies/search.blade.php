<!DOCTYPE html>
<html>

<head>
    <title>Search Results</title>
</head>

<body>
    <form action="/search" method="get">
        <label for="search">Search:</label>
        <input type="text" id="search" name="search">
        <input type="submit" value="Submit">
    </form>

    <h1>Search Results</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie->name }}</li>
        @endforeach
    </ul>
</body>

</html>