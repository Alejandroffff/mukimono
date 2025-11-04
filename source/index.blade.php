@extends('_layouts.main')

{{-- Define el título y descripción de la página --}}
@php
$page->title = 'MUKIMONO CSS - Framework CSS Simple y Elegante';
$page->description = 'MUKIMONO CSS: Marco de trabajo CSS gratuito, minimalista y profesional para interfaces de alto contraste.';
@endphp

@section('body')

    {{-- Contenedor principal (Se usa 'design' según tus preferencias) --}}
    <div class="design">

        {{-- 1. Cabecera Principal y Lema --}}
        <header>
            @include('_layouts.navbar')
            <div class="pd12">
                <h1>
                    MUKIMONO <span>CSS</span>
                </h1>
                <p>
                    Marco de trabajo CSS simple, rápido y profesional.
                </p>
            </div>
        </header>

        <div class="pd12x">
            {{-- 2. Sección de Propósito (Qué es) --}}
            <section>
                <h2>Enfoque Minimalista</h2>
                <p>
                    <strong>MUKIMONO CSS</strong> minimalista, rápido y de código abierto, garantiza un <strong>diseño serio y elegante</strong> con la máxima eficiencia.
                </p>
            </section>

            {{-- 3. Llamada a la Acción (CTA) Directa --}}
            <div>
                <a href="/guia" class="lb48 tma_d9 rd3">
                    Comenzar con la Guía
                </a>
            </div>

            {{-- Bloque de Inclusión de CSS y Botón de Copia --}}
            <div>
                <h3>Incluyelo en tu Proyecto web</h3>
                
                {{-- Contenedor del código --}}
                <div class="pd12b">
                    {{-- Usamos un div en lugar de code, ya que el contenido es solo texto --}}
                    <div id="css-link-code" class="tma_d3 pd12 rd3">
                        &lt;link rel="stylesheet" href="http://www.mukimonocss.unaux.com/assets/build/css/main.css"&gt;
                    </div>
                </div>
                
                {{-- Contenedor del botón --}}
                <div class="pd12b">
                    <button
                        class="bt48 tma_d7 tma_d8hv rd3 pd8lr"
                        onclick="copyToClipboard('css-link-code')"
                        title="Copiar al portapapeles">
                        Copiar
                    </button>
                </div>

                {{-- 4. Sección de Características Principales (vacía) --}}
                <section>
                </section>

            </div>

        </div>
    </div>
    
    {{-- Scripts de JavaScript para la funcionalidad de copia --}}
    <script>
        function copyToClipboard(elementId) {
            const codeElement = document.getElementById(elementId);
            if (codeElement) {
                // El contenido a copiar es el texto interno, que ya está decodificado por el navegador
                // (ej: de &lt; a <) si usamos innerText
                const contentToCopy = codeElement.innerText.trim(); 

                // Crea un elemento temporal para copiar
                const textarea = document.createElement('textarea');
                textarea.value = contentToCopy;
                textarea.style.position = 'fixed'; // Para evitar desplazamiento
                textarea.style.opacity = '0'; // Hacerlo invisible
                
                document.body.appendChild(textarea);
                
                textarea.select();
                
                // Intenta usar la API moderna si está disponible
                if (navigator.clipboard && navigator.clipboard.writeText) {
                    navigator.clipboard.writeText(contentToCopy).then(() => {
                        console.log('Copiado con éxito a través de Clipboard API');
                        showConfirmation(codeElement.nextElementSibling.querySelector('button') || codeElement.nextElementSibling.children[0]);
                    }).catch(err => {
                        // Fallback si falla la API
                        console.error('Error al copiar: Fallback a execCommand', err);
                        document.execCommand('copy');
                        showConfirmation(codeElement.nextElementSibling.querySelector('button') || codeElement.nextElementSibling.children[0]);
                    });
                } else {
                    // Fallback para navegadores antiguos
                    document.execCommand('copy');
                    showConfirmation(codeElement.nextElementSibling.querySelector('button') || codeElement.nextElementSibling.children[0]);
                }

                document.body.removeChild(textarea);
            }
        }

        // Función auxiliar para cambiar el texto del botón
        function showConfirmation(button) {
            if (button) {
                const originalText = button.innerText;
                const originalClass = button.className;
                
                // Usamos el color de Éxito (d9) para la confirmación visual
                button.innerText = '¡Copiado!';
                button.className = button.className.replace('tma_d7', 'tma_d9').replace('tma_d8hv', 'tma_d9hv');

                setTimeout(() => {
                    button.innerText = originalText;
                    button.className = originalClass;
                }, 1500);
            }
        }
    </script>

@endsection