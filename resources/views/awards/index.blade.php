<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awards</title>
</head>

<body>
    <h1>Movie Awards</h1>
    {{-- @dd($awards) --}}
    @foreach ($awards as $award)
        <p>{{ $award }}</p>
    @endforeach
</body>

</html>