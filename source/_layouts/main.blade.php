@php
    // Estilos de diseño (manteniendo la estética profesional)
    $design = 'mukimono tma_d1';

    // Obtención de rutas de assets y archivos compilados de NAV_LINKS
    $NAV_LINKS = $page->NAV_LINKS ?? [];
    $assets = $NAV_LINKS['asset_paths'] ?? [];
    $compiled = $assets['compiled_assets'] ?? [];
@endphp

<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>

    {{-- Favicon y acceso directo --}}
    <link rel="icon" type="image/x-icon"
        href="{{ $page->baseUrl }}{{ $assets['favicon'] ?? '/assets/images/logo.ico' }}">
    <link rel="shortcut icon" href="{{ $page->baseUrl }}{{ $assets['favicon'] ?? '/assets/images/logo.ico' }}"
        type="image/x-icon">

    {{-- Fuentes de Google: Material Symbols --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    {{-- Fuentes de Google: Material Icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- Font Awesome (Versión 5.15.4 para compatibilidad con tus clases fab) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40wLw2+Xp0B26aVz8/T4j4fA9bJzI1l0D9b/0t0x0qE+I3a4E1jG0Q2F0vG6jN9tY+R4jP6hQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Hoja de estilos principal de Mukimono CSS --}}
    <link rel="stylesheet"
        href="{{ $page->baseUrl }}{{ $compiled['css'] ?? '/assets/build/css/main.css' }}?v={{ $compiled['version'] ?? '1' }}">
</head>

{{-- Body: h100vh y of4 (overflow: hidden, según utilidades) aseguran un contenedor de altura completa sin scroll en el body --}}
<body class="{{ $design }} h100vh of4"> 
    {{-- Contenedor Flex principal para dividir la altura (e.g., para un sidebar o contenido) --}}
    <div class="fx2 h100p"> 
        {{-- Contenedor interno con ancho máximo (pg1440) y scroll vertical (of1) --}}
        <div class="pg1440 h100p of1">
            <div class="ha100p">
                {{-- Contenido de la página (e.g., header, main) --}}
                @yield('body')
            </div>
            {{-- Inclusión del Footer --}}
            @include('_layouts.footer')
        </div>
    </div>

    {{-- Script JS compilado --}}
    <script defer
        src="{{ $page->baseUrl }}{{ $compiled['js'] ?? '/assets/build/js/main.js' }}?v={{ $compiled['version'] ?? '1' }}">
    </script>
</body>

</html>