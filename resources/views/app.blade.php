<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <title inertia>{{ config('app.name', 'EEEJOKI') }}</title>
    @routes
    @vite(['resources/js/app.ts', 'resources/css/app.css'])
    @inertiaHead
</head>
<body class="h-full bg-slate-950 text-slate-100 antialiased">@inertia</body>
</html>
