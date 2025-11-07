@extends('_layouts.main')

@section('title', 'Mukimono - Anchos Responsivos de Bloque (rps)')
@section('description', 'Clases para definir anchos de bloque basados en porcentajes, ideales para construir layouts
    responsivos de escritorio.')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Anchos Responsivos (`rps`)</h1>
            <p>
                Clases que definen el ancho de un elemento en porcentajes. Utilizan **`display: inline-block`** para
                permitir la colocación de múltiples bloques en la misma línea, creando un sistema de cuadrícula flexible.
            </p>
        </div>
    </header>

    <main class="pd12">

        <h2>División en Columnas (Desktop Base)</h2>
        <p class="mg6">Estas clases son el ancho base (`width: N%`) para pantallas grandes. Para lograr el efecto de
            columna, los elementos deben estar en la misma línea y el contenedor padre debe manejar el espaciado (ej. usando
            `pd0` en el padre).</p>

        <div class="mg6x pd6 bd1 tma_d2 pd0"> {{-- pd0 es clave aquí para que sumen 100% --}}

            <h3 class="mg6t mg3b fs16 pd3">Mitades (`.rps50`)</h3>
            <div class="rps50 pd3 bd1 tma_d5" style="height: 50px; box-sizing: border-box;">
                <p class="mg0 fs14">50%</p>
            </div>
            <div class="rps50 pd3 bd1 tma_d8" style="height: 50px; box-sizing: border-box;">
                <p class="mg0 fs14">50%</p>
            </div>

            <h3 class="mg6t mg3b fs16 pd3">Tercios y Proporciones (`.rps33`, `.rps66`)</h3>
            <div class="rps33 pd3 bd1 tma_d5" style="height: 50px; box-sizing: border-box;">
                <p class="mg0 fs14">33.33%</p>
            </div>
            <div class="rps66 pd3 bd1 tma_d8" style="height: 50px; box-sizing: border-box;">
                <p class="mg0 fs14">66.66%</p>
            </div>

            <h3 class="mg6t mg3b fs16 pd3">Cuartos (`.rps25`, `.rps75`)</h3>
            <div class="rps25 pd3 bd1 tma_d5" style="height: 50px; box-sizing: border-box;">
                <p class="mg0 fs14">25%</p>
            </div>
            <div class="rps75 pd3 bd1 tma_d8" style="height: 50px; box-sizing: border-box;">
                <p class="mg0 fs14">75%</p>
            </div>
        </div>

        ---

        <h2>Referencia de Porcentajes</h2>
        <p class="mg6">Valores de las clases de ancho base definidas:</p>

        <div class="mg6x pd6 bd1 tma_d3">
            <table>
                <thead>
                    <tr>
                        <th>Clase</th>
                        <th>Ancho (`width`)</th>
                        <th>Relación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>`.rps100`</td>
                        <td>100%</td>
                        <td>Bloque completo</td>
                    </tr>
                    <tr>
                        <td>`.rps50`</td>
                        <td>50%</td>
                        <td>1/2</td>
                    </tr>
                    <tr>
                        <td>`.rps33`</td>
                        <td>33.33%</td>
                        <td>1/3</td>
                    </tr>
                    <tr>
                        <td>`.rps66`</td>
                        <td>66.66%</td>
                        <td>2/3</td>
                    </tr>
                    <tr>
                        <td>`.rps25`</td>
                        <td>25%</td>
                        <td>1/4</td>
                    </tr>
                    <tr>
                        <td>`.rps75`</td>
                        <td>75%</td>
                        <td>3/4</td>
                    </tr>
                    <tr>
                        <td>`.rps20`</td>
                        <td>20%</td>
                        <td>1/5</td>
                    </tr>
                    <tr>
                        <td>`.rps80`</td>
                        <td>80%</td>
                        <td>4/5</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
