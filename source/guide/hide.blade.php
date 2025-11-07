@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Ocultación (hd)')
@section('description', 'Ejemplos de las utilidades de ocultación condicional (hdi, hda, hd) para control responsive de visibilidad.')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd12">
            <h1>Ocultación Condicional (`hd`, `hda`, `hdi`)</h1>
            <p>
                Clases para controlar la visibilidad de los elementos según el ancho de la pantalla (puntos de quiebre). Se usan variables CSS para asegurar el ocultamiento (`display: none !important`).
            </p>
        </div>
    </header>

    <main class="pd12">

        <h2>Ocultar Siempre (`.hd`)</h2>
        <p class="mg6">Utiliza **`.hd`** para eliminar un elemento del flujo de la página en cualquier dispositivo.</p>
        
        <div class="mg6x pd6 bd1 tma_d2">
            <p class="hd pd3 bd1 tma_d10">Este texto está presente en el DOM, pero siempre estará oculto por la clase **.hd**.</p>
            <p>Este texto se muestra normalmente, sirviendo como referencia.</p>
        </div>

        ---

        <h2>Ocultar Hasta (Máx-Ancho - `.hdaN`)</h2>
        <p class="mg6">La clase **`hdaN`** (Hide Down At) oculta el elemento en la pantalla y **cualquier tamaño inferior**. Por ejemplo, **`.hda768`** oculta el elemento si la pantalla es de 768px o menos.</p>

        <div class="mg6x pd6 bd1 tma_d3">
            <div class="pd6 bd1 bg2 hda768">
                **hda768:** Se ocultará en dispositivos móviles y tabletas.
            </div>
        </div>

        ---

        <h2>Ocultar Desde (Mín-Ancho - `.hdiN`)</h2>
        <p class="mg6">La clase **`hdiN`** (Hide Down If) oculta el elemento en la pantalla y **cualquier tamaño superior**. Por ejemplo, **`.hdi961`** oculta el elemento si la pantalla es de 961px o más.</p>

        <div class="mg6x pd6 bd1 tma_d4">
            <div class="pd6 bd1 bg3 hdi961">
                **hdi961:** Se ocultará en la mayoría de escritorios grandes.
            </div>
        </div>
        
        ---

        <h2>Ocultar por Rango (`.hdNxN`)</h2>
        <p class="mg6">La clase **`hdNxN`** oculta el elemento solo en un rango de tamaño específico. Por ejemplo, **`.hd481x640`** oculta el elemento solo en el rango de 481px a 640px.</p>

        <div class="mg6x pd6 bd1 tma_d5">
            <div class="pd6 bd1 bg4 hd481x640">
                **hd481x640:** Se ocultará únicamente en el rango de 481px a 640px.
            </div>
        </div>
        
    </main>
@endsection