<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - @yield('title', 'Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-100">
    <div x-data="{ sidebarOpen: true }" class="flex h-screen overflow-hidden">
        <!-- Sidebar Placeholder -->
        <aside :class="sidebarOpen ? 'w-64' : 'w-20'" class="transition-all duration-300 bg-gray-800 text-white">
            <nav class="mt-10">
                <!-- Admin Links Placeholder -->
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="bg-white shadow h-16 flex items-center justify-between px-6">
                <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
                <div>
                     <!-- Logout Link placeholder -->
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
