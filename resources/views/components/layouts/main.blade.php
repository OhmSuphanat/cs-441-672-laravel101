<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-layouts.nav-bar>
    </x-layouts.nav-bar>
    <div class="mt-16">
        {{ $slot }}
    </div>
</body>
</html>
