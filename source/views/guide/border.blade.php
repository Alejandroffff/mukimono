@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Borde')
@section('description', 'Ejemplos de las utilidades de borde Mukimono CSS (bd1 a bd6) para todos y lados específicos.')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Bordes (`bd`)</h1>
            <p>
                Clases para definir el ancho de los bordes (1px a 6px). El estilo por defecto es `solid` y el color es `currentColor`.
            </p>
        </div>
    </header>

    <main class="pd12">
        <h2>Bordes en Todos los Lados</h2>
        <p class="mg6">Aplica un borde de N píxeles en los cuatro lados.</p>

        <div class="mg6x pd6">
            <div class="mg6 pd6 bd1">Borde 1px (.bd1)</div>
            <div class="mg6 pd6 bd3">Borde 3px (.bd3)</div>
            <div class="mg6 pd6 bd6">Borde 6px (.bd6)</div>
        </div>

        ---

        <h2>Bordes en Lados Específicos</h2>
        <p class="mg6">Controla la aplicación del borde por lado: Top (t), Bottom (b), Right (r), Left (l).</p>

        <div class="mg6x pd6">
            <div class="mg6 pd6 bd4t">Solo Borde Superior (.bd4t)</div>
            <div class="mg6 pd6 bd4b">Solo Borde Inferior (.bd4b)</div>
            <div class="mg6 pd6 bd4l">Solo Borde Izquierdo (.bd4l)</div>
            <div class="mg6 pd6 bd4r">Solo Borde Derecho (.bd4r)</div>
        </div>
        
        ---

        <h2>Bordes en Pares de Lados</h2>
        <p class="mg6">Aplica bordes en los pares opuestos: Top/Bottom (tb) y Left/Right (lr).</p>
        
        <div class="mg6x pd6">
            <div class="mg6 pd6 bd3tb">Bordes Superior e Inferior (.bd3tb)</div>
            <div class="mg6 pd6 bd3lr">Bordes Izquierdo y Derecho (.bd3lr)</div>
        </div>

    </main>
@endsection