@php
    // Acceso a NAV_LINKS. Todas las variables están inicializadas.
    // Usaremos $secondaryLinks para la navegación de la guía.
    $NAV_LINKS = $page->NAV_LINKS ?? [];
    $publicLinks = $NAV_LINKS['link_public'] ?? [];
    $secondaryLinks = $NAV_LINKS['link_secondary'] ?? []; // Contiene todas las 37 utilidades
    $assetPaths = $NAV_LINKS['asset_paths'] ?? [];

    // Definición de enlaces principales
    $homeLink = $publicLinks[0] ?? ['name' => 'Home', 'route' => '/', 'icon' => 'home'];
    $contactLink = $publicLinks[1] ?? ['name' => 'Contact', 'route' => '/contact', 'icon' => 'phone'];
    $donateLink = $publicLinks[2] ?? ['name' => 'Donar', 'route' => '/legal/donate', 'icon' => 'payment'];
    
    // El primer link de link_secondary es 'Guide Home'
    $guideHomeLink = $secondaryLinks[0] ?? ['name' => 'Guide', 'route' => '/guide/home', 'icon' => 'menu_book'];


    // Estilos (Profesional y Elegante)
    $activeClass = 'tma_d3 rd3'; // Clase para enlace activo
    $defaultClass = 'lb48 pd8lr'; // Estilo base de escritorio
    $defaultClassMobile = $defaultClass . ' w100p fx1 fx8'; // Estilo base móvil
    $iconClass = 'material-icons mg6r'; // Clase para iconos de Material Icons
    // Clase de botón prominente para escritorio
    $donateButtonClass = 'bt48 tma_d5hv tma_d7hv pd8lr';

    // Función de ayuda para construir clases
    $getClass = function ($route, $isDonate = false, $isMobile = false) use ($page, $activeClass, $defaultClass, $donateButtonClass, $defaultClassMobile) {
        // Usa la clase base móvil si es true, sino usa la de escritorio
        $linkBaseClass = $isMobile ? $defaultClassMobile : $defaultClass;
        // Si no es móvil Y es el botón de donar, aplica la clase de botón
        if ($isDonate && !$isMobile) {
            $linkBaseClass = $donateButtonClass;
        }

        $linkClass = $linkBaseClass;
        // Verifica si la página actual está activa (incluye sub-rutas, gracias a 'isActive' que memorizaste)
        if ($page->isActive($route)) {
            $linkClass .= ' ' . $activeClass;
        }
        return $linkClass;
    };
@endphp

