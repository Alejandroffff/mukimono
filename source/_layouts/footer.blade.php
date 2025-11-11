@php
    // Estilos de diseño (manteniendo la estética profesional)
    $design = [
        // La clase 'box' (Columna) será fundamental para el layout.
        'box' => 'pd12 ifx13 mg12', // Define las 3 columnas principales
        'title' => 'fs22 tac pd12tb',
        'paragraph' => 'fs14',
        // Estilos para la tarjeta de administrador/contacto. Debe ser liviana y flexible.
        'contact_card' => 'pd12 rd3 liv mg8b fx fxfc', // Flexbox (Columna) para contenido vertical
        // Aseguramos que usa la ruta centralizada si existe
        'default_logo_path' => $assetPaths['default_admin'] ?? '/assets/images/admin/logo_default.png',
    ];

    // Datos Centralizados (Ahora un Array para múltiples contactos)
    $contacts = [
        // Contacto Principal (Administrador)
        [
            'role' => 'Administrador',
            'name' => 'Alejandro F.C.S.',
            'email' => 'alejandroffff11@gmail.is',
            'phone' => '+507 6963-2402',
            'logo_path' => $assetPaths['admin'] ?? '/assets/images/admin/logo_alejandro.png',
        ],
    ];

    // Otros datos centralizados (fuera del array de contactos)
    $siteData = [
        'github' => 'https://github.com/Alejandroffff/Mukimono-css',
        'copyright_owner' => 'MUKIMONO',
    ];

    $NAV_LINKS = $page->NAV_LINKS ?? [];
    $assetPaths = $NAV_LINKS['asset_paths'] ?? [];
    $footerLinks = $NAV_LINKS['link_footer'] ?? [];
    $privacyLink = $footerLinks[0] ?? ['name' => 'Política de Privacidad', 'route' => '/legal/privacy'];
    $termsLink = $footerLinks[1] ?? ['name' => 'Términos de Servicio', 'route' => '/legal/terms'];
    $cookiesLink = $footerLinks[2] ?? ['name' => 'Política de Cookies', 'route' => '/legal/cookies'];
@endphp

<footer class="pd12tb tma_d3">
    {{-- Contenedor principal Flex (3 columnas): fx (display: flex), fx10 (justify-content: center) --}}
    <div class="fx10 mg12t wa256x">

        {{-- 1. Redes Sociales (Columna 1) --}}
        <div class="{{ $design['box'] }}">
            <div class="tac">
                <h3 class="{{ $design['title'] }} fs28">Comunidad</h3>
                <p class="{{ $design['paragraph'] }} mg12b">
                    Únete a nuestro desarrollo.
                </p>
            </div>
            {{-- Enlace a Github prominente --}}
            <div class="mg8t fx10">
                <a href="{{ $siteData['github'] }}" target="_blank" title="Repositorio de Mukimono en GitHub"
                    class="bt40 tma_d7hv tma_d5 rd3 lb48 pd8lr">
                    <i class="fab fa-github mg6r fs18"></i> Ir a Github
                </a>
            </div>
        </div>

        {{-- 2. Contacto y Soporte (Columna 2) - Contenedor de Tarjetas Dinámicas --}}
        <div class="{{ $design['box'] }} fx fxfc">
            <h3 class="{{ $design['title'] }} tac">Contacto y Soporte</h3>

            {{-- Generación Dinámica de Tarjetas de Contacto --}}
            @foreach ($contacts as $contact)
                <div class="{{ $design['contact_card'] }}">

                    {{-- Imagen y Nombre --}}
                    <div class="fx fxac w100p mg4b">
                        <div class="fx fx10">
                            <img src="{{ $page->baseUrl }}{{ $contact['logo_path'] }}"
                                alt="Logo de {{ $contact['name'] }}" class="img40 rd50p mg8r img48">
                        </div>
                        <div class="fs16">{{ $contact['role'] }}: **{{ $contact['name'] }}**</div>
                    </div>

                    {{-- Contactos --}}
                    <div class="w100p mg4t">
                        <div class="mg6b">
                            <div class="{{ $design['paragraph'] }} fs12 mg2b">Email:</div>
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $contact['email'] }}"
                                target="_blank" title="Enviar correo a {{ $contact['name'] }} vía Gmail"
                                class="tma_d7h lb16 fs14">
                                <i class="fas fa-envelope mg6r"></i> {{ $contact['email'] }}
                            </a>
                        </div>
                        <div class="mg6b">
                            <div class="{{ $design['paragraph'] }} fs12 mg2b">Celular:</div>
                            <a href="https://wa.me/{{ str_replace([' ', '-'], '', $contact['phone']) }}"
                                target="_blank" title="Chatear con {{ $contact['name'] }} vía WhatsApp"
                                class="tma_d7h lb16 fs14 fx fxac">
                                <i class="fab fa-whatsapp mg6r"></i> {{ $contact['phone'] }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- 3. Legal y Políticas (Columna 3) --}}
        <div class="{{ $design['box'] }} liv">
            <h3 class="{{ $design['title'] }} tac">Información Legal</h3>
            <ul class="tma_d7xhv">
                <li>
                    <a href="{{ $page->baseUrl }}{{ $privacyLink['route'] }}" class="lb40 tma_d7h lb-force w100p">
                        {{ $privacyLink['name'] }}
                    </a>
                </li>
                <li>
                    <a href="{{ $page->baseUrl }}{{ $termsLink['route'] }}" class="lb40 tma_d7h lb-force w100p">
                        {{ $termsLink['name'] }}
                    </a>
                </li>
                <li>
                    <a href="{{ $page->baseUrl }}{{ $cookiesLink['route'] }}" class="lb40 tma_d7h lb-force w100p">
                        {{ $cookiesLink['name'] }}
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- Sección de Copyright --}}
    <div class="pd12 tac mg12t">
        <hr class="mg12">
        <p class="{{ $design['paragraph'] }}">
            &copy; {{ date('Y') }} **{{ $siteData['copyright_owner'] }}**. Todos los derechos reservados.
        </p>
    </div>
</footer>
