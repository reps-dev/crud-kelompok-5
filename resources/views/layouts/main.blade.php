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
    @include('layouts.navbar')
    <div class='container mt-4'>
        @yield('content')
    </div>
    @include('layouts.footer')
    <script src="{{ assets('dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>