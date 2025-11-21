<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'NeuroPlural')</title>

    <link rel="stylesheet" href="{{ asset('css/dashboardA.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> {{-- Se usar Laravel Mix --}}
</head>

<body>

    @yield('content')

</body>
</html>
