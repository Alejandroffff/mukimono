@extends('_layouts.main')

@section('title', 'Mukimono - Índice Z (zi)')
@section('description', 'Clases para controlar la propiedad "z-index" y gestionar la superposición de elementos en la
    interfaz.')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd12">
            <h1>Índice Z (`zi`)</h1>
            <p>
                Clases para aplicar **`z-index`** y controlar la posición de los elementos en el eje Z (profundidad). Útil
                para modales, *tooltips*, *popups* y menús fijos.
            </p>
        </div>
    </header>

    <main class="pd12">

        <h2>Escala de Superposición</h2>
        <p class="mg6">La escala de **`.zi1` a `.zi10`** permite definir el orden de apilamiento. Un número mayor
            significa que el elemento estará más cerca del usuario.</p>

        <div class="mg6x pd6 bd1 tma_d3">
            <table>
                <thead>
                    <tr>
                        <th>Clase</th>
                        <th>Propiedad CSS</th>
                        <th>Uso Común</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>**.zi1**</td>
                        <td>`z-index: 1`</td>
                        <td>Elementos en la capa base (ej: *cards*).</td>
                    </tr>
                    <tr>
                        <td>**.zi5**</td>
                        <td>`z-index: 5`</td>
                        <td>Menús fijos (*sticky*) o *tooltips*.</td>
                    </tr>
                    <tr>
                        <td>**.zi8**</td>
                        <td>`z-index: 8`</td>
                        <td>Barras de navegación superiores (*navbar*).</td>
                    </tr>
                    <tr>
                        <td>**.zi10**</td>
                        <td>`z-index: 10`</td>
                        <td>Elementos críticos o *modals* (capa superior).</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mg6x bd1 tma_d5 pd6" style="position: relative; height: 100px;">
            {{-- Ejemplos Visuales (Se asume que los elementos necesitan position: relative/absolute/fixed) --}}
            <div class="zi1 pd3 mg3 tma_d8" style="position: absolute; top: 30px; left: 10px; width: 100px; height: 50px;">
                <p class="mg0 fs12">.zi1 (Base)</p>
            </div>

            <div class="zi5 pd3 mg3 tma_d9" style="position: absolute; top: 10px; left: 50px; width: 100px; height: 50px;">
                <p class="mg0 fs12">.zi5 (Medio)</p>
            </div>

            <div class="zi10 pd3 mg3 tma_d10" style="position: absolute; top: 5px; left: 90px; width: 100px; height: 50px;">
                <p class="mg0 fs12">.zi10 (Superior)</p>
            </div>
        </div>

    </main>
@endsection
