<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Refaccionaria GAEL</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/normalizer.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;1,300&display=swap" rel="stylesheet">
    @yield('styles')
</head>
<body>
    @include('layouts.partials.header')
    @include('layouts.partials.message')

    <main role="main" class="container mt-3">
        @yield('content')
    </main>

    @include('layouts.partials.footer')
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/fontawsome/js/all.min.js')}}"></script>
    <script src="{{ asset('css/bootstrap/js/bootstrap.min.js')}}"></script>
    @yield('scripts')
</body>
</html>