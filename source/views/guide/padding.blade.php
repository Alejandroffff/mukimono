@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Relleno (pd)')
@section('description', 'Ejemplos de las utilidades de padding (pd) para establecer espacio interno en píxeles.')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Relleno (`pd`)</h1>
            <p>
                Clases para aplicar **padding** (relleno interno) en pasos de píxeles (`pd0` a `pd12`). Incluye opciones para todos los lados, lados específicos (t, r, b, l), y bidireccionales.
            </p>
        </div>
    </header>

    <main class="pd12">

        <h2>Relleno Uniforme</h2>
        <p class="mg6">Aplica el mismo valor de relleno a los cuatro lados del elemento.</p>

        <div class="mg6x pd6 bd1 tma_d2">
            <h3 class="mg6">Relleno de 5px (`.pd5`)</h3>
            <div class="pd5 bd1 tma_d5">
                <p class="mg0 fs14">Este bloque tiene **5px de relleno** en todos los lados.</p>
            </div>
            <h3 class="mg6t">Relleno de 12px (`.pd12`)</h3>
            <div class="pd12 bd1 tma_d8">
                <p class="mg0 fs14">Este bloque tiene **12px de relleno** en todos los lados.</p>
            </div>
        </div>

        ---

        <h2>Relleno por Lado</h2>
        <p class="mg6">Utiliza el sufijo de dirección: **t** (top), **r** (right), **b** (bottom), **l** (left) para especificar el lado.</p>

        <div class="mg6x pd6 bd1 tma_d3">
            <h3 class="mg6">Relleno Superior (`.pd8t`)</h3>
            <div class="bd1 tma_d5">
                <div class="pd8t bg1">
                    <p class="mg0 fs14">Contenido con **8px de relleno superior**.</p>
                </div>
            </div>

            <h3 class="mg6t">Relleno Lateral (`.pd6l`)</h3>
            <div class="bd1 tma_d8">
                <div class="pd6l bg2" style="width: 250px;">
                    <p class="mg0 fs14">Contenido con **6px de relleno izquierdo**.</p>
                </div>
            </div>
        </div>

        ---

        <h2>Relleno Bidireccional</h2>
        <p class="mg6">Combina direcciones: **tb** (Top/Bottom) o **lr** (Left/Right).</p>
        
        <div class="mg6x pd6 bd1 tma_d4">
            <h3 class="mg6">Vertical (`.pd10tb`)</h3>
            <div class="pd10tb bd1 tma_d5">
                <p class="mg0 fs14">Tiene **10px de relleno arriba y abajo**.</p>
            </div>

            <h3 class="mg6t">Horizontal (`.pd7lr`)</h3>
            <div class="pd7lr bd1 tma_d8" style="display: inline-block;">
                <p class="mg0 fs14">Tiene **7px de relleno a izquierda y derecha**.</p>
            </div>
        </div>
    </main>
@endsection