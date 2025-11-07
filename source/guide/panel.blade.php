@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Ancho de Panel (pn)')
@section('description', 'Ejemplos de las utilidades de ancho máximo de panel (pnN) para contenedores centrados como modales, formularios o secciones destacadas.')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd12">
            <h1>Ancho de Panel / Contenedor (`pn`)</h1>
            <p>
                Clases diseñadas para establecer el **ancho máximo** de elementos discretos y centrados. Aseguran que el elemento sea responsivo (`width: 100%`) hasta el límite definido y permanezca **centrado horizontalmente** (`margin: 0 auto`).
            </p>
        </div>
    </header>

    <main class="pd12">

        <h2>Paneles de Ancho Fijo Centrado</h2>
        <p class="mg6">Estos paneles garantizan la legibilidad y el control del diseño para contenido centralizado, como modales o formularios.</p>
        
        <div class="mg6x bd1 tma_d2 pd6">
            
            <h3 class="mg6 fs16">Ejemplos Clave de Panel</h3>

            {{-- 320px - Mobile --}}
            <div class="pn320 bd1 tma_d5 pd6 mg8b bg1">
                <p class="mg0 fs14">**< .pn320 >** (Max-Width: 320px). Ideal para formularios de inicio de sesión en móvil.</p>
            </div>

            {{-- 640px - Medium Mobile --}}
            <div class="pn640 bd1 tma_d8 pd6 mg8b bg2">
                <p class="mg0 fs16">**< .pn640 >** (Max-Width: 640px). Común para modales de confirmación o paneles de tablet vertical.</p>
            </div>
            
            {{-- 1024px - Small Desktop --}}
            <div class="pn1024 bd1 tma_d5 pd6 mg8b bg4">
                <p class="mg0 fs18">**< .pn1024 >** (Max-Width: 1024px). Adecuado para paneles grandes en el escritorio.</p>
            </div>
            
            <p class="fs12 cl4 mg12t">
                *El ancho se ajusta automáticamente, manteniendo el elemento centrado, gracias a `margin: 0 auto`.*
            </p>
        </div>

        ---

        <h2>Referencia de Tamaños (`pnN`)</h2>
        <p class="mg6">La utilidad de Panel ofrece un rango completo para adaptarse a cualquier resolución de dispositivo.</p>
        
        <div class="mg6x pd6 bd1 tma_d3">
            <table>
                <thead>
                    <tr>
                        <th>Clase</th>
                        <th>Max-Width</th>
                        <th>Uso Común</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>`.pn320`</td><td>320px</td><td>Móviles pequeños, tarjetas compactas.</td></tr>
                    <tr><td>`.pn480`</td><td>480px</td><td>Móviles grandes, modales de alerta.</td></tr>
                    <tr><td>`.pn640`</td><td>640px</td><td>Tabletas verticales, paneles de configuración.</td></tr>
                    <tr><td>`.pn768`</td><td>768px</td><td>Tabletas horizontales, modales grandes.</td></tr>
                    <tr><td>`.pn1024`</td><td>1024px</td><td>Escritorio pequeño, paneles de dashboard.</td></tr>
                    <tr><td>`.pn1280`</td><td>1280px</td><td>Escritorio estándar.</td></tr>
                    <tr><td>`.pn1440`</td><td>1440px</td><td>Escritorio grande.</td></tr>
                    <tr><td>`.pn1920`</td><td>1920px</td><td>Monitores Full HD.</td></tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection