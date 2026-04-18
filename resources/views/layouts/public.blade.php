<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Black Sheep Events')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <header>
        <nav>
            <!-- Public Navigation Placeholder -->
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Public Footer Placeholder -->
    </footer>
</body>
</html>
