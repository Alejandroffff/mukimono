@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Botones')
@section('description', 'Ejemplos de las utilidades de tamaño de botón (btN) y selectores de hijos de Mukimono CSS.')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd12">
            <h1>Botones (`bt`)</h1>
            <p>
                Clases para definir tamaños de botón (desde **16px** hasta **128px** de altura) y resetear estilos base.
            </p>
        </div>
    </header>

    <main class="pd12">
        <h2>Tamaños de Botón Individuales (bt16 a bt128)</h2>
        <p class="mg6">Muestra la escala completa de botones aplicando la clase directamente a la etiqueta.</p>

        <div class="mg6x pd6">
            {{-- Botones Pequeños --}}
            <button class="bt16 mg6 pd6 tma_d5">.bt16 (16px)</button>
            <button class="bt24 mg6 pd6 tma_d5">.bt24 (24px)</button>
            <button class="bt32 mg6 pd6 tma_d5">.bt32 (32px)</button>
            <button class="bt40 mg6 pd6 tma_d5">.bt40 (40px)</button>
            <button class="bt48 mg6 pd6 tma_d5">.bt48 (48px)</button>
            
            {{-- Botones Medianos/Grandes --}}
            <button class="bt56 mg6 pd6 tma_d5">.bt56 (56px)</button>
            <button class="bt64 mg6 pd6 tma_d5">.bt64 (64px)</button>
            <button class="bt72 mg6 pd6 tma_d5">.bt72 (72px)</button>
            <button class="bt80 mg6 pd6 tma_d5">.bt80 (80px)</button>

            {{-- Botones Extra Grandes --}}
            <button class="bt96 mg6 pd6 tma_d5">.bt96 (96px)</button>
            <button class="bt112 mg6 pd6 tma_d5">.bt112 (112px)</button>
            <button class="bt128 mg6 pd6 tma_d5">.bt128 (128px)</button>
        </div>

        ---

        <h2>Aplicación a Hijos Directos (`.btNx`)</h2>
        <p class="mg6">El contenedor principal establece el tamaño en sus hijos directos (`> button`).</p>

        <div class="mg6x pd6 bd1 tma_d2">
            <h3 class="mg6">Contenedor .bt32x</h3>
            <div class="bt32x mg6">
                <button class="bt32 mg6 pd6 tma_d5">Botón Principal (32px)</button>
                <button class="bt32 mg6 pd6 tma_d9">Botón Éxito (32px)</button>
            </div>
        </div>

        ---

        <h2>Aplicación a Descendientes Profundos (`.btNxx`)</h2>
        <p class="mg6">El contenedor aplica el tamaño a cualquier descendiente `<button>`.</p>
        
        <div class="mg6x pd6 bd1 tma_d3">
            <h3 class="mg6">Contenedor .bt48xx (Ejemplo Anidado)</h3>
            <div class="bt48xx mg6">
                <p>Botón envuelto:</p>
                <div class="mg6">
                    <button class="bt48 pd6 tma_d5">Iniciar (48px)</button>
                </div>
            </div>
        </div>
    </main>
@endsection