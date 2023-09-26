<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Minggu 4</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
             <div class="col-lg-4 border p-3">
                @yield('content')
            </div>           
        </div>
    </div>
</body>
</html>