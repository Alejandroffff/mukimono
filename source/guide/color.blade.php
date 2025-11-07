@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Color (Variantes)')
@section('description', 'Ejemplos de las Variantes de Color (bgN, clN) para acentos y estados fijos de Mukimono CSS.')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd12">
            <h1>Variantes de Color</h1>
            <p>
                Clases para aplicar colores de texto (`clN`) y fondo (`bgN`) fijos (1 a 10), útiles para acentos visuales específicos.
            </p>
        </div>
    </header>

    <main class="pd12">
        <h2>Fondos de Variantes (`bgN`)</h2>
        <p class="mg6">Aplica el color de fondo y el color de texto de contraste predefinido.</p>

        <div class="mg6x pd6 tma_d1">
            <div class="mg6 pd6 bg1">bg1 (Teal)</div>
            <div class="mg6 pd6 bg2">bg2 (Soft Coral)</div>
            <div class="mg6 pd6 bg3">bg3 (Muted Gold)</div>
            <div class="mg6 pd6 bg4">bg4 (Slate Blue)</div>
            <div class="mg6 pd6 bg5">bg5 (Olive Green)</div>
            <div class="mg6 pd6 bg6">bg6 (Mauve)</div>
            <div class="mg6 pd6 bg7">bg7 (Soft Orange)</div>
            <div class="mg6 pd6 bg8">bg8 (Dusty Pink)</div>
            <div class="mg6 pd6 bg9">bg9 (Soft Cyan)</div>
            <div class="mg6 pd6 bg10">bg10 (Muted Brown)</div>
        </div>

        ---

        <h2>Color de Texto de Variantes (`clN`)</h2>
        <p class="mg6">Utiliza `clN` para aplicar solo el color de texto. Se demuestra sobre un fondo oscuro para visibilidad.</p>
        
        <div class="mg6x pd6 bd1 tma_d3">
            <p class="mg6 cl1">Texto en cl1 (Teal)</p>
            <p class="mg6 cl2">Texto en cl2 (Soft Coral)</p>
            <p class="mg6 cl3">Texto en cl3 (Muted Gold)</p>
            <p class="mg6 cl4">Texto en cl4 (Slate Blue)</p>
            <p class="mg6 cl5">Texto en cl5 (Olive Green)</p>
            <p class="mg6 cl6">Texto en cl6 (Mauve)</p>
            <p class="mg6 cl7">Texto en cl7 (Soft Orange)</p>
            <p class="mg6 cl8">Texto en cl8 (Dusty Pink)</p>
            <p class="mg6 cl9">Texto en cl9 (Soft Cyan)</p>
            <p class="mg6 cl10">Texto en cl10 (Muted Brown)</p>
        </div>
        
        ---
        
        <h2>Variantes de Hijos y Hover (`bgNx`, `bgN:hover`)</h2>
        <p class="mg6">Demostración de cómo aplicar estilos a hijos directos y al pasar el cursor.</p>

        <div class="mg6x pd6 bd1 tma_d3">
            <div class="mg6 pd6 bg4 bg2:hover">Elemento con **bg4** y hover **bg2**</div>
            <div class="mg6 pd6 bg5x bd1">
                <p class="pd6 bd1">El padre es **bg5x**: Hijo 1</p>
            </div>
        </div>
    </main>
@endsection