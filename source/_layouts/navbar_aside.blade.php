@include('_routes.link') 
{{-- link.php ya contiene la definición de $NAV_LINKS con todos los 'link_secondary' --}}

<ul id="navbar_aside" class="tma_d4 tma_d7xhv lsn mg0 pd0">
    
    {{-- Itera sobre TODOS los enlaces secundarios de la guía --}}
    @foreach ($NAV_LINKS->link_secondary as $link)
        
        @php
            // La función 'isActive' verifica si el path actual coincide con la ruta del enlace.
            // Se asume que $page->isActive está definida en config.php.
            $isActive = $page->isActive($page, $link['route']);
            
            // Define estilos para el diseño profesional:
            // Estilo para el <li>: tma_d7 (fondo de acento) si está activo, vacío si no.
            $design_li = $isActive ? 'tma_d7' : '';
            
            // Estilo para el <a>: Color de acento (cl8) y negrita si está activo, gris oscuro (cl4) si no.
            $design_link = $isActive ? 'cl8 fwb' : 'cl4';
        @endphp

        <li class="{{ $design_li }}">
            <a 
                href="{{ $link['route'] }}" 
                class="lb48 pd6 {{ $design_link }} txfd-h"
            >
                {{-- Ícono: Se asume Font Awesome 5 (fas) --}}
                <span class="wi16 tc mg4r">
                    <i class="fas fa-{{ $link['icon'] }}"></i> 
                </span>
                
                {{ $link['name'] }}
            </a>
        </li>
    @endforeach
    
</ul>