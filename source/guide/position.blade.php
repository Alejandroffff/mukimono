@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Posicionamiento (pst)')
@section('description', 'Clases para controlar la propiedad "position" (relative, absolute, sticky, fixed) y ubicaciones comunes (esquinas, centrado).')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd12">
            <h1>Posicionamiento (`pst`)</h1>
            <p>
                Clases para definir la propiedad **CSS `position`** y la ubicación de los elementos en el *viewport* o dentro de un contenedor relativo.
            </p>
        </div>
    </header>

    <main class="pd12">

        {{-- TÍTULO GENERAL --}}
        <h2>Clases de Posicionamiento</h2>

        {{-- BLOQUE RELATIVE --}}
        <div class="mg6x bd1 pd6 tma_d2">
            <h3>Relative</h3>
            <p class="mg6">
                **`.pst1`**: `position: relative` (Posición base, ancla contenedores absolutos).
            </p>
        </div>

        ---

        {{-- BLOQUE ABSOLUTE --}}
        <div class="mg6x bd1 pd6 tma_d2">
            <h3>Absolute</h3>
            <p class="mg6">
                **`.pst2`**: `position: absolute` (Posición genérica, flota).
                <br>**`.pst3`**: Absolute `top: 0`, `left: 0`, `z-index: 1`.
                <br>**`.pst4`**: Absolute `top: 0`, `right: 0`, `z-index: 1`.
                <br>**`.pst5`**: Absolute `bottom: 0`, `left: 0`, `z-index: 1`.
                <br>**`.pst6`**: Absolute `bottom: 0`, `right: 0`, `z-index: 1`.
                <br>**`.pst7`**: Absolute centrado (`top: 50%`, `left: 50%`, `transform: translate(-50%, -50%)`).
                <br>**`.pst8`**: Absolute *fullscreen* (Cubre el contenedor padre `relative`).
            </p>
        </div>

        ---

        {{-- BLOQUE STICKY --}}
        <div class="mg6x bd1 pd6 tma_d2">
            <h3>Sticky</h3>
            <p class="mg6">
                **`.pst9`**: `position: sticky` (Posición genérica, adhiere).
                <br>**`.pst10`**: Sticky `top: 0` (Se pega al desplazarse hacia abajo).
                <br>**`.pst11`**: Sticky `bottom: 0` (Se pega al desplazarse hacia arriba).
                <br>**`.pst12`**: Sticky `top: 0` centrado horizontalmente (`width: max-content`).
                <br>**`.pst13`**: Sticky `bottom: 0` centrado horizontalmente (`width: max-content`).
            </p>
        </div>

        ---

        {{-- BLOQUE FIXED --}}
        <div class="mg6x bd1 pd6 tma_d2">
            <h3>Fixed</h3>
            <p class="mg6">
                **`.pst14`**: `position: fixed` (Posición genérica, fija al *viewport*).
                <br>**`.pst15`**: Fixed `top: 0` (Fijo al borde superior).
                <br>**`.pst16`**: Fixed `bottom: 0` (Fijo al borde inferior).
                <br>**`.pst17`**: Fixed `top: 0`, `left: 0`.
                <br>**`.pst18`**: Fixed `top: 0`, `right: 0`.
                <br>**`.pst19`**: Fixed `bottom: 0`, `left: 0`.
                <br>**`.pst20`**: Fixed `bottom: 0`, `right: 0`.
                <br>**`.pst21`**: Fixed centrado (`top: 50%`, `left: 50%`, `transform: translate(-50%, -50%)`).
                <br>**`.pst22`**: Fixed *fullscreen* (Cubre todo el *viewport*).
            </p>
        </div>

    </main>
@endsection