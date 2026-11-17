<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kasir Ende')</title>
</head>
<body>
    <header class="topbar">
        <strong>Kasir Ende</strong>
        <nav><a href="{{ route('katalog.index') }}">Katalog</a></nav>
    </header>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>
