<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'Laravel Site')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-300 text-gray-800 flex flex-col justify-between min-h-screen">
    <x-header />
    <main class="p-6 flex h-full">
        @yield('content')
    </main>
    <x-footer />
</body>

</html>
