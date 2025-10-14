<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-g">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="flex h-screen">
        <aside class="w-64 bg-gray-800 text-white p-4">
            <h2 class="text-xl font-bold mb-4">Admin Panel</h2>
            <nav>
                <a href="{{ route('admin.dashboard') }}" class="block py-2">Dashboard</a>
                <a href="{{ route('admin.users.index') }}" class="block py-2">Usuarios</a>
                </nav>
        </aside>

        <main class="flex-1 p-6">
            {{ $slot }}
        </main>
    </div>
</body>
</html>