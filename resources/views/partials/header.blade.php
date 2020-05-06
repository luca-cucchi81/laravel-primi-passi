<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title></title>
    </head>
    <body>
        <header>
            <img src="{{asset('img/logo.png')}}" alt="logo">
            <nav class="navbar">
                <ul class="main-menu">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('prodotti')}}">Prodotti</a></li>
                    <li><a href="{{route('news')}}">News</a></li>
                </ul>
            </nav>
        </header>
    </body>
</html>
