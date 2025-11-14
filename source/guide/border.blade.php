@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Borde')
@section('description', 'Ejemplos de las utilidades de borde Mukimono CSS (bd1 a bd6) para todos y lados específicos.')

@section('body')
    <style>
        .mk-1 {
            width: 100px; /* Tamaño grande para ver el borde */
            height: 30px;
            background-color: #24292e; 
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            margin-left: 8px;
            vertical-align: middle;
            border-radius: 4px;
            border-color: #00bcd4; /* Color de demostración (currentColor) */
            line-height: 1;
        }
    </style>
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd24 tac">
            <h1>Bordes</h1>
            <p>
                Clases para definir el ancho de los bordes
            </p>
        </div>
    </header>

    <main class="pd12">
        <h2 class="tac">Agrega x al final para hijos</h2>
        <div class="pd24x liv fx10">
            <div>
                <h3>1. Bordes Completos</h3>
                <ul class="rd3x tma_d4x pd6x mg1x">
                    <li>bd1 <div class="mk-1 bd1">A</div></li>
                    <li>bd3 <div class="mk-1 bd3">A</div></li>
                    <li>bd6 <div class="mk-1 bd6">A</div></li>
                    <li>bd (Ninguno) <div class="mk-1 bd">A</div></li>
                </ul>
            </div>

            <div>
                <h3>2. Lado Específico</h3>
                <ul class="rd3x tma_d4x pd6x mg1x">
                    <li>bd3t <div class="mk-1 bd3t">A</div></li>
                    <li>bd3b <div class="mk-1 bd3b">A</div></li>
                    <li>bd3r <div class="mk-1 bd3r">A</div></li>
                    <li>bd3l <div class="mk-1 bd3l">A</div></li>
                    <li>bd6l <div class="mk-1 bd6l">A</div></li>
                </ul>
            </div>
            
            <div>
                <h3>3. Pares de Lados</h3>
                <ul class="rd3x tma_d4x pd6x mg1x">
                    <li>bd4tb <div class="mk-1 bd4tb">A</div></li>
                    <li>bd6tb <div class="mk-1 bd6tb">A</div></li>
                    <li>bd4lr <div class="mk-1 bd4lr">A</div></li>
                    <li>bd6lr <div class="mk-1 bd6lr">A</div></li>
                </ul>
            </div>
        </div>
    </main>
@endsection