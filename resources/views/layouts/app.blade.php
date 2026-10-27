<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Klinik Sehat')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<nav class="navbar">
    <div class="container lebar">
        <a href="{{ route('dokter.index') }}">Klinik Sehat</a>
    </div>
</nav>

<div class="container @yield('lebar')">
    @yield('content')
</div>

@stack('scripts')
</body>
</html>