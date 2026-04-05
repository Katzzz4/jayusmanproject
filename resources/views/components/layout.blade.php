<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="flex h-screen">

    <x-sidebar />

    <div class="flex-1 flex flex-col overflow-auto">

        <x-header />

        <main class="flex-1 p-6">
            {{ $slot }}
        </main>

        <x-footer />

    </div>
</div>

</body>
</html>