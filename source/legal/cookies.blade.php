@extends('_layouts.main')

@section('title', 'Mukimono - Política de Cookies')
@section('description', 'Información clara sobre el uso de cookies y tecnologías de seguimiento en el sitio web de Mukimono CSS.')

@section('body')
    @php
        // Estilos de diseño (manteniendo la estética profesional y elegante)
        $design = [
            'section' => 'mg16b pd12 liv rd3',
            'title' => 'fs22 mg8b tac',
            'subtitle' => 'fs18 mg12t',
            'list' => 'pd8l mg8t',
        ];

        $title = 'Política de Cookies';
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
                Esta política explica cómo y por qué se utilizan las "cookies" y tecnologías similares en el sitio web de documentación de Mukimono CSS.
            </p>
        </div>

        <section class="{{ $design['section'] }}">
            <h2 class="{{ $design['subtitle'] }}">1. ¿Qué son las Cookies?</h2>
            <p class="fs14">
                Las cookies son pequeños archivos de texto que los sitios web colocan en su dispositivo (ordenador, tablet o móvil) mientras navega. Se utilizan ampliamente para hacer que los sitios web funcionen de manera eficiente y para proporcionar información a los propietarios del sitio.
            </p>
        </section>

        <section class="{{ $design['section'] }}">
            <h2 class="{{ $design['subtitle'] }}">2. Cómo Usamos las Cookies</h2>
            <p class="fs14">
                El sitio web de Mukimono CSS utiliza cookies para garantizar el correcto funcionamiento del sitio, la seguridad, la gestión de la sesión y la personalización de la experiencia.
            </p>
            <h3 class="fs16 fw7 mg8t">Tipos de Cookies Utilizadas:</h3>
            <ul class="{{ $design['list'] }}">
                <li>**Cookies Esenciales (Técnicas):** Necesarias para el funcionamiento básico del sitio, como recordar sus preferencias de visualización o sesión de navegación.</li>
                <li>**Cookies de Rendimiento/Analíticas:** Utilizamos servicios de terceros (como Google Analytics, si aplica) para recopilar información anónima sobre cómo los visitantes usan el sitio. Esto nos ayuda a mejorar la documentación y la experiencia del usuario.</li>
            </ul>
        </section>

        <section class="{{ $design['section'] }}">
            <h2 class="{{ $design['subtitle'] }}">3. Su Control sobre las Cookies</h2>
            <p class="fs14">
                La mayoría de los navegadores web le permiten controlar la configuración de cookies. Usted puede configurar su navegador para que rechace o elimine ciertas cookies. Sin embargo, si deshabilita las cookies esenciales, es posible que algunas partes de nuestro sitio no funcionen correctamente.
            </p>
            <p class="al2 fs14 mg12t">
                Para gestionar sus preferencias, consulte la sección de Ayuda de su navegador.
            </p>
        </section>

    </main>
@endsection