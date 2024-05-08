<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Summit</title>
        <!-- styles -->

        <link rel="stylesheet" href="{{ asset("/css/auth.css") }}">
        <link rel="stylesheet" href="{{ asset("/css/components.css") }}">
        <link rel="stylesheet" href="{{ asset("/css/home.css") }}">
        <!-- Fonts -->
    
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset("/js/main.js") }}" defer></script>
     
    </head>
    <body>
        <div>
            @yield('content')
        </div>
    </body>
</html>
