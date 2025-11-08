@php
    // Obtenemos los enlaces principales de NAV_LINKS. Se inicializan para evitar posibles warnings.
    $NAV_LINKS = $page->NAV_LINKS ?? [];
    $publicLinks = $NAV_LINKS['link_public'] ?? [];
    $secondaryLinks = $NAV_LINKS['link_secondary'] ?? [];

    // Obtenemos las rutas de assets.
    $assetPaths = $NAV_LINKS['asset_paths'] ?? [];

    // Enlaces públicos primarios (Home e Contact)
    // Se asegura que la estructura básica exista (name, route, icon).
    $homeLink = $publicLinks[0] ?? ['name' => 'Home', 'route' => '/', 'icon' => 'home'];
    $contactLink = $publicLinks[1] ?? ['name' => 'Contact', 'route' => '/contact', 'icon' => 'phone'];

    // Enlace a la Guía (el primer elemento de link_secondary)
    $guideLink = $secondaryLinks[0] ?? ['name' => 'Guide', 'route' => '/guide/home', 'icon' => 'menu_book'];

    // Enlace de Donación (definido manualmente, ruta a Contacto)
    $donateLink = ['name' => 'Donate', 'route' => '/contact', 'icon' => 'redeem'];

    // Estilos de clase (existentes o deducidos)
    $activeClass = 'tma_d3 rd3'; // Clase ejemplo profesional y visible
    $defaultClass = ''; // Clase ejemplo
    $defaultClass2 = 'w100p fx1 fx8'; // Clase ejemplo adicional
    $iconClass = 'material-icons mg6r'; // Clase para el ícono: Material Icons, margen derecho
@endphp

<nav id="navbar_main_top" class="tma_d2 pd8lr pst9" title="Main Navigation Bar">
    <div class="fx13">

        {{-- Área de Logo --}}
        <div>
            <a href="{{ $page->baseUrl }}/" class="lb48" title="Go to Home Page">
                {{-- Se usa $assetPaths para un acceso más limpio --}}
                <img src="{{ $page->baseUrl }}{{ $assetPaths['logotype'] ?? '/assets/images/logotype.png' }}"
                    alt="Mukimono Css Logo" class="img24" title="Mukimono CSS Logotype">
            </a>
        </div>

        {{-- Área de Navegación y Botón (Contenedor que requiere ID para el JS) --}}
        <div class="fx1">

            {{-- GRUPO PRINCIPAL (link_public) --}}
            <div id="navbar_main_top_hor" class="lih">
                <ul class="tma_d7xhv mg0 pd0" title="Main Navigation Links">

                    {{-- Home --}}
                    <li>
                        <a href="{{ $page->baseUrl }}{{ $homeLink['route'] }}"
                            class="lb48 pd8lr {{ $defaultClass }} @if ($page->isActive($homeLink['route'])) {{ $activeClass }} @endif"
                            title="{{ $homeLink['name'] }} Page">
                            <i class="{{ $iconClass }}">{{ $homeLink['icon'] }}</i>
                            Inicio
                        </a>
                    </li>

                    {{-- Contact --}}
                    <li>
                        <a href="{{ $page->baseUrl }}{{ $contactLink['route'] }}"
                            class="lb48 pd8lr {{ $defaultClass }} @if ($page->isActive($contactLink['route'])) {{ $activeClass }} @endif"
                            title="{{ $contactLink['name'] }} Us">
                            <i class="{{ $iconClass }}">{{ $contactLink['icon'] }}</i>
                            Contacto
                        </a>
                    </li>

                    {{-- Guia /guide/home --}}
                    <li>
                        <a href="{{ $page->baseUrl }}{{ $guideLink['route'] }}"
                            class="lb48 pd8lr {{ $defaultClass }} @if ($page->isActive($guideLink['route'])) {{ $activeClass }} @endif"
                            title="Mukimono CSS Documentation Guide">
                            <i class="{{ $iconClass }}">{{ $guideLink['icon'] }}</i>
                            Guía
                        </a>
                    </li>
                </ul>

            </div>

            {{-- GRUPO PRINCIPAL (FIXED - Menú móvil) --}}
            {{-- AÑADIDO: style="display: none;" para que esté oculto por defecto --}}
            <div id="navbar_main_top_fixed" class="liv pst4 h100vh of1 tma_d5 mn280" style="display: none;">

                {{-- BOTÓN DE CERRAR dentro del Fixed Menu --}}
                <button onclick="navbar_main_top_fixed_show('navbar_main_top_fixed')" type="button"
                    class="bt48 wi48 tma_d7hv" id="navbar_main_top_button_close" aria-expanded="false"
                    aria-controls="navbar_main_top_fixed" title="Toggle Navigation Menu">
                    {{-- CORREGIDO: Usar el ícono 'close' para cerrar el menú --}}
                    <i class="{{ $iconClass }}">close</i>
                </button>

                <ul class="tma_d7xhv mg0 pd0" title="Main Navigation Links">

                    {{-- Home --}}
                    <li>
                        <a href="{{ $page->baseUrl }}{{ $homeLink['route'] }}"
                            class="lb48 pd8lr {{ $defaultClass2 }} @if ($page->isActive($homeLink['route'])) {{ $activeClass }} @endif"
                            title="{{ $homeLink['name'] }} Page">
                            <i class="{{ $iconClass }}">{{ $homeLink['icon'] }}</i>
                            Inicio
                        </a>
                    </li>

                    {{-- Contact --}}
                    <li>
                        <a href="{{ $page->baseUrl }}{{ $contactLink['route'] }}"
                            class="lb48 pd8lr {{ $defaultClass2 }} @if ($page->isActive($contactLink['route'])) {{ $activeClass }} @endif"
                            title="{{ $contactLink['name'] }} Us">
                            <i class="{{ $iconClass }}">{{ $contactLink['icon'] }}</i>
                            Contacto
                        </a>
                    </li>

                    {{-- Guia /guide/home --}}
                    <li>
                        <a href="{{ $page->baseUrl }}{{ $guideLink['route'] }}"
                            class="lb48 pd8lr {{ $defaultClass2 }} @if ($page->isActive($guideLink['route'])) {{ $activeClass }} @endif"
                            title="Mukimono CSS Documentation Guide">
                            <i class="{{ $iconClass }}">{{ $guideLink['icon'] }}</i>
                            Guía
                        </a>
                    </li>

                </ul>

            </div>


            {{-- BOTÓN DE ABRIR (permanece visible) --}}
            <div>
                <button onclick="navbar_main_top_fixed_show('navbar_main_top_fixed')" type="button"
                    class="bt48 wi48 tma_d7hv" id="navbar_main_top_button_menu" aria-expanded="false"
                    aria-controls="navbar_main_top_fixed" title="Toggle Navigation Menu">
                    <i class="{{ $iconClass }}">menu</i>
                </button>
            </div>

        </div>
    </div>
</nav>

{{-- JS para el toggle --}}
<script>
    /**
     * Alterna la visibilidad (muestra u oculta) de un elemento HTML por su ID.
     * @param {string} id - El ID del elemento a alternar.
     */
    const navbar_main_top_fixed_show = id => {
        const el = document.getElementById(id);
        if (el) {
            // Alterna entre 'none' y 'block' (o 'flex', si es necesario, 
            // pero 'block' funciona bien para el menú fijo).
            el.style.display = (el.style.display === 'none' ? 'block' : 'none');
        }
    };
</script>
