<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Movies</h1>
    <ul>
        @foreach ($movies as $movie)
        <li>
            Title: {{$movie->title}}<br>
            Original title: {{$movie->original_title}}<br>
            Nationality: {{$movie->nationality}}<br>
            Date: {{$movie->date}}<br>
            Vote: {{$movie->vote}}
        </li>
        @endforeach
    </ul>
</body>
</html>
