<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        
        {{-- CORRECCIÓN: Se eliminó '/build_local' de la ruta, ya que Laragon ahora apunta a 'build_local' --}}
        <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/build/css/main.css">
        <script defer src="{{ $page->baseUrl }}/assets/build/js/main.js"></script>
    </head>
    
    {{-- BODY (Clases eliminadas) --}}
    <body class="mukimono tma_pri">
        @yield('body')
        {{-- Inclusión del Footer --}}
        @include('_layouts.footer')
    </body>
</html>