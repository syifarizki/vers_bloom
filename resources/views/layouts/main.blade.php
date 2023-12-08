<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />

    <title>Vers Bloom | Home</title>
</head>
<body>
    
    @php
        // Misalnya, $active diatur di controller atau sebelum template ini di-render
        $active = "login";
    @endphp

    @include('partials.navbar', ['active' => $active])
    
    <div class="container mt-60">
        @yield('container')
    </div>

    @include('partials.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>