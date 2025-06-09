<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'VENNOT')</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png.png') }}" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}" />

    @stack('styles')
</head>
<body>

    @yield('content')

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    @stack('scripts')
</body>
</html>
