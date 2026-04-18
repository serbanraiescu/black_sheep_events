<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - @yield('title', 'Dashboard') | The Alchemist</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-surface text-on-surface font-body selection:bg-primary/30 min-h-screen">
    
    <!-- Fixed Sidebar -->
    <x-admin.sidebar />

    <!-- Main Content Canvas -->
    <div class="ml-64 min-h-screen flex flex-col">
        
        <!-- Fixed Top Bar -->
        <x-admin.top-bar />

        <main class="p-8 flex-1">
            @yield('content')
        </main>
        
    </div>

</body>
</html>
