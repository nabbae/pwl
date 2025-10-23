<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashionista</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="/" class="logo">Fashionista</a>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/trends">Trends</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/about">About</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Fashionista. All Rights Reserved.</p>
    </footer>
</body>
</html>
