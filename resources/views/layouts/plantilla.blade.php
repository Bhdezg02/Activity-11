<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @stack('styles')
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <h1>Evidencia 2 Diseño de aplicaciones web</h1>
    </header>

    @yield('content')

    @yield('anotherContent')

    <footer>
        ESTE ES EL FOOTER
    </footer>
</body>

</html>