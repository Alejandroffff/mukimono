@php
    // Acceso a NAV_LINKS. Todas las variables están inicializadas.
    $NAV_LINKS = $page->NAV_LINKS ?? [];
    $publicLinks = $NAV_LINKS['link_public'] ?? [];
    $secondaryLinks = $NAV_LINKS['link_secondary'] ?? [];
    $assetPaths = $NAV_LINKS['asset_paths'] ?? [];

    // Definición de enlaces individuales
    $homeLink = $publicLinks[0] ?? ['name' => 'Home', 'route' => '/', 'icon' => 'home'];
    $contactLink = $publicLinks[1] ?? ['name' => 'Contact', 'route' => '/contact', 'icon' => 'phone'];
    $donateLink = $publicLinks[2] ?? ['name' => 'Donar', 'route' => '/legal/donate', 'icon' => 'payment'];
    $guideLink = $secondaryLinks[0] ?? ['name' => 'Guide', 'route' => '/guide/home', 'icon' => 'menu_book'];

    // Estilos (Profesional y Elegante)
    $activeClass = 'tma_d3 rd3';
    $defaultClass = 'lb48 pd8lr';
    $defaultClassMobile = $defaultClass . ' w100p fx1 fx8';
    $iconClass = 'material-icons mg6r';
    // Clase de botón prominente
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
        if ($page->isActive($route)) {
            $linkClass .= ' ' . $activeClass;
        }
        return $linkClass;
    };
@endphp

<nav id="navbar_main_top" class="tma_d2 pd8lr pst9" title="Main Navigation Bar">
    <div class="fx13">

        {{-- Área de Logo --}}
        <div>
            <a href="{{ $page->baseUrl }}/" class="lb48" title="Go to Home Page">
                <img src="{{ $page->baseUrl }}{{ $assetPaths['logotype'] ?? '/assets/images/logotype.png' }}"
                    alt="Mukimono Css Logo" class="img24" title="Mukimono CSS Logotype">
            </a>
        </div>

        {{-- Área de Navegación y Botón --}}
        <div class="fx1">

            {{-- Navegación Horizontal (Desktop) --}}
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

                    {{-- GUIDE Link --}}
                    <li>
                        <a href="{{ $page->baseUrl }}{{ $guideLink['route'] }}"
                            class="{{ $getClass($guideLink['route']) }}" title="{{ $guideLink['name'] }}">
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

            {{-- Menú Fijo (Móvil) --}}
            <div id="navbar_main_top_fixed" class="liv pst4 h100vh of1 tma_d5 mn280" style="display: none;">

                {{-- Botón de Cerrar --}}
                <button onclick="navbar_main_top_fixed_toggle('navbar_main_top_fixed')" type="button"
                    class="bt48 wi48 tma_d7hv pd8lr" aria-label="Close Menu">
                    <i class="{{ $iconClass }}">close</i>
                </button>

                <ul class="tma_d7xhv mg0 pd0" title="Mobile Navigation Links">

                    {{-- HOME Link (Móvil) --}}
                    <li>
                        {{-- USANDO $getClass (route, isDonate=false, isMobile=true) --}}
                        <a href="{{ $page->baseUrl }}{{ $homeLink['route'] }}"
                            class="{{ $getClass($homeLink['route'], false, true) }}"
                            title="{{ $homeLink['name'] }}">
                            <i class="{{ $iconClass }}">{{ $homeLink['icon'] }}</i>
                            Inicio
                        </a>
                    </li>

                    {{-- CONTACT Link (Móvil) --}}
                    <li>
                        <a href="{{ $page->baseUrl }}{{ $contactLink['route'] }}"
                            class="{{ $getClass($contactLink['route'], false, true) }}"
                            title="{{ $contactLink['name'] }}">
                            <i class="{{ $iconClass }}">{{ $contactLink['icon'] }}</i>
                            Contacto
                        </a>
                    </li>

                    {{-- GUIDE Link (Móvil) --}}
                    <li>
                        <a href="{{ $page->baseUrl }}{{ $guideLink['route'] }}"
                            class="{{ $getClass($guideLink['route'], false, true) }}"
                            title="{{ $guideLink['name'] }}">
                            <i class="{{ $iconClass }}">menu_book</i>
                            Guía
                        </a>
                    </li>

                    {{-- DONATE Button (Móvil) --}}
                    <li>
                        {{-- USANDO $getClass (route, isDonate=true, isMobile=true). En móvil, la clase bt48 se ignora, pero activa el estado activo si aplica. --}}
                        <a href="{{ $page->baseUrl }}{{ $donateLink['route'] }}"
                            class="{{ $getClass($donateLink['route'], true, true) }} tma_d9"
                            title="{{ $donateLink['name'] }}">
                            <i class="{{ $iconClass }}">payment</i>
                            Donar
                        </a>
                    </li>

                </ul>
            </div>


            {{-- Botón de Abrir Menú Móvil --}}
            <div>
                <button onclick="navbar_main_top_fixed_toggle('navbar_main_top_fixed')" type="button"
                    class="bt48 wi48 tma_d7hv pd8lr" aria-label="Open Menu">
                    <i class="{{ $iconClass }}">menu</i>Menu
                </button>
            </div>

        </div>
    </div>
</nav>

{{-- JS para el toggle --}}
<script>
    /**
     * Alterna la visibilidad de un elemento por su ID.
     */
    const navbar_main_top_fixed_toggle = id => {
        const el = document.getElementById(id);
        if (el) {
            // Nota: Se recomienda cambiar 'display' a una clase CSS para transiciones.
            // Para ocultar el scroll del body en móvil al abrir el menú, se debería
            // añadir la clase .of4 (overflow: hidden) al body.
            el.style.display = (el.style.display === 'none' ? 'block' : 'none');
        }
    };
</script>