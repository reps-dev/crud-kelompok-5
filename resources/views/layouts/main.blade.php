<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="{{ asset('/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/style.css') }}">
</head>
<body>
    <div class="d-flex flex-column min-vh-100">
    @include('layouts.navbar')
    <div class='container mt-4 flex-grow-1'>
        @yield('content')
    </div>
    @include('layouts.footer')
</div>
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>