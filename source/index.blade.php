@extends('_layouts.main')

{{-- Define el título y descripción de la página --}}
@php
    $page->title = 'MUKIMONO CSS - Framework CSS Simple y Elegante';
    $page->description = 'MUKIMONO CSS: Marco de trabajo CSS gratuito, minimalista y profesional para interfaces de alto contraste.';
@endphp

@section('body')

    {{-- Contenedor principal (sin clases) --}}
    <div>

        {{-- 1. Cabecera Principal y Lema (sin clases) --}}
        <header>
            @include('_layouts.navbar')
            <h1>
                MUKIMONO <span>CSS</span>
            </h1>
            <p>
                Marco de trabajo CSS simple, rápido y profesional.
            </p>
        </header>

        {{-- 2. Sección de Propósito (Qué es) (sin clases) --}}
        <section>
            <h2>Enfoque Minimalista</h2>
            <p>
                <strong>MUKIMONO CSS</strong> es un <strong>framework gratuito y de código abierto</strong> diseñado para la ingeniería de interfaces de usuario. Su arquitectura minimalista permite construir sitios elegantes y funcionales con la máxima eficiencia y el menor código posible. Obtén **alto contraste**, **velocidad** y un **diseño serio y limpio** en cada proyecto.
            </p>
        </section>

        {{-- 3. Llamada a la Acción (CTA) Directa (sin clases) --}}
        <div>
            <a href="/guia">
                Comenzar con la Guía
            </a>
        </div>

    </div>

@endsection