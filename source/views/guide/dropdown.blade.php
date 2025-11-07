@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades Dropdown')
@section('description', 'Ejemplos de los contenedores desplegables (dd1 y dd2) de Mukimono CSS con alineación izquierda y derecha.')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Dropdowns (`dd`)</h1>
            <p>
                Clases para crear menús desplegables que aparecen al pasar el ratón sobre el contenedor principal, con opciones de alineación a la izquierda (`dd1`) o a la derecha (`dd2`).
            </p>
        </div>
    </header>

    <main class="pd12">
        <h2>Dropdown con Alineación a la Izquierda (`.dd1`)</h2>
        <p class="mg6">
            El menú desplegable aparecerá alineado con el borde izquierdo de su contenedor principal.
        </p>

        <div class="mg6x pd6 bd1 tma_d2" style="height: 150px;">
            <div class="dd1 mg6">
                {{-- Contenedor del Botón / Trigger --}}
                <button class="bt40 pd6 tma_d5">
                    Menú Izquierda
                </button>

                {{-- Contenido del Dropdown --}}
                <div class="bd1">
                    <a href="#" class="mg0 pd3 bd1b tma_d5 cl1" style="display: block;">Opción 1</a>
                    <a href="#" class="mg0 pd3 bd1b tma_d5 cl1" style="display: block;">Opción 2</a>
                    <a href="#" class="mg0 pd3 tma_d5 cl1" style="display: block;">Opción 3</a>
                </div>
            </div>
        </div>

        ---

        <h2>Dropdown con Alineación a la Derecha (`.dd2`)</h2>
        <p class="mg6">
            El menú desplegable aparecerá alineado con el borde derecho de su contenedor principal.
        </p>

        <div class="mg6x pd6 bd1 tma_d2" style="text-align: right; height: 150px;">
            <div class="dd2 mg6" style="margin-left: auto;">
                {{-- Contenedor del Botón / Trigger --}}
                <button class="bt40 pd6 tma_d5">
                    Menú Derecha
                </button>

                {{-- Contenido del Dropdown --}}
                <div class="bd1">
                    <a href="#" class="mg0 pd3 bd1b tma_d5 cl1" style="display: block;">Opción A</a>
                    <a href="#" class="mg0 pd3 bd1b tma_d5 cl1" style="display: block;">Opción B</a>
                    <a href="#" class="mg0 pd3 tma_d5 cl1" style="display: block;">Opción C</a>
                </div>
            </div>
        </div>
    </main>
@endsection