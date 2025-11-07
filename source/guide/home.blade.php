@extends('_layouts.main')

@section('title', 'Guía de Inicio Mukimono')
@section('description', 'Bienvenido a la guía de Mukimono CSS.')

@section('body')
    <header>
        {{-- Asumo que _layouts.navbar_guide_top está configurado --}}
        @include('_layouts.navbar_guide_top') 
        <div class="pd12">
            <h1>Bienvenido a la Guía de Mukimono CSS</h1>
            <p>
                Aquí encontrarás toda la documentación para las utilidades de Mukimono CSS.
                Usa el menú lateral para navegar entre las diferentes secciones.
            </p>
            <p>
                Mukimono CSS es un framework ligero y modular diseñado para
                ayudarte a construir interfaces de usuario rápidas y consistentes.
            </p>
        </div>

    </header>


    <main class="pd12">
        <h2>¿Por dónde empezar?</h2>
        <ul>
            @php
                // Accedemos a los enlaces secundarios (guía)
                $guideLinks = $page->NAV_LINKS['link_secondary'] ?? [];
            @endphp
            
            {{-- CORRECCIÓN 1: Enlace a Alerts (Alert) --}}
            <li>Explora la sección de
                <a href="{{ $page->baseUrl }}{{ $guideLinks['alert']['route'] ?? '/guide/alert' }}">Alerts</a>
                para entender cómo
                manejar notificaciones.
            </li>
            
            {{-- CORRECCIÓN 2: Enlace a Animation --}}
            <li>Descubre cómo animar elementos en la sección de
                <a href="{{ $page->baseUrl }}{{ $guideLinks['animation']['route'] ?? '/guide/animation' }}">Animation</a>.
            </li>
            
            {{-- CORRECCIÓN 3: Enlace a Color --}}
            <li>Revisa las utilidades básicas de
                <a href="{{ $page->baseUrl }}{{ $guideLinks['color']['route'] ?? '/guide/color' }}">Color</a> y
                
                {{-- CORRECCIÓN 4: Enlace a Font --}}
                <a href="{{ $page->baseUrl }}{{ $guideLinks['font']['route'] ?? '/guide/font' }}">Font</a>.
            </li>
        </ul>
    </main>
@endsection