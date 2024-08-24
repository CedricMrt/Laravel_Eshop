<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @livewireStyles
    <title>{{ $title ?? 'Laravel Eshop' }}</title>
</head>

<body class="bg-slate-200 dark:bg-slate-700">
    @livewire('partials.navbar')
    <main>{{ $slot }}</main>
    @livewire('partials.footer')
    @vite('resources/js/app.js')
    @livewireScripts
</body>

</html>
