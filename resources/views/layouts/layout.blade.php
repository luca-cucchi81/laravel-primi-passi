<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>La Molisana - @yield('titolo')</title>
    </head>
    <body>
        @include('partials.header')

        <main>
            @yield('main')
        </main>

        @include('partials.footer')

        @yield('script')
    </body>
</html>
