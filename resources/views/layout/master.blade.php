<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css"  rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body>

    <header>
        @include('components.navbar')
    </header>

    <main>
        @yield('body')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>
