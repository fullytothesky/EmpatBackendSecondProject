<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <link href="/css/layout.css" rel="stylesheet">


</head>
<body>

<header>
    <h1><a class="header-link-main" href={{route('welcome')}}>Empat School</a></h1>
    <a class="header-link-friend" href="{{route('connect')}}">Add a new Friend</a>
</header>

@yield('container')

<footer><h1>Third Backend Laravel Project</h1></footer>
</body>

</html>
