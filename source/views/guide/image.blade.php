@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Imagen (img)')
@section('description', 'Ejemplos de las utilidades de tamaño de imagen (imgN, imgNx, imgNxx) de Mukimono CSS.')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Imágenes (`img`)</h1>
            <p>
                Clases para establecer una altura fija en píxeles (16px a 256px) para elementos de imagen o contenedores de imagen.
            </p>
        </div>
    </header>

    <main class="pd12">
        <h2>Tamaño Fijo Directo (`.imgN`)</h2>
        <p class="mg6">Aplica la clase directamente a la etiqueta `<img>` para establecer la altura fija. La ruta del logotipo utiliza la variable `$NAV_LINKS`.</p>

        @php
            // Asumiendo que $NAV_LINKS está disponible como objeto en Blade
            $logotypePath = $page->baseUrl . ($NAV_LINKS->asset_paths->logotype ?? '/assets/images/logotype.png');
        @endphp

        <div class="mg6x pd6 bd1 tma_d2 fx fx16 fx8">
            <div class="mg6 pd3 bd1 tma_d5">
                <img src="{{ $logotypePath }}" alt="Logotipo Mukimono 32px" class="img32">
                <p class="fs12">.img32 (32px)</p>
            </div>
            <div class="mg6 pd3 bd1 tma_d5">
                <img src="{{ $logotypePath }}" alt="Logotipo Mukimono 48px" class="img48">
                <p class="fs12">.img48 (48px)</p>
            </div>
            <div class="mg6 pd3 bd1 tma_d5">
                <img src="{{ $logotypePath }}" alt="Logotipo Mukimono 64px" class="img64">
                <p class="fs12">.img64 (64px)</p>
            </div>
        </div>

        ---

        <h2>Aplicación a Hijos Directos (`.imgNx`)</h2>
        <p class="mg6">El contenedor establece la altura de su hijo directo `<img>` (`> img`).</p>

        <div class="mg6x pd6 bd1 tma_d3">
            <h3 class="mg6">Contenedor .img96x</h3>
            <div class="img96x mg6 bd1 tma_d5 pd3">
                <img src="{{ $logotypePath }}" alt="Logotipo Mukimono 96px" class="bd1">
            </div>
            <p class="fs12 mg6">La imagen tiene 96px de altura.</p>
        </div>

        ---

        <h2>Ejemplo de Uso de Navegación (`$NAV_LINKS`)</h2>
        <p class="mg6">
            Esta sección ilustra cómo iterar sobre los enlaces públicos definidos en **$NAV_LINKS** (archivo `link.php`).
        </p>
        
        <div class="mg6x pd6 bd1 tma_d4">
            <ul class="mg0 pd0" style="list-style: none;">
                {{-- Acceso a 'link_public' asumiendo que es un array dentro del objeto --}}
                @foreach ($NAV_LINKS->link_public ?? [] as $link)
                    <li class="pd3 bd1b tma_d8 {{ $isActive($page, $link['url']) ? 'bg1' : '' }}">
                        <a href="{{ $link['url'] }}" class="cl1">{{ $link['label'] }}</a>
                        <span class="fs12 cl4">({{ $link['url'] }})</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection