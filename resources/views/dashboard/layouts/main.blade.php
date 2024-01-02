<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vers Bloom | Dashboard</title>
    {{-- <link rel="stylesheet" href="dist/output.css"> --}}

    {{-- Tailwind --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />

     {{-- trix editor --}}
     <link rel="stylesheet" type="text/css" href="/css/trix.css">
     <script type="text/javascript" src="/js/trix.js"></script>
     <script type="text/javascript" src="/js/search.js"></script>
     <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

     <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
     </style>
</head>
<body>
    {{-- sidebar --}}
    <div class="fixed top-0 left-0 z-40 w-64 h-screen">
        @include('dashboard.layouts.sidebar')
    </div>

    {{-- header --}}
    <div class="fixed top-0 left-0 z-30 w-full space-x-11 shadow-lg">
        @include('dashboard.layouts.header')
    </div>
    <div>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('container')
          </main>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js" integrity="sha512-khqZ6XB3gzYqfJvXI2qevflbsTvd+aSpMkOVQUvXKyhRgEdORMefo3nNOvCM8584/mUoq/oBG3Vb3gfGzwQgkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
