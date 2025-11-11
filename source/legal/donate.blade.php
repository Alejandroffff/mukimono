@extends('_layouts.main')

@php
    // Textos más cortos y directos
    $pageDescription = 'Apoya el desarrollo de Mukimono CSS: Transferencia, Yappy y PayPal.';
    $title = 'Apoya el Proyecto Mukimono';
    $inspiration = 'Tu apoyo impulsa la innovación y mantiene la excelencia.';
    $intro = 'Tu contribución ayuda a mantener el desarrollo y soporte continuo de Mukimono CSS.';

    // Estilos de diseño (Profesional y Elegante)
    $design = [
        // Clase para el contenedor principal de cada "tarjeta"
        'card' => 'pd12 rd3 mg12', // ifx (box-sizing: border-box;)
        'subtitle_card' => 'fs18 mg8b tac',
        'title_page' => 'fs22 mg8b',
        'list' => 'tma_d7xhv mg8t',

        // Contenedor flex principal:
        // 'fx' (display: flex, flex-wrap: wrap)
        // 'fx13' (justify-content: space-between)
        'flex_container' => 'fx10',
    ];

    // Datos de ejemplo para la donación (Ajustar con datos reales)
    $donationData = [
        'bank' => [
            'name' => 'Transferencia Bancaria',
            'icon' => 'bank',
            'details' => [
                'Banco' => 'Banco General (Ahorro)',
                'Titular' => 'Mukimono css',
                'Cuenta' => '04-72-99-XXXXXX-X',
                'RUC' => 'X-XXX-XXXXXX',
            ],
            'note' => 'Incluye "Donación Mukimono" en la descripción.',
        ],
        'yappy' => [
            'name' => 'Yappy',
            'icon' => 'mobile-alt',
            'details' => [
                'Cuenta Yappy' => 'Alejandro Cedeño',
                'Numero' => '+507 6963-2402',
            ],
            'note' => 'Rápido, sin comisiones en Panamá.',
        ],
        'paypal' => [
            'name' => 'PayPal',
            'icon' => 'paypal',
            'link' => 'https://www.paypal.com/donate/?hosted_button_id=FT8F5C78KV5SQ',
            'note' => 'Seguro para tarjetas de crédito internacionales.',
        ],
    ];
@endphp

@section('title', 'Mukimono - Donar')
@section('description', $pageDescription)

@section('body')
    <header>
        @include('_layouts.navbar_main_top')
        <div class="pd12 tac">
            <h1 class="{{ $design['title_page'] }}">{{ $title }}</h1>
            <p class="fs18 fw7 mg8b">{{ $inspiration }}</p>
            <p class="fs16 mg8b">{{ $intro }}</p>
            <div class=" mg12t">
                ✨ ¡Cada aporte hace una diferencia significativa!
            </div>
        </div>
    </header>

    <main class="pd12">
        <h2 class="{{ $design['title_page'] }} fs22 mg12t tac">Métodos de Contribución</h2>

        {{-- Contenedor Flex para las Tarjetas --}}
        {{-- Usamos fx13 para space-between. Los márgenes en los ítems (mg16) crearán el espaciado. --}}
        <div class="{{ $design['flex_container'] }} mg12t">

            {{-- 1. Tarjeta: Transferencia Bancaria --}}
            {{-- ifx13: flex: 1 1 auto; (permite crecer y encoger) + w32p (aprox 33%) --}}
            <div class="{{ $design['card'] }}">
                <h3 class="{{ $design['subtitle_card'] }}">
                    <i class="fas fa-{{ $donationData['bank']['icon'] }} mg6r"></i> {{ $donationData['bank']['name'] }}
                </h3>

                <p class="fs14 mg8b">Ideal para montos mayores y locales.</p>

                <ul class="{{ $design['list'] }}">
                    @foreach ($donationData['bank']['details'] as $key => $value)
                        <li><strong>{{ $key }}:</strong> {{ $value }}</li>
                    @endforeach
                </ul>

                <p class="fs14 mg12t pd6tb">{{ $donationData['bank']['note'] }}</p>
            </div>

            {{-- 2. Tarjeta: Yappy --}}
            <div class="{{ $design['card'] }}">
                <h3 class="{{ $design['subtitle_card'] }}">
                    <i class="fas fa-{{ $donationData['yappy']['icon'] }} mg6r"></i> {{ $donationData['yappy']['name'] }}
                </h3>

                <p class="fs14 mg8b">Forma más rápida en Panamá.</p>

                <ul class="{{ $design['list'] }}">
                    @foreach ($donationData['yappy']['details'] as $key => $value)
                        <li><strong>{{ $key }}:</strong> {{ $value }}</li>
                    @endforeach
                </ul>

                <p class="fs14 mg12t pd6tb">{{ $donationData['yappy']['note'] }}</p>
            </div>

            {{-- 3. Tarjeta: PayPal --}}
            <div class="{{ $design['card'] }}">
                <h3 class="{{ $design['subtitle_card'] }}">
                    <i class="fab fa-{{ $donationData['paypal']['icon'] }} mg6r"></i>
                    {{ $donationData['paypal']['name'] }}
                </h3>

                <p class="fs14 mg8b">Para donaciones internacionales con tarjeta.</p>
                {{-- Contenedor Flex para centrar el botón --}}
                <div class="fx fx10 mg12t pd8 rd2">
                    {{-- Enlace Estilizado Mukimono --}}
                    <a href="{{ $donationData['paypal']['link'] }}" target="_blank"
                        class="lb48 pd12 tac w100p rd3 tma_d9 tma_d7hv">
                        <i class="fab fa-paypal mg6r"></i> Donar con PayPal
                    </a>
                </div>
                <p class="fs14 mg12t pd6tb">{{ $donationData['paypal']['note'] }}</p>
            </div>

        </div> {{-- Fin del Contenedor Flex --}}

    </main>
@endsection
