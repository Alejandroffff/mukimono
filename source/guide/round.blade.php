@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Radio de Borde (rd)')
@section('description', 'Clases para aplicar "border-radius" en píxeles y porcentajes, desde esquinas cuadradas a círculos completos.')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd12">
            <h1>Radio de Borde (`rd`)</h1>
            <p>
                Clases para aplicar **`border-radius`** y suavizar las esquinas de los elementos. Esto mejora la percepción visual y la elegancia del diseño.
            </p>
        </div>
    </header>

    <main class="pd12">
        
        <h2>Radios Basados en Píxeles (`rd0` a `rd16`)</h2>
        <p class="mg6">Control granular sobre la suavidad de las esquinas, ideal para tarjetas, botones y paneles.</p>
        
        <div class="mg6x bd1 tma_d2 pd6 fx fx10">
            {{-- rd0 --}}
            <div class="rd0 pd6 mg3 bd1 tma_d5" style="width: 100px; height: 50px; text-align: center; line-height: 38px;">
                <p class="mg0 fs14">.rd0</p>
            </div>
            
            {{-- rd4 --}}
            <div class="rd4 pd6 mg3 bd1 tma_d5" style="width: 100px; height: 50px; text-align: center; line-height: 38px;">
                <p class="mg0 fs14">.rd4</p>
            </div>
            
            {{-- rd8 --}}
            <div class="rd8 pd6 mg3 bd1 tma_d8" style="width: 100px; height: 50px; text-align: center; line-height: 38px;">
                <p class="mg0 fs14">.rd8</p>
            </div>

            {{-- rd16 --}}
            <div class="rd16 pd6 mg3 bd1 tma_d8" style="width: 100px; height: 50px; text-align: center; line-height: 38px;">
                <p class="mg0 fs14">.rd16</p>
            </div>
        </div>

        ---

        <h2>Radios Especiales (`50%` y `9999px`)</h2>
        <p class="mg6">Utilidades para formas circulares y pastillas (pill shape).</p>

        <div class="mg6x bd1 tma_d3 pd6 fx fx11">
            {{-- rd50p (Círculo) --}}
            <div class="rd50p pd6 mg3 bd1 tma_d5" style="width: 60px; height: 60px; text-align: center; line-height: 48px;">
                <p class="mg0 fs14">50%</p>
            </div>

            {{-- rd9999 (Pill) --}}
            <div class="rd9999 pd6 mg3 bd1 tma_d8" style="padding: 10px 20px; text-align: center;">
                <p class="mg0 fs14">.rd9999 (Pastilla)</p>
            </div>
        </div>
    </main>
@endsection