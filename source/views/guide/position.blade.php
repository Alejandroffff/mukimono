@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Posicionamiento (pst)')
@section('description', 'Clases para controlar la propiedad "position" (relative, absolute, sticky, fixed) y ubicaciones comunes (esquinas, centrado).')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Posicionamiento (`pst`)</h1>
            <p>
                Clases para definir la propiedad **CSS `position`** y la ubicación de los elementos en el *viewport* o dentro de un contenedor relativo.
            </p>
        </div>
    </header>

    <main class="pd12">
        
        <h2>Tipos Básicos</h2>
        <p class="mg6">Definición de las bases de posicionamiento.</p>
        <div class="mg6x pd6 bd1 tma_d2">
            <div class="pst1 pd3 bd1 tma_d5 mg3">
                <p class="mg0">**`.pst1`**: `position: relative` (Base de anclaje).</p>
            </div>
            <div class="pst2 pd3 bd1 tma_d8 mg3">
                <p class="mg0">**`.pst2`**: `position: absolute` (Flota, requiere padre relativo).</p>
            </div>
            <div class="pst9 pd3 bd1 tma_d5 mg3" style="top: 80px;">
                <p class="mg0">**`.pst9`**: `position: sticky` (Se adhiere al scroll).</p>
            </div>
            <div class="pst14 pd3 bd1 tma_d8 mg3">
                <p class="mg0">**`.pst14`**: `position: fixed` (Fijo en el *viewport*).</p>
            </div>
        </div>

        ---

        <h2>Posicionamiento Absoluto (`absolute`)</h2>
        <p class="mg6">Ubicación precisa de un elemento que flota sobre su contenedor `relative`.</p>
        
        <div class="mg6x bd1 tma_d3 pst1 pd8" style="min-height: 200px;">
            <div class="pst3 pd3 cl9 bg3" style="width: 150px;">**`.pst3`**: Top-Left.</div>
            <div class="pst4 pd3 cl9 bg3" style="width: 150px;">**`.pst4`**: Top-Right.</div>
            <div class="pst5 pd3 cl9 bg3" style="width: 150px;">**`.pst5`**: Bottom-Left.</div>
            <div class="pst6 pd3 cl9 bg3" style="width: 150px;">**`.pst6`**: Bottom-Right.</div>
            <div class="pst7 pd3 cl9 bg4" style="width: 150px; text-align: center;">**`.pst7`**: Centrado absoluto.</div>
            <div class="pst8 pd3 cl9 bg8 op2">**`.pst8`**: Fullscreen (Cubre el padre).</div>
        </div>

        ---

        <h2>Fijo y Pegajoso (`fixed` & `sticky`)</h2>
        <p class="mg6">Ideales para headers, footers y notificaciones permanentes.</p>

        <div class="mg6x pd6 bd1 tma_d4" style="height: 100px;">
            <p class="mg0">Elementos fijos y pegajosos requieren scroll para observarse completamente.</p>
        </div>
        
        <div class="mg6x pd6 bd1 tma_d4" style="min-height: 100px;">
            <div class="pst10 pd3 bg3 cl9">**`.pst10`**: Sticky Top (Se pega al inicio del scroll).</div>
            <p class="mg12t">Contenido de prueba. Desplácese para ver el efecto.</p>
            <div class="pst15 pd3 bg4 cl9">**`.pst15`**: Fixed Top (Fijo al borde superior del *viewport*).</div>
            <div class="pst21 pd3 bg8 cl9" style="width: 150px;">**`.pst21`**: Fixed Center (*Viewport*).</div>
        </div>
    </main>
@endsection