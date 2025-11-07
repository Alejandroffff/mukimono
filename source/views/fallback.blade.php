@extends('_layouts.main')

{{-- Define la variable 'design' para aplicar estilos específicos a esta página --}}
@php
    $page->title = 'Error 404 | Página No Encontrada';
    $page->description = 'La página que buscas no se ha podido localizar.';
@endphp

@section('body')
    {{-- Contenedor Principal (Sin Clases) --}}
    <div class="pd12 pd12x">
        {{-- Mensaje de Error 404 (Sin Clases) --}}
        <header>
            @include('_layouts.navbar_top')
            <div>
                <h1>404</h1>
                <p>Página No Encontrada</p>
                <p>Lo sentimos, la URL que intentas acceder no existe o ha sido movida.</p>
            </div>

        </header>


        {{-- Contenedor de Acciones (Sin Clases) --}}
        <div>

            <a href="/" class="lb32">
                Volver a Inicio
            </a>

        </div>
    </div>
@endsection
