@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Filtro Blur')
@section('description', 'Ejemplos de las utilidades de filtro de desenfoque (blur) abreviadas de Mukimono CSS.')

@section('body')
    <style>
        .mk-1 {
            width: 80px; /* Más grande para que el desenfoque sea visible */
            height: 24px;
            background-color: #24292e; /* Color oscuro para contraste */
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            margin-left: 8px;
            vertical-align: middle;
            border-radius: 4px;
        }
    </style>
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd24 tac">
            <h1>Filtro Blur</h1>
            <p>
                Clases abreviadas para aplicar el filtro CSS`.
            </p>
        </div>
    </header>

    <main class="pd12">
        <div class="pd24x liv fx10">
            <div>
                <h3>1. Desenfoque</h3>
                <ul class="rd3x tma_d4x pd6x mg1x">
                    <li>b0 <div class="mk-1 b0">A</div></li>
                    <li>b1 <div class="mk-1 b1">A</div></li>
                    <li>b2 <div class="mk-1 b2">A</div></li>
                    <li>b3 <div class="mk-1 b3">A</div></li>
                </ul>
            </div>
        </div>
    </main>
@endsection