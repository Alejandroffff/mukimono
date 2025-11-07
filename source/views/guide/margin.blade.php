@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Margen (mg)')
@section('description', 'Ejemplos de las utilidades de margen (mg) para establecer espacio externo en píxeles.')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Margen (`mg`)</h1>
            <p>
                Clases para aplicar márgenes externos en pasos de píxeles (`mg0` a `mg12`). Incluye opciones para todos los lados, lados específicos (t, r, b, l), y márgenes automáticos.
            </p>
        </div>
    </header>

    <main class="pd12">

        <h2>Margen Auto y Uniforme</h2>
        <p class="mg6">Utilidades para centrado de bloques y márgenes iguales en todos los lados.</p>

        <div class="mg6x pd6 bd1 tma_d2">
            <h3 class="mg6">Centrado (`.mg`)</h3>
            <div class="mg pd3 bd1 tma_d5" style="width: 200px;">
                <p class="mg0 fs14">Este bloque está centrado horizontalmente.</p>
            </div>
            <h3 class="mg6">Margen Uniforme (`.mg4`)</h3>
            <div class="mg4 pd3 bd1 tma_d8">
                <p class="mg0 fs14">Este bloque tiene 4px de margen en todos los lados.</p>
            </div>
        </div>

        ---

        <h2>Margen por Lado</h2>
        <p class="mg6">Utiliza el sufijo de dirección: **t** (top), **r** (right), **b** (bottom), **l** (left).</p>

        <div class="mg6x pd6 bd1 tma_d3">
            <h3 class="mg6">Separación Vertical (`.mg8t`, `.mg8b`)</h3>
            <div class="pd3 bd1 tma_d5">
                <p class="mg0b fs14">Elemento Superior sin margen abajo.</p>
            </div>
            <div class="mg8t pd3 bd1 tma_d5">
                <p class="mg0 fs14">Elemento Inferior con **8px de margen arriba** (`.mg8t`).</p>
            </div>

            <h3 class="mg6">Márgenes Laterales (`.mg6r`, `.mg6l`)</h3>
            <div class="fx mg3tb">
                <div class="mg6r pd3 bd1 tma_d8">
                    <p class="mg0 fs14">Elemento con 6px a la derecha.</p>
                </div>
                <div class="mg6l pd3 bd1 tma_d8">
                    <p class="mg0 fs14">Elemento con 6px a la izquierda.</p>
                </div>
            </div>
        </div>

        ---

        <h2>Márgenes Bidireccionales</h2>
        <p class="mg6">Combina direcciones: **tb** (Top/Bottom) o **lr** (Left/Right).</p>
        
        <div class="mg6x pd6 bd1 tma_d4">
            <h3 class="mg6">Vertical (`.mg12tb`)</h3>
            <div class="mg12tb pd3 bd1 tma_d5">
                <p class="mg0 fs14">Tiene 12px de margen arriba y abajo.</p>
            </div>

            <h3 class="mg6">Horizontal (`.mg10lr`)</h3>
            <div class="mg10lr pd3 bd1 tma_d8" style="display: inline-block;">
                <p class="mg0 fs14">Tiene 10px de margen a izquierda y derecha.</p>
            </div>
        </div>
    </main>
@endsection