@php
    // Estilos de diseño (Profesional, Serio, Elegante)
    $design = [
        // Clases para el contenido principal
        'heading' => 'fs32 mg12b', 
        'subheading' => 'fs18 mg16b', 

        // Estilos para el contenedor de cada ejemplo
        'example_block' => 'liv rd3 pd12 mg16b', 

        // Estilos para la demostración visual
        'alert_demo_area' => 'pd8tb mg8b', 
    ];

    // Datos para los ejemplos (sin cambios)
    $alerts = [
        ['class' => 'al1', 'name' => 'Success', 'icon_class' => 'check-circle'],
        ['class' => 'al2', 'name' => 'Info', 'icon_class' => 'info-circle'],
        ['class' => 'al3', 'name' => 'Warning', 'icon_class' => 'exclamation-triangle'],
        ['class' => 'al4', 'name' => 'Error', 'icon_class' => 'times-circle'],
        ['class' => 'al5', 'name' => 'Neutral', 'icon_class' => 'tag'],
        ['class' => 'al6', 'name' => 'Process', 'icon_class' => 'circle-notch'],
        ['class' => 'al7', 'name' => 'Notification', 'icon_class' => 'bell'],
        ['class' => 'al8', 'name' => 'Advisory', 'icon_class' => 'exclamation-circle'],
        ['class' => 'al9', 'name' => 'Highlight', 'icon_class' => 'star'],
        ['class' => 'al10', 'name' => 'Completed', 'icon_class' => 'check-double'],
    ];
@endphp

@extends('_layouts.main')

{{-- TITULO Y DESCRIPCION MUY CORTA --}}
@section('title', 'Mukimono - Alertas')
@section('description', 'Clases directas para notificaciones compactas.')

@section('body')
    <header>
        {{-- Incluye la barra de navegación de la guía --}}
        @include('_layouts.navbar_guide_top')
        <div class="pd12 tac">
            <h1 class="{{ $design['heading'] }}">Alertas (al1 - al10)</h1>
            <p class="{{ $design['subheading'] }}">
                **Haga clic en la alerta** para copiar la clase de utilidad.
            </p>
        </div>
    </header>

    <main class="pd12">

        <h2 class="fs24 mg16b tac">Ejemplos y Uso Directo</h2>

        {{-- Contenedor Flexbox Responsivo: fxw (flex-wrap), fxjb (justify-between) --}}
        <div class="fx fx10 w256x">
            @foreach ($alerts as $alert)
                {{-- Bloque responsivo: w100p (móvil), lg:w48p (escritorio para 2 columnas) --}}
                <div class="mg3">
                    {{-- Contenedor principal con click handler para copiar la clase --}}
                    <div class="{{ $design['example_block'] }}"
                        onclick="copyToClipboard('{{ $alert['class'] }}'); return false;">

                        {{-- Título que incluye la clase para referencia --}}
                        <h3 class="fs16 mg8b">{{ $alert['name'] }} (Usa `{{ $alert['class'] }}`)</h3>

                        {{-- RESULTADO VISUAL CLICKABLE (Demostración) --}}
                        <div class="{{ $alert['class'] }} {{ $design['alert_demo_area'] }}">   
                            <span>{{ $alert['name'] }}:</span>
                            <span class="mg6l">Este es un ejemplo</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <p class="fs12 tac mg16t">
            Nota: Las alertas cuentan con un sutil efecto de elevación al pasar el cursor (`:hover`).
        </p>

        {{-- Contenedor de Notificación de Copia - Usando clases REALES de Mukimono --}}
        <div id="copy-notification" 
            class="pd12 rd3 bg7 cw fs14 pstfx bt16 rt16 z10 dn">
            <span id="notification-message"></span>
        </div>
    </main>

    {{-- Script de Copiado Mejorado --}}
    <script>
        const copyToClipboard = (classToCopy) => {
            // 1. Copiar al portapapeles
            navigator.clipboard.writeText(classToCopy).then(() => {
                
                // 2. Obtener elementos
                const notification = document.getElementById('copy-notification');
                const message = document.getElementById('notification-message');
                
                // Actualizar mensaje
                message.textContent = `Clase "${classToCopy}" copiada!`;

                // 3. Mostrar la notificación (usando clases REALES de Mukimono)
                notification.classList.remove('dn'); // dn = display: none
                notification.classList.add('db');    // db = display: block

                // 4. Ocultar la notificación después de 2 segundos
                setTimeout(() => {
                    notification.classList.remove('db');
                    notification.classList.add('dn');
                }, 2000);

            }).catch(err => {
                console.error('Error al copiar: ', err);
            });
        };
    </script>
@endsection