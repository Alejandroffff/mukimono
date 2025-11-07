@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Menú (mn)')
@section('description', 'Ejemplos de las utilidades de ancho de menú (mnN) para la creación de sidebars y navegación lateral.')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd12">
            <h1>Menús Laterales (`mn`)</h1>
            <p>
                Clases diseñadas para contenedores de navegación (sidebars). Fijan un **ancho máximo** y fuerzan el uso de Flexbox en columna para la lista de elementos (`<ul>`/`<li>`).
            </p>
        </div>
    </header>

    <main class="pd12">

        <h2>Anchos Predefinidos</h2>
        <p class="mg6">Las clases `mnN` aplican `max-width` y aseguran que los elementos internos de la lista (`ul` y `li`) se estiren y se apilen verticalmente.</p>

        <div class="mg6x pd6 bd1 tma_d2 fx fx11"> {{-- Contenedor Flex para mostrar sidebars horizontalmente --}}

            <div class="mn64 bd1 tma_d5 mg6">
                <h3 class="fs12 pd3 mg0 cl9 bg3">.mn64</h3>
                <ul>
                    <li class="pd1 bg1 cl1">🏠</li>
                    <li class="pd1 bg1 cl1">⚙️</li>
                    <li class="pd1 bg1 cl1">✉️</li>
                </ul>
            </div>
            
            <div class="mn200 bd1 tma_d5 mg6">
                <h3 class="fs14 pd3 mg0 cl9 bg3">.mn200</h3>
                <ul>
                    <li class="pd2 bg2 cl9">Inicio</li>
                    <li class="pd2 bg2 cl9">Perfil</li>
                    <li class="pd2 bg2 cl9">Configuración</li>
                </ul>
            </div>

            <div class="mn280 bd1 tma_d5 mg6">
                <h3 class="fs16 pd3 mg0 cl9 bg3">.mn280</h3>
                <ul>
                    <li class="pd3 bg4 cl9">Dashboard Principal</li>
                    <li class="pd3 bg4 cl9">Gestión de Usuarios</li>
                    <li class="pd3 bg4 cl9">Reportes de Venta</li>
                </ul>
            </div>
        </div>
        
        <p class="mg6 fs14 cl4">
            **Nota:** Estas clases solo definen la estructura Flexbox y el ancho; los estilos de fondo y texto se aplican con utilidades adicionales de Mukimono.
        </p>
    </main>
@endsection