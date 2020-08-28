<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mevo</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Mevo">
    <meta name="description" content="Mevo">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">

	<!-- App Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

</head>
<body>

    @yield('content')

    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')

</body>
</html>
