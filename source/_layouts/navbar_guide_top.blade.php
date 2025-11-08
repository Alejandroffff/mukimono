<nav class="tma_d2 pd8lr fx13 ">
    <div>
        {{-- CORRECCIÓN 1: Usar $page->baseUrl y la ruta del logotype desde asset_paths --}}
        <a href="{{ $page->baseUrl }}/" class="lb48">
            {{-- 🔹 Logo + Texto --}}
            <img src="{{ $page->baseUrl }}{{ $page->NAV_LINKS['asset_paths']['logotype'] ?? '/assets/images/logotype.png' }}"
                alt="Mukimono Css Logo" class="img24">
        </a>
    </div>

    <div>

        {{-- ****************************************************** --}}
        {{-- GRUPO PRINCIPAL (link_public) - Sin Loop, solo Home y Contact --}}
        {{-- ****************************************************** --}}
        <div class="lih">
            <ul id="navbar_main_fixed_up" class="tma_d7xhv">

                @php
                    // Obtenemos los enlaces públicos para acceso directo
                    $publicLinks = $page->NAV_LINKS['link_public'] ?? [];
                    $homeLink = $publicLinks[0] ?? ['name' => 'Home', 'route' => '/'];
                    $contactLink = $publicLinks[1] ?? ['name' => 'Contact', 'route' => '/contact'];
                @endphp

                {{-- Home --}}
                <li>
                    <a {{-- CORRECCIÓN 2: Ruta dinámica con $page->baseUrl y enlace desde $homeLink --}} href="{{ $page->baseUrl }}{{ $homeLink['route'] }}"
                        class="lb48 @if ($page->isActive($homeLink['route']))  @endif">
                        {{ $homeLink['name'] }}
                    </a>
                </li>

                {{-- Contact --}}
                <li>
                    <a {{-- CORRECCIÓN 2: Ruta dinámica con $page->baseUrl y enlace desde $contactLink --}} href="{{ $page->baseUrl }}{{ $contactLink['route'] }}"
                        class=" lb48 @if ($page->isActive($contactLink['route']))  @endif">
                        {{ $contactLink['name'] }}
                    </a>
                </li>
            </ul>
        </div>


        <button type="button" class="bt48 wi48 tma_d7hv">
            ☰
        </button>
    </div>
</nav>
