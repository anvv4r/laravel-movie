<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <h1>Movies</h1>
    {{-- @dd($movies) --}}
    @if ($movies)
        @foreach ($movies as $movie)
            <p><strong>{{ $movie->name }}</strong></p>
            <p>Movie Type: {{ $movie->movieType->name }}</p>
            <p>Movie Genres:
                @if ($movie->genres)
                    @foreach ($movie->genres as $genre)
                        {{ $genre->name }},
                    @endforeach
                @else
                    No genres found
                @endif
            </p>
        @endforeach
    @else
        <p>No movies found</p>
    @endif
</body>

</html>