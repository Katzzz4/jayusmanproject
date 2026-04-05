<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Jayusman Mini Market') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    {{-- NAVBAR --}}
    <nav class="bg-blue-700 text-white px-6 py-4 shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="/" class="text-xl font-bold tracking-wide">
                <!-- 🏪 Jayusman Mini Market -->
            </a>
            <div class="flex items-center gap-4 text-sm">
                @auth
                    <span>Halo, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="bg-white text-blue-700 px-3 py-1 rounded hover:bg-blue-100 transition">
                            Logout
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>

    {{-- KONTEN UTAMA --}}
    <main class="flex-1 max-w-7xl mx-auto w-full px-6 py-8">
        @if(session('success'))
            <div class="bg-green-100 text-green-800 border border-green-300 rounded px-4 py-3 mb-4">
                ✅ {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 text-red-800 border border-red-300 rounded px-4 py-3 mb-4">
                ❌ {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('layouts.partials.footer')

</body>
</html>