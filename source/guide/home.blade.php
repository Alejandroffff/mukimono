@extends('_layouts.main')

@section('title', 'Guía de Inicio Mukimono')
@section('description', 'Bienvenido a la guía de Mukimono CSS.')

@section('body')
    <header>
        {{-- Incluye la barra de navegación de la guía --}}
        @include('_layouts.navbar_guide_top')

        {{-- Contenedor principal de la cabecera --}}
        <div class="pd12 tac">
            <h1 class="fs32 fw7 mg8b">Bienvenido a Mukimono CSS</h1>
            <p class="fs18 op8">
                Un framework modular, ligero y elegante.
            </p>
        </div>
    </header>


    <main>
        {{-- Sección de bienvenida más directa --}}
        <div class="mg32t pd24 tac">
            <h2 class="fs24 mg16b">Documentación Completa</h2>
            <p class="fs16 mg8b">
                Utiliza el menú de navegación para explorar todas las 37 utilidades
            </p>
        </div>
    </main>
@endsection
