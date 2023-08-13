<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css','resources/js/app.js'])

        <title>Groove</title>
    </head>
    <body class="bg-background">
        
        {{-- Memanggil file navbar.blade.php di folder partials --}}
        @include('partials.navbar')
        
        <div>
            @yield('container')                {{-- Akan berisi apapun yg ada di halaman-halaman child-nya yg memiliki section container--}}
        </div>

        @include('partials.footer')


    </body>
</html>