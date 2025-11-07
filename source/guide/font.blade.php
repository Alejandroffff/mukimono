@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Fuente (fs)')
@section('description', 'Ejemplos de las utilidades de tamaño de fuente (fsN) de Mukimono CSS.')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd12">
            <h1>Tamaños de Fuente (`fs`)</h1>
            <p>
                Clases para aplicar tamaños de fuente fijos, desde notas pequeñas hasta títulos principales, asegurando una escala tipográfica consistente.
            </p>
        </div>
    </header>

    <main class="pd12">
        <h2>Texto Pequeño y Párrafos</h2>
        <p class="mg6">Utilidades para texto secundario y el cuerpo de contenido estándar (16px).</p>

        <div class="mg6x pd6 bd1 tma_d2">
            <p class="fs12 mg3">.fs12 | Texto de nota o legal (12px)</p>
            <p class="fs14 mg3">.fs14 | Texto auxiliar y descripciones (14px)</p>
            <p class="fs16 mg3">.fs16 | Texto de párrafo estándar (16px)</p>
            <p class="fs18 mg3">.fs18 | Texto destacado en párrafos (18px)</p>
        </div>

        ---

        <h2>Subtítulos y Secciones</h2>
        <p class="mg6">Tamaños utilizados para títulos de componentes y subsecciones.</p>

        <div class="mg6x pd6 bd1 tma_d3">
            <p class="fs20 mg3">.fs20 | Subtítulo pequeño (20px)</p>
            <p class="fs24 mg3">.fs24 | Subtítulo de sección (24px)</p>
            <p class="fs28 mg3">.fs28 | Título intermedio (28px)</p>
        </div>

        ---

        <h2>Encabezados Principales y Banners</h2>
        <p class="mg6">Tamaños reservados para `h1`, títulos principales y bloques de información visual.</p>
        
        <div class="mg6x pd6 bd1 tma_d4">
            <p class="fs32 mg3">.fs32 | Encabezado principal H2/H1 (32px)</p>
            <p class="fs40 mg3">.fs40 | Título de página (40px)</p>
        </div>

        <div class="mg6x pd6 tma_d5">
            <p class="fs48 mg3">.fs48 | Título grande (48px)</p>
            <p class="fs56 mg3">.fs56 | Título muy grande (56px)</p>
            <p class="fs64 mg3">.fs64 | Título de Hero / Banner (64px)</p>
        </div>

    </main>
@endsection