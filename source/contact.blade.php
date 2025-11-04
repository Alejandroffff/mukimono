@extends('_layouts.main')

{{-- Define el título y descripción de la página --}}
@php
    $page->title = 'Contacto y Soporte - MUKIMONO CSS';
    $page->description = 'Vías directas para contacto, soporte, redes sociales y donaciones para MUKIMONO CSS.';
@endphp

@section('body')

    {{-- Contenedor Principal (sin clases) --}}
    <div>

        {{-- 1. Cabecera de Página (sin clases) --}}
        <header>
            @include('_layouts.navbar')
            <div class="pd12">
                   <h1>
                Soporte y Colaboración
            </h1>
            <p>
                Conéctese con el equipo de MUKIMONO CSS y apoye nuestro desarrollo.
            </p>
            </div>
         
        </header>

        {{-- 2. Grid de Opciones de Contacto (sin clases) --}}
        <section class="pd12tb fx10 pd12x">
            
            {{-- Tarjeta 1: Contacto Directo (sin clases) --}}
            <div>
                <h3>Contacto Directo</h3>
                <p>
                    <span>✉️</span> info@mukimono.com
                </p>
                <p>
                    <span>📞</span> +507 555-5555
                </p>
            </div>
            
            {{-- Tarjeta 2: Redes Sociales / Código (sin clases) --}}
            <div>
                <h3>Comunidad y Código</h3>
                <ul>
                    <li>
                        <a href="#" class="lb32">GitHub (Código Fuente)</a>
                    </li>
                    <li>
                        <a href="#" class="lb32">Twitter/X (Noticias Oficiales)</a>
                    </li>
                </ul>
            </div>
            
            {{-- Tarjeta 3: Donaciones / Apoyo (sin clases) --}}
            <div>
                <h3>Apoyar el Proyecto</h3>
                <p>
                    MUKIMONO CSS es gratuito y de código abierto. Su apoyo es vital para mantener el proyecto.
                </p>
                <a href="#" class="lb32">
                    Realizar una Donación
                </a>
            </div>

        </section>

    </div>

@endsection