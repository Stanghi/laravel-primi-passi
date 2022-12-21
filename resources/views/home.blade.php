<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Laravel primi passi</title>
</head>
<body>

    <div class="container">

        <h1>{{ $saluto }} {{ $user }}</h1>

        <ul>
            @foreach ($colors as $color)
            <li>{{ $color }}</li>
            @endforeach
        </ul>

        <a class="btn" href="/about">About</a>
    </div>

</body>
</html>
