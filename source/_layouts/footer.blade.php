@php
    $contacts = [
        [
            'role' => 'Administrador',
            'name' => 'Alejandro Cedeño',
            'email' => 'alejandroffff11@gmail.com',
            'phone' => '+507 6963-2402',
            'logo_path' => $assetPaths['admin'] ?? '/assets/images/admin/logo_alejandro.png',
        ],
    ];

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

<footer class="tma_d3">
    <div class="fx10 pd24x mg12x wa320x">

        <div class="tac">
            <div>
                <h3>Comunidad</h3>
                <p>
                    Únete a nuestro desarrollo.
                </p>
            </div>
            <div class="pd12tb">
                <a href="{{ $siteData['github'] }}" target="_blank" title="Repositorio de Mukimono en GitHub"
                    class="lb48 pd12lr tma_d7 tma_d5hv rd3">
                    Ir a Github
                </a>
            </div>
        </div>

        <div>
            <h3 class="tac">Contacto</h3>

            @foreach ($contacts as $contact)
                <div class="pd12tb pd3tbx tac">
                    <div class="fx10">
                        <img src="{{ $page->baseUrl }}{{ $contact['logo_path'] }}" alt="Logo de {{ $contact['name'] }}"
                            class="img48 rd50p">
                    </div>
                    <div>
                        <div>{{ $contact['role'] }}</div>
                        <div>{{ $contact['name'] }}</div>
                    </div>

                    <div>
                        <div>Email</div>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $contact['email'] }}" target="_blank"
                            title="Enviar correo a {{ $contact['name'] }} vía Gmail" class="lb24 w100p tma_d5hv rd3">
                            {{ $contact['email'] }}
                        </a>
                    </div>

                    <div>
                        <div>Celular</div>
                        <a href="https://wa.me/{{ str_replace([' ', '-'], '', $contact['phone']) }}" target="_blank"
                            title="Chatear con {{ $contact['name'] }} vía WhatsApp" class="lb24 w100p tma_d5hv rd3">
                            {{ $contact['phone'] }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="liv">
            <h3 class="tac">Información Legal</h3>
            <ul class="pd12tb">
                <li>
                    <a href="{{ $page->baseUrl }}{{ $privacyLink['route'] }}" class="lb24 w100p tma_d5hv rd3">
                        {{ $privacyLink['name'] }}
                    </a>
                </li>
                <li>
                    <a href="{{ $page->baseUrl }}{{ $termsLink['route'] }}" class="lb24 w100p tma_d5hv rd3">
                        {{ $termsLink['name'] }}
                    </a>
                </li>
                <li>
                    <a href="{{ $page->baseUrl }}{{ $cookiesLink['route'] }}" class="lb24 w100p tma_d5hv rd3">
                        {{ $cookiesLink['name'] }}
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="tac pd24 mg12 mg12tb">
        <p>
            &copy; {{ date('Y') }} **{{ $siteData['copyright_owner'] }}**. Todos los derechos reservados.
        </p>
    </div>
</footer>
