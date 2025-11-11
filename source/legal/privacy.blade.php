@extends('_layouts.main')

@section('title', 'Mukimono - Política de Privacidad')
@section('description', 'Política de privacidad para el sitio de Mukimono CSS, enfocada en la mínima recolección de datos.')

@section('body')
    @php
        // Estilos de diseño (manteniendo la estética profesional y elegante)
        $design = [
            'section' => 'mg16b pd12 liv rd3',
            'title' => 'fs22 mg8b tac',
            'subtitle' => 'fs18 mg12t',
            'list' => 'pd8l mg8t',
        ];

        $title = 'Política de Privacidad';
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
                En Mukimono CSS, valoramos su privacidad. Este sitio web de documentación está diseñado para **recolectar la mínima cantidad de información personal** necesaria para su correcto funcionamiento.
            </p>
        </div>

        <section class="{{ $design['section'] }}">
            <h2 class="{{ $design['subtitle'] }}">1. Información Recolectada</h2>
            <p class="fs14">
                **Información de Uso Anónima:** Recopilamos datos anónimos sobre cómo navega y utiliza la documentación (vía cookies analíticas, como se detalla en nuestra Política de Cookies). Esta información incluye páginas visitadas, tiempo en el sitio y tipo de dispositivo. Esta data es utilizada **únicamente para mejorar la calidad y el rendimiento** de la documentación.
            </p>
            <p class="fs14 mg8t">
                **Información de Contacto:** Si decide contactarnos (por ejemplo, a través de la página `/contact`), los datos que nos proporcione (nombre, correo electrónico) se utilizarán exclusivamente para responder a su consulta.
            </p>
        </section>

        <section class="{{ $design['section'] }}">
            <h2 class="{{ $design['subtitle'] }}">2. Compartir Información</h2>
            <p class="fs14">
                **No vendemos, alquilamos ni comercializamos su información personal.** Los datos de uso anónimos pueden ser compartidos con proveedores de servicios de análisis web (terceros) que nos ayudan a entender el tráfico del sitio, pero estos datos no son identificables personalmente.
            </p>
        </section>

        <section class="{{ $design['section'] }}">
            <h2 class="{{ $design['subtitle'] }}">3. Enlaces a Terceros</h2>
            <p class="fs14">
                Este sitio puede contener enlaces a otros sitios web (como GitHub, otros tutoriales o PayPal para donaciones). No somos responsables por las prácticas de privacidad de estos sitios externos. Le recomendamos leer sus políticas.
            </p>
        </section>
        
        <section class="{{ $design['section'] }}">
            <h2 class="{{ $design['subtitle'] }}">4. Sus Derechos</h2>
            <p class="fs14">
                Como usuario, usted tiene el derecho de acceder, corregir o eliminar cualquier información personal que podamos tener. Puede ejercer estos derechos contactándonos a través de la ruta de contacto.
            </p>
        </section>

    </main>
@endsection