<nav id="navbar_main_top" class="z9 tma_d2 pd8lr pst9" title="Guide Navigation Bar">
    <div class="fx13">

        {{-- Área de Logo --}}
        <div>
            <a href="{{ $page->baseUrl }}{{ $homeLink['route'] }}" class="lb48" title="Go to Home Page">
                <img src="{{ $page->baseUrl }}{{ $assetPaths['logotype'] ?? '/assets/images/logotype.png' }}"
                    alt="Mukimono Css Logo" class="img24" title="Mukimono CSS Logotype">
            </a>
        </div>

        {{-- Área de Navegación y Botón (Contenedor Flex) --}}
        <div class="fx1">

            {{-- 1. Navegación Horizontal (Desktop) --}}
            <div id="navbar_main_top_hor" class="lih">
                <ul class="tma_d7xhv mg0 pd0" title="Main Navigation Links">
                    
                    {{-- HOME Link --}}
                    <li>
                        <a href="{{ $page->baseUrl }}{{ $homeLink['route'] }}"
                            class="{{ $getClass($homeLink['route']) }}" title="{{ $homeLink['name'] }}">
                            <i class="{{ $iconClass }}">{{ $homeLink['icon'] }}</i>
                            Inicio
                        </a>
                    </li>

                    {{-- CONTACT Link --}}
                    <li>
                        <a href="{{ $page->baseUrl }}{{ $contactLink['route'] }}"
                            class="{{ $getClass($contactLink['route']) }}" title="{{ $contactLink['name'] }}">
                            <i class="{{ $iconClass }}">{{ $contactLink['icon'] }}</i>
                            Contacto
                        </a>
                    </li>

                    {{-- GUIDE HOME Link (Usamos el primer enlace secundario para enlazar a la guía) --}}
                    <li>
                        <a href="{{ $page->baseUrl }}{{ $guideHomeLink['route'] }}"
                            class="{{ $getClass($guideHomeLink['route']) }}" title="{{ $guideHomeLink['name'] }}">
                            <i class="{{ $iconClass }}">menu_book</i>
                            Guía
                        </a>
                    </li>

                    {{-- DONATE Button (Estilo Especial en Desktop) --}}
                    <li>
                        <a href="{{ $page->baseUrl }}{{ $donateLink['route'] }}"
                            class="{{ $getClass($donateLink['route'], true) }} tma_d9"
                            title="{{ $donateLink['name'] }}">
                            <i class="{{ $iconClass }}">payment</i>
                            Donar
                        </a>
                    </li>
                </ul>
            </div>

            {{-- 2. Menú Fijo (Móvil) --}}
            {{-- pst4 (posicionamiento absoluto/fixed) h100vh (altura completa) of1 (overflow auto) tma_d5 (fondo) mn280 (min-width) --}}
            <div id="navbar_main_top_fixed" class="z10 liv pst4 h100vh of1 tma_d5 mn280" style="display: none;">

                {{-- Botón de Cerrar --}}
                <button onclick="navbar_main_top_fixed_toggle('navbar_main_top_fixed')" type="button"
                    class="bt48 wi48 tma_d7hv pd8lr fx" aria-label="Close Menu">
                    <i class="{{ $iconClass }}">close</i>
                </button>

                <ul class="tma_d7xhv mg0 pd0 mg8t" title="Mobile Navigation Links">

                    {{-- ENLACES PRINCIPALES (Móvil) --}}
                    <li>
                        <a href="{{ $page->baseUrl }}{{ $homeLink['route'] }}"
                            class="{{ $getClass($homeLink['route'], false, true) }}" title="{{ $homeLink['name'] }}">
                            <i class="{{ $iconClass }}">{{ $homeLink['icon'] }}</i> Inicio
                        </a>
                    </li>
                    <li>
                        <a href="{{ $page->baseUrl }}{{ $contactLink['route'] }}"
                            class="{{ $getClass($contactLink['route'], false, true) }}" title="{{ $contactLink['name'] }}">
                            <i class="{{ $iconClass }}">{{ $contactLink['icon'] }}</i> Contacto
                        </a>
                    </li>
                    <hr class="mg12">
                    
                    {{-- TÍTULO DE LA GUÍA (para separar) --}}
                    <h4 class="fs12 pd8lr pd8tb">DOCUMENTACIÓN DE UTILIDADES</h4>

                    {{-- ENLACES DINÁMICOS DE LA GUÍA (link_secondary) --}}
                    @foreach ($secondaryLinks as $link)
                        <li>
                            <a href="{{ $page->baseUrl }}{{ $link['route'] }}"
                                class="{{ $getClass($link['route'], false, true) }}" title="{{ $link['name'] }}">
                                {{-- Usamos el ícono de Font Awesome que mapeaste en link.php --}}
                                <i class="fa fa-{{ $link['icon'] }} mg6r"></i>
                                {{ $link['name'] }}
                            </a>
                        </li>
                    @endforeach
                    <hr class="mg12">

                    {{-- DONATE Button (Móvil) --}}
                    <li>
                        <a href="{{ $page->baseUrl }}{{ $donateLink['route'] }}"
                            class="{{ $getClass($donateLink['route'], true, true) }} tma_d9"
                            title="{{ $donateLink['name'] }}">
                            <i class="{{ $iconClass }}">payment</i> Donar
                        </a>
                    </li>

                </ul>
            </div>


            {{-- Botón de Abrir Menú Móvil --}}
            <div>
                <button onclick="navbar_main_top_fixed_toggle('navbar_main_top_fixed')" type="button"
                    class="bt48 wi48 tma_d7hv pd8lr" aria-label="Open Menu">
                    <i class="{{ $iconClass }}">menu</i> Menu
                </button>
            </div>

        </div>
    </div>
</nav>

{{-- JS para el toggle --}}
<script>
    /**
     * Toggles the visibility of an element by its ID and hides/shows scroll on the body.
     * @param {string} id The ID of the element to toggle.
     */
    const navbar_main_top_fixed_toggle = id => {
        const el = document.getElementById(id);
        const body = document.body;
        if (el) {
            const isHidden = el.style.display === 'none' || el.style.display === '';
            el.style.display = isHidden ? 'block' : 'none';

            // Use the remembered utility class .of4 for overflow: hidden
            // Comentario: Oculta el scroll en móvil al abrir el menú (estética profesional y usabilidad).
            if (isHidden) {
                body.classList.add('of4'); // .of4 = overflow: hidden
            } else {
                body.classList.remove('of4');
            }
        }
    };
</script>