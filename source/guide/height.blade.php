@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Altura')
@section('description', 'Ejemplos de las utilidades de altura (h, hi, ha) para establecer height, min-height, y max-height en valores fijos pequeños.')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd12">
            <h1>Alturas (`h`, `hi`, `ha`)</h1>
            <p>
                Clases para controlar la altura de los elementos: **`h`** (height), **`hi`** (min-height), y **`ha`** (max-height). Se documentan los valores fijos más pequeños y controlables.
            </p>
        </div>
    </header>

    <main class="pd12">

        <h2>Alturas Fijas en Píxeles</h2>
        <p class="mg6">Alturas para elementos específicos como iconos, separadores o botones. Se muestran los tamaños hasta 64px.</p>

        <div class="mg6x pd6 bd1 tma_d3">
            <h3 class="mg6">Alturas Fijas (`hN`)</h3>
            <div class="fx fx17 mg6 pd3 bd1 tma_d5">
                <div class="h12 w12 mg1 bg1"></div>
                <p class="fs14 mg1">.h12 (12px)</p>
            </div>
            <div class="fx fx17 mg6 pd3 bd1 tma_d5">
                <div class="h24 w24 mg1 bg2"></div>
                <p class="fs14 mg1">.h24 (24px)</p>
            </div>
            <div class="fx fx17 mg6 pd3 bd1 tma_d5">
                <div class="h40 w40 mg1 bg3"></div>
                <p class="fs14 mg1">.h40 (40px)</p>
            </div>
            <div class="fx fx17 mg6 pd3 bd1 tma_d5">
                <div class="h64 w64 mg1 bg4"></div>
                <p class="fs14 mg1">.h64 (64px)</p>
            </div>
        </div>
        
        ---

        <h2>Min-Height y Max-Height en Píxeles</h2>
        <p class="mg6">Ejemplos con límites controlables.</p>

        <div class="mg6x pd6 bd1 tma_d4">
            <h3 class="mg6">Mínimo (`hiN`)</h3>
            <p class="mg3 hi48 pd3 bd1 tma_d5" style="height: 10px; width: 200px;">.hi48 | Min-Height 48px</p>
            
            <h3 class="mg6">Máximo (`haN`)</h3>
            <div class="mg3 ha96 pd3 bd1 tma_d8" style="height: 150px; overflow: auto; width: 200px;">
                <p>.ha96 | Max-Height 96px. (Este contenedor tiene un límite visual).</p>
                <p class="fs12">Contenido extra que será recortado para el ejemplo.</p>
            </div>
        </div>

        ---

        <h2>Clases de Altura Grande y Viewport</h2>
        <p class="mg6">Clases grandes y relativas al *viewport* (`vh`, `vmax`, `%`). No se muestran en vivo por motivos de espacio.</p>
        
        <p class="mg3 pd3 bd1 tma_d2">
            **Viewports:** `h100vh`, `hi100vh`, `ha100vh`, `h100vmax`, etc.
        </p>
        <p class="mg3 pd3 bd1 tma_d2">
            **Porcentaje:** `h100p` (height 100%), `hi100p` (min-height 100%), `ha100p` (max-height 100%).
        </p>
        <p class="mg3 pd3 bd1 tma_d2">
            **Píxeles grandes:** `h80`, `h96`, `h128`, `h256` y sus variantes `hi` y `ha`.
        </p>
    </main>
@endsection