@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Cursor')
@section('description', 'Ejemplos de las utilidades de cursor (csN) de Mukimono CSS para forzar estilos de puntero.')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd12">
            <h1>Cursor (`cs`)</h1>
            <p>
                Clases para aplicar estilos de cursor específicos, forzados con `!important` para asegurar la visibilidad en elementos interactivos. También se incluyen selectores de hover (`csNx > *:hover`).
            </p>
        </div>
    </header>

    <main class="pd12">
        <h2>Punteros de Interacción Comunes</h2>
        <p class="mg6">Aplica la clase directamente sobre el elemento para ver el efecto.</p>

        <div class="mg6x pd6 bd1 tma_d2">
            <div class="mg6 pd6 bd1 tma_d5 cs5">.cs5 | Pointer (Enlace)</div>
            <div class="mg6 pd6 bd1 tma_d10 cs9">.cs9 | Not Allowed (Prohibido)</div>
            <div class="mg6 pd6 bd1 bg3 cs8">.cs8 | Help (Ayuda)</div>
            <div class="mg6 pd6 bd1 tma_d9 cs7">.cs7 | Copy (Copiar)</div>
            <div class="mg6 pd6 bd1 bg4 cs3">.cs3 | Text (Selección de Texto)</div>
        </div>

        ---

        <h2>Punteros de Redimensionamiento (Resize)</h2>
        <p class="mg6">Estos punteros se usan a menudo en paneles y divisores redimensionables.</p>

        <div class="mg6x pd6 bd1 tma_d3">
            <div class="mg6 pd6 bd1 cs12">.cs12 | EW-Resize (Horizontal)</div>
            <div class="mg6 pd6 bd1 cs14">.cs14 | S-Resize (Sur)</div>
            <div class="mg6 pd6 bd1 cs17">.cs17 | SW-Resize (Suroeste)</div>
            <div class="mg6 pd6 bd1 cs18">.cs18 | NESW-Resize (Diagonal)</div>
        </div>
        
        ---

        <h2>Efectos de Hover para Hijos (`csNx`)</h2>
        <p class="mg6">
            Aplica la clase `csNx` al contenedor padre. Los hijos directos cambiarán el cursor al pasar el ratón.
        </p>

        <div class="mg6x pd6 bd1 tma_d2 cs20x">
            <h3 class="mg6">Contenedor .cs20x (Cursor Grab)</h3>
            <div class="mg6 pd6 bd1 tma_d5">Pasa el ratón aquí (Grab)</div>
            <div class="mg6 pd6 bd1 tma_d5">Y aquí también (Grab)</div>
        </div>
        
        <div class="mg6x pd6 bd1 tma_d2 cs22x">
            <h3 class="mg6">Contenedor .cs22x (Cursor Zoom In)</h3>
            <div class="mg6 pd6 bd1 tma_d8">Pasa el ratón aquí (Zoom In)</div>
        </div>
    </main>
@endsection