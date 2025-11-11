@extends('_layouts.main')

@section('title', 'Mukimono - Términos de Servicio')
@section('description', 'Términos y Condiciones de Uso para el acceso y utilización del framework Mukimono CSS.')

@section('body')
    @php
        // Estilos de diseño (manteniendo la estética profesional y elegante)
        $design = [
            'section' => 'mg16b pd12 liv rd3',
            'title' => 'fs22 mg8b tac',
            'subtitle' => 'fs18 mg12t',
        ];

        $title = 'Términos y Condiciones de Servicio';
        $date = 'Fecha de entrada en vigor: 09 de Noviembre de 2025';
    @endphp

    <header>
        @include('_layouts.navbar_main_top')
        <div class="pd12">
            <h1 class="{{ $design['title'] }}">{{ $title }}</h1>
            <p class="fs14 tac">
                {{ $date }}
            </p>
        </div>
    </header>

    <main class="pd12">
        <div class="mg16b liv rd3 pd12">
            <p class="fs16 mg8b">
                **Mukimono CSS** es un **proyecto de código abierto y uso gratuito** (Open Source). Al acceder y utilizar este framework y su documentación asociada, usted acepta regirse por los siguientes términos.
            </p>
        </div>

        <section class="{{ $design['section'] }}">
            <h2 class="{{ $design['subtitle'] }}">1. Licencia y Uso</h2>
            <p class="fs14">
                Mukimono CSS se distribuye bajo la **Licencia MIT**. Usted es libre de usar, copiar, modificar, fusionar, publicar, distribuir, sublicenciar y/o vender copias del Software, sujeto únicamente a la inclusión del aviso de derechos de autor y el aviso de licencia en todas las copias.
            </p>
        </section>

        <section class="{{ $design['section'] }}">
            <h2 class="{{ $design['subtitle'] }}">2. Exclusión de Garantías</h2>
            <p class="fs14">
                El Software se proporciona **"tal cual"**, sin garantía de ningún tipo, expresa o implícita, incluyendo, pero no limitado a, las garantías de comerciabilidad, idoneidad para un propósito particular y no infracción. El autor no será responsable de ningún reclamo, daño u otra responsabilidad derivada del uso del software.
            </p>
        </section>

        <section class="{{ $design['section'] }}">
            <h2 class="{{ $design['subtitle'] }}">3. Uso Aceptable</h2>
            <p class="fs14">
                Usted acepta utilizar Mukimono CSS y su documentación solo para **fines lícitos** y de manera que no infrinja los derechos de terceros ni restrinja o inhiba el uso y disfrute de la plataforma. Se prohíben estrictamente el uso de este recurso para actividades maliciosas o ilegales.
            </p>
        </section>
        
        <section class="{{ $design['section'] }}">
            <h2 class="{{ $design['subtitle'] }}">4. Modificaciones de los Términos</h2>
            <p class="fs14">
                Nos reservamos el derecho de modificar estos Términos en cualquier momento. Cualquier cambio será publicado en esta página y la fecha de entrada en vigor será actualizada. **Su uso continuado** del Software después de dichas modificaciones constituye su aceptación de los nuevos Términos.
            </p>
        </section>

    </main>
@endsection