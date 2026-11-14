<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Toko Pak Wowok</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header class="navbar">
        <a href="{{ route('dashboard') }}" class="logo">
            TOKO PAK WOWOK<span></span>
        </a>

        <nav>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('products.index') }}">Daftar Produk</a>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <p>© 2026 Toko Kelontong Pak Wowok.</p>
    </footer>

</body>
</html>
