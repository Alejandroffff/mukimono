@php
    // 1. CORRECCIÓN FINAL DE RUTA:
    // Corrección de la ruta para acceder a source/routes/link.php desde el archivo cache.
    require_once __DIR__ . '/../../source/routes/link.php';
    // Simplificación de acceso a las rutas de assets
    $assets = $NAV_LINKS->asset_paths;
    $compiled = $assets['compiled_assets'];
@endphp

<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>

    {{-- MUKIMONO: Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ $page->baseUrl }}{{ $assets['favicon'] }}">
    <link rel="shortcut icon" href="{{ $page->baseUrl }}{{ $assets['favicon'] }}" type="image/x-icon">

    {{-- 🎨 ICONOS: Font Awesome 5 Free --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40wLw2+Xp0B26aVz8/T4j4fA9bJzI1l0D9b/0t0x0qE+I3a4E1jG0Q2F0vG6jN9tY+R4jP6hQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- MUKIMONO: Cache-Busting para CSS --}}
    <link rel="stylesheet" href="{{ $page->baseUrl }}{{ $compiled['css'] }}?v={{ $compiled['version'] }}">

    {{-- MUKIMONO: Cache-Busting para JS --}}
    <script defer src="{{ $page->baseUrl }}{{ $compiled['js'] }}?v={{ $compiled['version'] }}"></script>
</head>

<body class="mukimono tma_d1">
    <div class="fx2">
        <div class="pg1440">
            @yield('body')
            @include('_layouts.footer')
        </div>
    </div>
</body>

</html>
