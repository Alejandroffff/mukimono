@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Lista (lih, liv)')
@section('description', 'Ejemplos de las utilidades de lista vertical (liv) y horizontal (lih) basadas en Flexbox.')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Listas (`liv`, `lih`)</h1>
            <p>
                Clases que transforman listas (`<ul>` u `<ol>`) en contenedores Flexbox, eliminando los estilos predeterminados para asegurar un diseño limpio y predecible.
            </p>
        </div>
    </header>

    <main class="pd12">
        <h2>Lista Vertical (`.liv`)</h2>
        <p class="mg6">Utiliza **`.liv`** para crear listas con elementos apilados en columna, separados por un `gap: 10px`. Ideal para menús y paneles de configuración.</p>

        <div class="mg6x pd6 bd1 tma_d2" style="width: 300px;">
            <div class="liv">
                <ul>
                    <li class="pd3 bd1 tma_d5">
                        <span class="fs16">✅ Tarea Uno</span>
                    </li>
                    <li class="pd3 bd1 tma_d5">
                        <span class="fs16">⚙️ Tarea Dos</span>
                    </li>
                    <li class="pd3 bd1 tma_d5">
                        <span class="fs16">⚠️ Tarea Tres</span>
                    </li>
                </ul>
            </div>
            <p class="fs12 mg3">Usando `.liv` en el contenedor de `<ul>`.</p>
        </div>

        ---

        <h2>Lista Horizontal (`.lih`)</h2>
        <p class="mg6">Utiliza **`.lih`** para elementos dispuestos en fila. Ideal para navegación, *breadcrumbs* o barras de iconos.</p>
        
        <div class="mg6x pd6 bd1 tma_d3">
            <div class="lih">
                <ol class="fx12"> {{-- fx12: Justify flex-start para mejor visual --}}
                    <li class="pd3 mg3 bd1 tma_d8">
                        <span class="fs14">Inicio</span>
                    </li>
                    <li class="pd3 mg3 bd1 tma_d8">
                        <span class="fs14">Guía</span>
                    </li>
                    <li class="pd3 mg3 bd1 tma_d8">
                        <span class="fs14">Componentes</span>
                    </li>
                </ol>
            </div>
            <p class="fs12 mg3">Usando `.lih` en el contenedor de `<ol>`.</p>
        </div>
    </main>
@endsection