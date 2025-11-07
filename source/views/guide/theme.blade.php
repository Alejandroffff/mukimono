@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Tema (tm)')
@section('description', 'Clases para aplicar paletas de colores completas (fondo y texto) usando la escala de 10 tonos
    de Mukimono (d1 a d10) para diferentes temas (tma, tmb, tmc).')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Temas (`tm`) y Tonalidades (`d1` a `d10`)</h1>
            <p>
                Clases para aplicar rápidamente un **esquema de color completo** a un contenedor, definiendo el color de
                fondo y el color de texto para asegurar el contraste y la coherencia visual.
            </p>
        </div>
    </header>

    <main class="pd12">

        <h2>Estructura de la Clase</h2>
        <p class="mg6">Cada clase combina el **Tema** (ej: `.tma` para Navy) y la **Tonalidad** (ej: `d5`).</p>

        <div class="mg6x bd1 tma_d2 pd6">
            <p class="mg0 fs14">**Formato Base**: `.[tema]_[tono]` (Ej: `.tma_d4`)</p>
            <p class="mg0 fs14">**Anidamiento**: `.[tema]_[tono]x` (Aplica a hijos. Ej: `.tma_d4x > *`)</p>
            <p class="mg0 fs14">**Hover**: `.[tema]_[tono]hv` (Cambio al pasar el ratón. Ej: `.tma_d4hv:hover`)</p>
        </div>

        ---

        <h2>Tonalidades (`d1` a `d10`)</h2>
        <p class="mg6">La escala de 10 tonos define la función del color en el diseño:</p>

        <div class="mg6x pd6 bd1 tma_d3">
            <table>
                <thead>
                    <tr>
                        <th>Tono</th>
                        <th>Función</th>
                        <th>Ejemplo de Tema A (Navy)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>**`d1` - `d6`**</td>
                        <td>Degradado principal. Usualmente, **`d1` es el más oscuro** (base) y **`d6` es el más claro**
                            (contenido principal).</td>
                        <td>
                            <div class="tma_d1 pd1 mg1">d1 (Base)</div>
                            <div class="tma_d6 pd1 mg1">d6 (Contenido)</div>
                        </td>
                    </tr>
                    <tr>
                        <td>**`d7`**</td>
                        <td>Tono secundario intermedio, para separadores o fondos sutiles.</td>
                        <td>
                            <div class="tma_d7 pd1 mg1">d7</div>
                        </td>
                    </tr>
                    <tr>
                        <td>**`d8`**</td>
                        <td>**Acento** (Llamada a la acción, enfoque).</td>
                        <td>
                            <div class="tma_d8 pd1 mg1">d8 (Dorado)</div>
                        </td>
                    </tr>
                    <tr>
                        <td>**`d9`**</td>
                        <td>**Éxito** (Notificaciones, mensajes positivos).</td>
                        <td>
                            <div class="tma_d9 pd1 mg1">d9 (Verde)</div>
                        </td>
                    </tr>
                    <tr>
                        <td>**`d10`**</td>
                        <td>**Error** (Advertencias, fallos críticos).</td>
                        <td>
                            <div class="tma_d10 pd1 mg1">d10 (Rojo)</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        ---

        <h2>Temas Disponibles</h2>
        <div class="mg6x pd6 bd1 tma_d4 fx fx11">
            <div class="pd3 mg3 tma_d5" style="width: 150px; text-align: center;">**`tma`**: Navy Oscuro / Azul Elegante.
            </div>
            <div class="pd3 mg3 tmb_d5" style="width: 150px; text-align: center;">**`tmb`**: Ultra Dark / Negro Sólido.
            </div>
            <div class="pd3 mg3 tmc_d5" style="width: 150px; text-align: center;">**`tmc`**: Chocolate / Marrón Cálido.
            </div>
        </div>
    </main>
@endsection
