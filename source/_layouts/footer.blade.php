@php
    // box
    $design = [
        'box' => 'pd12 liv',
        'title' => 'fs22',
        'paragraph' => 'fs14',
    ];
@endphp
<footer class="pd12tb">
    <div class="fx10">
        
        {{-- Sección de Branding (Sin Clases) --}}
        <div class="{{ $design['box'] }}">
            <h3 class="{{ $design['title'] }}">Mukimono Css</h3>
            <p class="{{ $design['paragraph'] }}">
                Plataforma Profesional y Soluciones Empresariales de Alto Nivel.
            </p>
        </div>
        
        {{-- Sección de Navegación (Sin Clases) --}}
        <div class="{{ $design['box'] }}">
            <h3 class="{{ $design['title'] }}">Navegación</h3>
            <ul class="tma_d7xhv">
                <li>
                    {{-- Usamos la URL estática segura / para Home --}}
                    <a href="/" class="lb40">Inicio</a>
                </li>
                <li>
                    {{-- Usamos la URL estática segura /contacto para Contacto --}}
                    <a href="/contacto"  class="lb40">Contacto</a>
                </li>
            </ul>
        </div>
        
        {{-- Sección de Contacto (Sin Clases) --}}
        <div class="{{ $design['box'] }}">
            <h3 class="{{ $design['title'] }}">Contacto</h3>
            <p class="{{ $design['paragraph'] }}">Email: info@mukimono.com</p>
            <p>Soporte: +507 555-5555</p>
        </div>

    </div>

    {{-- Sección de Copyright (Sin Clases) --}}
    <div class="pd12 tac">
        <p class="{{ $design['paragraph'] }}">
            &copy; {{ date('Y') }} MUKIMONO. Todos los derechos reservados.
        </p>
    </div>
</footer>