@php
    // box
    $design = [
        'box' => 'pd12 liv',
        'title' => 'fs22',
        'paragraph' => 'fs14',
    ];

    // Accedemos a los enlaces del footer y a los assets
    $footerLinks = $page->NAV_LINKS['link_footer'] ?? []; 
    $assetPaths = $page->NAV_LINKS['asset_paths'] ?? [];
@endphp

<footer class="pd12tb tma_d3">
    <div class="fx10">
        
        {{-- Sección de Branding (CORREGIDO: Agregamos Logotipo y clase box) --}}
        <div class="{{ $design['box'] }}">
            {{-- Usamos la ruta del logotype desde asset_paths --}}
            <img src="{{ $page->baseUrl }}{{ $assetPaths['logotype'] ?? '/assets/images/logotype.png' }}" 
                 alt="Logotipo Mukimono" 
                 class="h40 mg6b">
            <h3 class="{{ $design['title'] }}">Mukimono Css</h3>
            <p class="{{ $design['paragraph'] }}">
                Plataforma Profesional y Soluciones Empresariales de Alto Nivel.
            </p>
        </div>
        
        {{-- Sección de Navegación (CORREGIDO: Usamos el bucle $footerLinks) --}}
        <div class="{{ $design['box'] }}">
            <h3 class="{{ $design['title'] }}">Navegación</h3>
            {{-- La clase tma_d7xhv se mantiene --}}
            <ul class="tma_d7xhv">
                @foreach ($footerLinks as $link)
                    <li>
                        {{-- Usamos la ruta dinámica del array y el baseUrl --}}
                        <a href="{{ $page->baseUrl }}{{ $link['route'] }}" class="lb40">
                             {{ $link['name'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        
        {{-- Sección de Contacto (Se mantienen los textos) --}}
        <div class="{{ $design['box'] }}">
            <h3 class="{{ $design['title'] }}">Contacto</h3>
            <p class="{{ $design['paragraph'] }}">Email: info@mukimono.com</p>
            {{-- El siguiente p tenía solo la clase fx-col-4-d que eliminé en la respuesta anterior, lo dejamos solo con el texto --}}
            <p>Soporte: +507 555-5555</p> 
        </div>

    </div>

    {{-- Sección de Copyright --}}
    <div class="pd12 tac">
        <p class="{{ $design['paragraph'] }}">
            &copy; {{ date('Y') }} MUKIMONO. Todos los derechos reservados.
        </p>
    </div>
</footer>