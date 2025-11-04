<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>

        {{-- MUKIMONO: Favicon --}}
        <link rel="icon" type="image/x-icon" href="{{ $page->baseUrl }}/assets/images/logo.ico">
        <link rel="shortcut icon" href="{{ $page->baseUrl }}/assets/images/logo.ico" type="image/x-icon">

        {{-- MUKIMONO: Cache-Busting para CSS --}}
        <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/build/css/main.css?v={{ time() }}">

        {{-- MUKIMONO: Cache-Busting para JS --}}
        <script defer src="{{ $page->baseUrl }}/assets/build/js/main.js?v={{ time() }}"></script>
    </head>
    
    {{-- BODY (Estética profesional y elegante) --}}
    <body class="mukimono tma_d1">
        <div class="fx2">
            <div class="pg1440">
                @yield('body')
                {{-- Inclusión del Footer --}}
                @include('_layouts.footer')
            </div> 
        </div>
    </body>
</html>
