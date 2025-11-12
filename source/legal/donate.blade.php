@extends('_layouts.main')

@php
    // Textos más cortos y directos
    $pageDescription = 'Apoya el desarrollo de Mukimono CSS: Transferencia, Yappy y PayPal.';
    $title = 'Apoya el Proyecto Mukimono';

    // Datos de ejemplo para la donación (Ajustar con datos reales)
    $donationData = [
        'bank' => [
            'name' => 'Transferencia Bancaria',
            'icon' => 'bank',
            'details' => [
                'Banco' => 'Banco General',
                'Titular' => 'Alejandro cedeno',
                'Cuenta' => '04-72-98-350983-3 (regular)',
            ],
            'note' => 'Incluye "Donación Mukimono" en la descripción.',
        ],
        'yappy' => [
            'name' => 'Yappy - Panamá',
            'icon' => 'mobile-alt',
            'details' => [
                'Cuenta Yappy' => 'Alejandro Cedeno',
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
        <div class="pd24 tac">
            <h1>{{ $title }}</h1>
            <div>
                ✨ ¡Cada aporte hace una diferencia significativa!
            </div>
        </div>
    </header>

    <main>
        <div class="fx10 wa320x tma_d4x pd12 pd24x mg12x rd3x">
            <div class="liv tac">
                <div class="pd12tb">
                    <h3>
                        {{ $donationData['paypal']['name'] }}
                    </h3>
                    <p>Para donaciones con tarjeta.</p>
                </div>

                <div>
                    <a href="{{ $donationData['paypal']['link'] }}" target="_blank" class="lb48 w100p tma_d9 tma_d5hv rd3">
                        Donar con PayPal
                    </a>
                    <div>Admin: Alejandro Cedeño</div>
                </div>
            </div>

            <div class="liv tac">
                <div class="pd12tb">
                    <h3>
                        {{ $donationData['bank']['name'] }}
                    </h3>
                    <p>Ideal para montos locales.</p>
                </div>

                <ul>
                    @foreach ($donationData['bank']['details'] as $key => $value)
                        <li><b class="mg5r">{{ $key }}: </b> {{ $value }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="liv tac">
                <div class="pd12tb">
                    <h3>
                        {{ $donationData['yappy']['name'] }}
                    </h3>
                    <p>Forma más rápida en Panamá.</p>
                </div>

                <ul>
                    @foreach ($donationData['yappy']['details'] as $key => $value)
                        <li><b class="mg5r">{{ $key }}: </b> {{ $value }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
@endsection
