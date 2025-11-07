@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Ancho de Página (pg)')
@section('description', 'Ejemplos de las utilidades de ancho máximo de página (pgN) para crear contenedores de diseño centrado y responsivo.')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Ancho de Página / Contenedor (`pg`)</h1>
            <p>
                Clases diseñadas para establecer el **ancho máximo** de un contenedor principal de contenido, asegurando que se ajuste al ancho total de la pantalla (`width: 100%`) hasta alcanzar el límite definido, y que permanezca **centrado horizontalmente** (`margin: 0 auto`).
            </p>
        </div>
    </header>

    <main class="pd12">
        <h2>Contenedores de Ancho Fijo Centrado</h2>
        <p class="mg6">Estas utilidades son ideales para mantener la legibilidad y el control del diseño en diferentes tamaños de pantalla.</p>
        
        <div class="mg6x bd1 tma_d2 pd6">
            
            <h3 class="mg6 fs16">Contenedores Comunes</h3>

            {{-- 320px - Mobile Smallest --}}
            <div class="pg320 bd1 tma_d8 pd6 mg8b">
                <p class="mg0 fs12">**< .pg320 >** Max-Width: 320px. (El contenedor más pequeño, ideal para móviles muy compactos).</p>
            </div>

            {{-- 640px - Medium Mobile --}}
            <div class="pg640 bd1 tma_d5 pd6 mg8b">
                <p class="mg0 fs14">**< .pg640 >** Max-Width: 640px. (Común para contenido móvil y tablet vertical).</p>
            </div>

            {{-- 1024px - Small Desktop --}}
            <div class="pg1024 bd1 tma_d8 pd6 mg8b">
                <p class="mg0 fs16">**< .pg1024 >** Max-Width: 1024px. (Común para contenido web general).</p>
            </div>
            
            {{-- 1440px - Large Desktop --}}
            <div class="pg1440 bd1 tma_d5 pd6">
                <p class="mg0 fs18">**< .pg1440 >** Max-Width: 1440px. (Común para pantallas grandes y contenido denso).</p>
            </div>
            
            <p class="fs12 cl4 mg12t">
                *Nota: En una pantalla pequeña, todos estos contenedores se verán al 100% del ancho, manteniendo el espaciado y el centrado.*
            </p>
        </div>

        ---

        <h2>Estructura de la Clase</h2>
        <p class="mg6">Cada clase utiliza la misma estructura, variando solo el valor de **max-width**.</p>
        
        <div class="mg6x pd6 bd1 tma_d3">
            <pre class="fs12">
.pg768 {
  width: 100%;
  max-width: 768px !important;
  display: block;
  margin: 0 auto; /* Centrado */
  box-sizing: border-box;
}
            </pre>
            <p class="fs14 mg6t">Usar `.pg768x > *` aplica el mismo estilo a todos los hijos directos del contenedor.</p>
        </div>
    </main> 
@endsection