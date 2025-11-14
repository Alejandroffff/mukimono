@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades Dropdown')
@section('description', 'Ejemplos de los contenedores desplegables (dd1 y dd2) de Mukimono CSS con alineación izquierda
    y derecha.')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd24 tac">
            <h1>Dropdowns</h1>
            <p>
                Clases para crear menús desplegables.
            </p>
        </div>
    </header>

    <main class="pd12 wa256x mg3x fx10 rd3x">
        <div class="mg6x pd6 bd1 tma_d2">
            <h2>dd1</h2>
            <div class="dd1 mg6">
                <button class="bt48 pd6 tma_d5">
                    Menú Derecha
                </button>

                <div class="bd1 lb48x tma_d5x pd6 mg1x rd3x w100px">
                    <a href="#">Opción 1</a>
                    <a href="#">Opción 2</a>
                    <a href="#">Opción 3</a>
                </div>
            </div>
        </div>

        <div class="mg6x pd6 bd1 tma_d2">
            <h2>dd2</h2>
            <div class="dd2 mg6">
                <button class="bt48 pd6 tma_d5">
                    Menú Izquierda
                </button>

                <div class="bd1 lb48x tma_d5x pd6 mg1x rd3x w100px">
                    <a href="#">Opción 1</a>
                    <a href="#">Opción 2</a>
                    <a href="#">Opción 3</a>
                </div>
            </div>
        </div>
    </main>
@endsection
