@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Ancho (w, wa, wi)')
@section('description', 'Clases para aplicar anchos fijos (max/min-width) en píxeles y anchos relativos (%, vw).')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd12">
            <h1>Anchos (`w`, `wa`, `wi`)</h1>
            <p>
                Clases para controlar el ancho de los elementos. Permiten establecer **anchos fijos** (con `max-width` o
                `min-width`) y **anchos relativos** (%, viewport).
            </p>
        </div>
    </header>

    <main class="pd12">

        <h2>Anchos Fijos (Pixels)</h2>
        <p class="mg6">Utiliza **`wa`** (Width Absolute/Max) para establecer un ancho máximo y **`wi`** (Width
            Initial/Min) para establecer un ancho mínimo. La escala va de 12px hasta 256px.</p>

        <div class="mg6x pd6 bd1 tma_d3">
            {{-- Tabla para documentar la escala --}}
            <table>
                <thead>
                    <tr>
                        <th>Escala (px)</th>
                        <th>Nomenclatura</th>
                        <th>Clase Ejemplo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>**Pequeña** (12px - 48px)</td>
                        <td>`waN` / `wiN`</td>
                        <td>`.wa32` (Máx 32px), `.wi48` (Mín 48px)</td>
                    </tr>
                    <tr>
                        <td>**Media** (56px - 96px)</td>
                        <td>`waN` / `wiN`</td>
                        <td>`.wa80` (Máx 80px), `.wi56` (Mín 56px)</td>
                    </tr>
                    <tr>
                        <td>**Grande** (128px - 256px)</td>
                        <td>`waN` / `wiN`</td>
                        <td>`.wa128` (Máx 128px), `.wi256` (Mín 256px)</td>
                    </tr>
                </tbody>
            </table>
            <p class="fs12 cl4 mg12t">
                *Nota: Todas las clases tienen una variante `x` para aplicar estilos a los hijos directos (Ej: `.wa64x >
                *`).*
            </p>
        </div>

        <div class="mg6x bd1 tma_d5 pd6 fx fx10">
            {{-- Ejemplos Visuales --}}
            <div class="wa64 pd3 bd1 tma_d8 mg3" style="background-color: #f1f1f1; border-color: #233751;">
                <p class="mg0 fs12">.wa64 (Máx 64px)</p>
            </div>

            <div class="wi96 pd3 bd1 tma_d8 mg3" style="width: 50%; height: 50px; border-color: #233751;">
                <p class="mg0 fs12">.wi96 (Mín 96px)</p>
            </div>
        </div>

        ---

        <h2>Anchos Relativos a Contenedor/Viewport</h2>
        <p class="mg6">Utilidades esenciales para el diseño *responsive*.</p>

        <div class="mg6x pd6 bd1 tma_d4">
            <table>
                <thead>
                    <tr>
                        <th>Clase</th>
                        <th>Propiedad CSS</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>**.w100p**</td>
                        <td>`width: 100%`</td>
                        <td>Ancho completo del contenedor padre.</td>
                    </tr>
                    <tr>
                        <td>**.wa100p**</td>
                        <td>`max-width: 100%`</td>
                        <td>Asegura que el elemento no exceda el ancho del padre.</td>
                    </tr>
                    <tr>
                        <td>**.wa100vw**</td>
                        <td>`max-width: 100vw`</td>
                        <td>Límite del ancho del viewport (ideal para secciones full-width).</td>
                    </tr>
                    <tr>
                        <td>**.wi100vw**</td>
                        <td>`min-width: 100vw`</td>
                        <td>Asegura un ancho mínimo igual al viewport.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
