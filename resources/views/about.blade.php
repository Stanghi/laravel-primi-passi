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
            <h1>About page</h1>

            @foreach ($team as $member)
            <div class="box">
                <h3>Name: {{ $member['name'] }}</h3>
                <h3>Surname: {{ $member['surname'] }}</h3>
                <h3>email: {{ $member['email'] }}</h3>
            </div>
            @endforeach

            <a class="btn" href="/">Home</a>
        </div>
    </body>
</html>
