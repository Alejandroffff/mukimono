@extends('_layouts.main')

{{-- Define el título y descripción de la página --}}
@php
    $page->title = 'Mukimono css - Framework CSS Simple y Elegante';
    $page->description =
        'Mukimono css: Marco de trabajo CSS gratuito, minimalista y profesional para interfaces de alto contraste.';
@endphp

@section('body')
    {{-- Contenedor principal (Se usa 'design' según tus preferencias) --}}
    <div class="design">

        {{-- 1. Cabecera Principal y Lema --}}
        <header>
            @include('_layouts.navbar_top')
            <div class="pd12">
                <h1>
                    MUKIMONO <span>CSS</span>
                </h1>
                <p>
                    Marco de trabajo CSS simple, rápido y profesional.
                </p>
            </div>
        </header>

        <div class="pd12x">
            {{-- 2. Sección de Propósito (Qué es) --}}
            <section>
                <h2>Enfoque Minimalista</h2>
                <p>
                    <strong>Mukimono css</strong> minimalista, rápido y de código abierto, garantiza un <strong>diseño serio
                        y elegante</strong> con la máxima eficiencia.
                </p>
            </section>

            {{-- 3. Llamada a la Acción (CTA) Directa --}}
            <div>
                <a href="/guide/home" class="lb48 tma_d9 rd3">
                    Comenzar con la Guía
                </a>
            </div>
        </div>
    </div>
@endsection
