@extends('_layouts.main')

@section('title', 'Mukimono - Estilos de Scrollbar (scl)')
@section('description', 'Clases para aplicar estilos personalizados (WebKit y Firefox) a las barras de desplazamiento.')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Estilos de Scrollbar (`scl`)</h1>
            <p>
                Clases que personalizan la apariencia de las barras de desplazamiento en contenedores con desbordamiento (`overflow`). Esto mejora la estética general, especialmente en temas oscuros o de alto contraste.
            </p>
        </div>
    </header>

    <main class="pd12">
        
        <h2>Temas de Scrollbar</h2>
        <p class="mg6">Se aplican al contenedor principal y definen los colores de la pista (track) y el pulgar (thumb).</p>
        
        <div class="mg6x bd1 tma_d2 pd6 fx fx11" style="height: 300px; gap: 1rem;">
            
            {{-- Scrollbar Negro --}}
            <div class="scl1 of1 pd6 bd1 tma_d5" style="width: 250px; height: 100%;">
                <h3 class="mg3 fs14 cl1">`.scl1` (Tema Oscuro)</h3>
                <p class="mg0 fs12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Esto genera suficiente texto para forzar la barra de scroll. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Esto genera suficiente texto para forzar la barra de scroll. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Esto genera suficiente texto para forzar la barra de scroll. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Esto genera suficiente texto para forzar la barra de scroll. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Esto genera suficiente texto para forzar la barra de scroll. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Esto genera suficiente texto para forzar la barra de scroll. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Esto genera suficiente texto para forzar la barra de scroll. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Esto genera suficiente texto para forzar la barra de scroll. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Esto genera suficiente texto para forzar la barra de scroll.</p>
            </div>
            
            {{-- Scrollbar Gris --}}
            <div class="scl2 of1 pd6 bd1 tma_d8" style="width: 250px; height: 100%;">
                <h3 class="mg3 fs14 cl9">`.scl2` (Tema Gris Claro)</h3>
                <p class="mg0 fs12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Esto genera suficiente texto para forzar la barra de scroll. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Esto genera suficiente texto para forzar la barra de scroll. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Esto genera suficiente texto para forzar la barra de scroll. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Esto genera suficiente texto para forzar la barra de scroll. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Esto genera suficiente texto para forzar la barra de scroll. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Esto genera suficiente texto para forzar la barra de scroll. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Esto genera suficiente texto para forzar la barra de scroll. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Esto genera suficiente texto para forzar la barra de scroll. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Esto genera suficiente texto para forzar la barra de scroll.</p>
            </div>
        </div>

        ---

        <h2>Modelos de Pulgar (`sclm`)</h2>
        <p class="mg6">Se pueden combinar con los temas (`sclN`) para modificar la forma del pulgar (thumb).</p>

        <div class="mg6x bd1 tma_d3 pd6 fx fx11" style="height: 150px; gap: 1rem;">
            {{-- Scrollbar Negro, Pulgar Cuadrado (por defecto) --}}
            <div class="scl1 sclm1 of1 pd3 bd1 tma_d5" style="width: 150px; height: 100%;">
                <p class="mg0 fs14 cl1">`.sclm1` (Cuadrado)</p>
            </div>
            
            {{-- Scrollbar Gris, Pulgar Redondeado --}}
            <div class="scl2 sclm2 of1 pd3 bd1 tma_d8" style="width: 150px; height: 100%;">
                <p class="mg0 fs14 cl9">`.sclm2` (Redondeado 10px)</p>
            </div>
        </div>

    </main>
@endsection