<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vers Bloom | Dashboard</title>
    <link rel="stylesheet" href="dist/output.css">

    {{-- Tailwind --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />

</head>
<body>
    {{-- sidebar --}}
    <div class="fixed top-0 left-0 z-40 w-64 h-screen">
        @include('dashboard.layouts.sidebar')
    </div>
</body>
</html>
