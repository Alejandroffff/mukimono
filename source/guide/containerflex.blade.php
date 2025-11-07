@extends('_layouts.main')

@section('title', 'Mukimono - Flex Container (cf1)')
@section('description', 'Ejemplos de la utilidad cf1 para configurar un contenedor flexbox simple donde los hijos ocupan el 100% del ancho.')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd12">
            <h1>Flex Container (`cf1`)</h1>
            <p>
                La clase **`.cf1`** establece un contenedor `display: flex`, dirección `row`, `nowrap` y fuerza a todos los elementos hijos directos a ocupar el **100% del ancho** disponible.
            </p>
        </div>
    </header>

    <main class="pd12">
        <h2>Uso Básico del .cf1</h2>
        <p class="mg6">
            Observe cómo los dos elementos hijos (`div`) se estiran horizontalmente para ocupar todo el ancho del contenedor, uno al lado del otro.
        </p>

        <div class="mg6x pd6 bd1 tma_d2">
            <h3 class="mg6">Contenedor Principal (.cf1)</h3>
            <div class="cf1">
                {{-- Elemento Hijo 1 --}}
                <div class="tma_d5 pd12 mg6 bd1">
                    <p class="mg6">Elemento A</p>
                    <p class="mg6">width: 100%</p>
                </div>

                {{-- Elemento Hijo 2 --}}
                <div class="tma_d8 pd12 mg6 bd1">
                    <p class="mg6">Elemento B</p>
                    <p class="mg6">width: 100%</p>
                </div>
            </div>
        </div>
        
        ---

        <h2>Aplicación con Múltiples Elementos</h2>
        <p class="mg6">
            Incluso con más de dos hijos, cada uno intenta ocupar el 100%, lo que resulta en que el navegador los comprima equitativamente en la fila, pero manteniendo la estructura flex y la alineación `flex-start`.
        </p>

        <div class="mg6x pd6 bd1 tma_d2">
            <h3 class="mg6">Contenedor Principal (.cf1) con 4 hijos</h3>
            <div class="cf1">
                <div class="tma_d4 pd6 mg3 bd1">1</div>
                <div class="tma_d5 pd6 mg3 bd1">2</div>
                <div class="tma_d6 pd6 mg3 bd1">3</div>
                <div class="tma_d7 pd6 mg3 bd1">4</div>
            </div>
        </div>

    </main>
@endsection