@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Filtro Blur')
@section('description', 'Ejemplos de las utilidades de filtro de desenfoque (blur) abreviadas de Mukimono CSS.')

@section('body')
    <header>
        {{-- Se asume que _layouts.navbar_guide_top existe y gestiona sus propias rutas --}}
        @include('_layouts.navbar_guide_top')
        <div class="pd12">
            <h1>Filtro Blur (`b`)</h1>
            <p>
                Clases abreviadas para aplicar el filtro CSS `blur()`.
            </p>
        </div>
    </header>

    <main class="pd12">
        <h2>Ejemplos de Desenfoque</h2>
        <p class="mg6">Aplica la clase directamente sobre la imagen o el contenedor para ver el efecto.</p>

        <div class="mg6x pd6">
            {{-- CORRECCIÓN DE RUTA: Acceder a NAV_LINKS como array a través de $page --}}
            @php
                $logotypePath =
                    $page->baseUrl . ($page->NAV_LINKS['asset_paths']['logotype'] ?? '/assets/images/logotype.png');
            @endphp

            <div class="mg6 pd6">
                <h3>.b0 (0px)</h3>
                {{-- La ruta $logotypePath ya está corregida arriba --}}
                <img class="b0" src="{{ $logotypePath }}" alt="Imagen nítida">
            </div>

            <div class="mg6 pd6">
                <h3>.b1 (1px)</h3>
                <img class="b1" src="{{ $logotypePath }}" alt="Imagen con blur de 1px">
            </div>

            <div class="mg6 pd6">
                <h3>.b2 (2px)</h3>
                <img class="b2" src="{{ $logotypePath }}" alt="Imagen con blur de 2px">
            </div>

            <div class="mg6 pd6">
                <h3>.b3 (3px)</h3>
                <img class="b3" src="{{ $logotypePath }}" alt="Imagen con blur de 3px">
            </div>
        </div>
    </main>
@endsection
