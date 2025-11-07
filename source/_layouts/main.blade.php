@php
    // Accedemos a NAV_LINKS a través de $page, que contiene la configuración fusionada.
    // Usamos corchetes '[]' porque en PHP la configuración se maneja como un array asociativo.
    $assets = $page->NAV_LINKS['asset_paths'] ?? []; // Añadido ?? [] para seguridad
    $compiled = $assets['compiled_assets'] ?? []; // Añadido ?? [] para seguridad
@endphp

<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>

    {{-- MUKIMONO: Favicon (Usando $assets) --}}
    <link rel="icon" type="image/x-icon" href="{{ $page->baseUrl }}{{ $assets['favicon'] ?? '/assets/images/logo.ico' }}">
    <link rel="shortcut icon" href="{{ $page->baseUrl }}{{ $assets['favicon'] ?? '/assets/images/logo.ico' }}" type="image/x-icon">

    {{-- 🎨 ICONOS: Google Material Symbols (Google Icons) --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    {{-- 🎨 ICONOS: Font Awesome 5 Free --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40wLw2+Xp0B26aVz8/T4j4fA9bJzI1l0D9b/0t0x0qE+I3a4E1jG0Q2F0vG6jN9tY+R4jP6hQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- MUKIMONO: Cache-Busting para CSS (Usando $compiled) --}}
    <link rel="stylesheet" href="{{ $page->baseUrl }}{{ $compiled['css'] ?? '/assets/build/css/main.css' }}?v={{ $compiled['version'] ?? '1' }}">

    {{-- MUKIMONO: Cache-Busting para JS (Usando $compiled) --}}
    <script defer src="{{ $page->baseUrl }}{{ $compiled['js'] ?? '/assets/build/js/main.js' }}?v={{ $compiled['version'] ?? '1' }}"></script>
</head>

<body class="mukimono tma_d1">
    <div class="fx2">
        <div class="pg1440 h100vh of1">
            @yield('body')
            @include('_layouts.footer')
        </div>
    </div>
</body>

</html>