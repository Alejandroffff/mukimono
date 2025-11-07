@extends('_layouts.main')

@section('title', 'Mukimono - Enlaces como Botones (lb)')
@section('description', 'Ejemplos de las utilidades de enlace de botón (lbN) que aplican estilos base de tamaño, padding y alineación a etiquetas <a>.')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Enlaces como Botones (`lb`)</h1>
            <p>
                Clases base que transforman enlaces (`<a>`) en elementos con comportamiento y dimensiones de botón. Esto establece **min-height**, **padding** y **centrado Flexbox** (`display: inline-flex`).
            </p>
        </div>
    </header>

    <main class="pd12">

        <h2>Tamaños y Dimensiones (`.lbN`)</h2>
        <p class="mg6">La clase principal `.lbN` establece la **altura mínima** y el **padding horizontal** proporcional. Para que estos enlaces se vean como botones en esta documentación, les aplicaremos clases de color (`bg3`, `cl9`, `rd3`).</p>

        <div class="mg6x pd6 bd1 tma_d2 fx fx6 fx8 fx16" style="gap: 1rem;">
            <a href="#" class="lb32 bg3 cl9 rd3 pd6 mg3 fs14">.lb32 (32px)</a>
            <a href="#" class="lb48 bg3 cl9 rd3 pd6 mg3 fs16">.lb48 (48px) - Texto</a>
            <a href="#" class="lb64 bg3 cl9 rd3 pd6 mg3 fs18">.lb64 (64px) Elegante</a>
            <a href="#" class="lb80 bg3 cl9 rd3 pd6 mg3 fs20">.lb80 (80px) Grande</a>
        </div>

        ---

        <h2>Aplicación a Contenedores (`.lbNx` y `.lbNxx`)</h2>
        <p class="mg6">Estas clases son útiles si deseas que un contenedor defina el estilo de sus enlaces internos, sean directos (`.lbNx`) o anidados (`.lbNxx`).</p>

        <div class="mg6x pd6 bd1 tma_d3">
            <h3 class="mg6">Hijos Directos (`.lb40x`)</h3>
            <div class="lb40x pd3 bd1 tma_d5" style="width: 100%;">
                <a href="#" class="bg4 cl9 rd3 mg1 pd6">Enlace Directo 1</a>
                <a href="#" class="bg4 cl9 rd3 mg1 pd6">Enlace Directo 2</a>
            </div>
            
            <h3 class="mg6">Enlaces Anidados (`.lb56xx`)</h3>
            <div class="lb56xx pd3 bd1 tma_d8">
                <p class="mg3">
                    <a href="#" class="bg5 cl9 rd3 pd6">Enlace Anidado (56px)</a>
                </p>
                <div>
                    <a href="#" class="bg5 cl9 rd3 pd6">Otro Enlace Anidado (56px)</a>
                </div>
            </div>
        </div>
        
        ---

        <h2>Clase de Fuerza (`.lb-force`)</h2>
        <p class="mg6">Utiliza **`.lb-force`** si los estilos base de Mukimono son sobrescritos por estilos de frameworks o librerías externas.</p>

        <div class="mg6x pd6 bd1 tma_d4">
             <a href="#" class="lb32 bg3 cl9 rd3 lb-force">.lb-force aplicado</a>
             <p class="fs12 mg3">Asegura `min-height`, `padding`, y `display: inline-flex` en cualquier contexto.</p>
        </div>
    </main>
@endsection