<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Решатель (путеводитель)</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/bootstrap.css" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
    </head>

    <body>
        <div id="app">
            @yield('content')
        </div>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/main.js"></script>
    </body>

</html>
