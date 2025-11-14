@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Cursor')
@section('description', 'Ejemplos de las utilidades de cursor (csN) de Mukimono CSS para forzar estilos de puntero.')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd24 tac">
            <h1>Cursor (`cs`)</h1>
            <p>
                Clases para aplicar estilos de cursor.
            </p>
        </div>
    </header>

    <main class="pd12 wa128x pd12x fx10">
        {{-- Itera sobre las 28 clases para mostrar el ejemplo --}}
        @for ($i = 1; $i <= 28; $i++)
            {{-- Genera un número de dos dígitos (e.g., 01, 10, 28) --}}
            @php
                $classNum = str_pad($i, 2, '0', STR_PAD_LEFT);
                $className = "cs{$i}";
                $hoverClassName = "cs{$i}x";
                
                // Mapeo simple de nombres para la descripción
                $cursorMap = [
                    1 => 'auto', 2 => 'none', 3 => 'text', 4 => 'cell', 5 => 'pointer',
                    6 => 'alias', 7 => 'copy', 8 => 'help', 9 => 'not-allowed', 10 => 'col-resize',
                    11 => 'row-resize', 12 => 'ew-resize', 13 => 'n-resize', 14 => 's-resize',
                    15 => 'se-resize', 16 => 'ne-resize', 17 => 'sw-resize', 18 => 'nesw-resize',
                    19 => 'move', 20 => 'grab', 21 => 'grabbing', 22 => 'zoom-in',
                    23 => 'zoom-out', 24 => 'all-scroll', 25 => 'progress', 26 => 'context-menu',
                    27 => 'e-resize', 28 => 'w-resize'
                ];
                $cursorStyle = $cursorMap[$i] ?? 'default';
            @endphp

            <div class="pd12 tac">
                <h2>{{ $className }}</h2>
                <div class="tma_d3 pd6">
                    <p>{{ $cursorStyle }}</p>
                    <div class="tma_d6 pd24 {{ $className }}">
                        A
                    </div>
                </div>
            </div>
        @endfor
        
    </main>
@endsection