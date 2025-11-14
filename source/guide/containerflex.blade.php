@extends('_layouts.main')

@section('title', 'Mukimono - Flex Container (cf1)')
@section('description', 'Ejemplos de la utilidad cf1 para configurar un contenedor flexbox simple donde los hijos ocupan el 100% del ancho.')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd24 tac">
            <h1>Flex Container</h1>
            <p>
                La clase establece un contenedor.
            </p>
        </div>
    </header>

    <main class="pd12 wa256x pd12x fx10">
        <div>
            <h2>cf1</h2>
            <div class="tma_d3 pd6 cf1">
                <div class="tma_d6 pd6">
                A
                </div>
                <div class="tma_d5 pd6 wa40">
                40px
                </div>
            </div>
        </div>
    </main>
@endsection