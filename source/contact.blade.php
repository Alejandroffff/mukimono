@extends('_layouts.main')

@php
    $page->title = 'Contacto - MUKIMONO CSS';
    $page->description = 'Canales de soporte directo.';

    $design = [
        'main_content' => '',
        'title' => 'fs32 pd12tb', // Título con negrita fw7 reintroducido
        'subtitle' => 'fs22 fw6 mg12t tac',
        'paragraph' => 'fs14 mg8b',
        'card' => 'pd12 rd3x liv',
        'link_icon' => 'lb40',
    ];

    // Datos Dinámicos de Contacto
    $contacts = [
        [
            'title' => 'Soporte Directo',
            'description' => 'Para consultas técnicas',
            'admin_name' => 'Alejandro F.C.S.',
            'email' => 'alejandroffff11@gmail.com',
            'phone' => '+507 6963-2402',
            'email_link' => 'https://mail.google.com/mail/?view=cm&fs=1&to=alejandroffff11@gmail.com',
            'whatsapp_link' => 'https://wa.me/50769632402',
        ],
    ];

@endphp

@section('body')
    <main class="{{ $design['main_content'] }}">
        {{-- Encabezado --}}
        <header>
            @include('_layouts.navbar_main_top')
            <div class="{{ $design['main_content'] }} tac">
                <h1 class="{{ $design['title'] }}">Contacto y Soporte</h1>
                <p class="{{ $design['paragraph'] }} fs18">
                    Conéctate con el equipo.
                </p>
            </div>
        </header>

        {{-- Canales de Comunicación Directa --}}
        <section>
            <div class="fx10 wa256x">
                @foreach ($contacts as $contact)
                    {{-- Tarjeta de Contacto --}}
                    <div class="{{ $design['card'] }}">
                        <h3 class="{{ $design['subtitle'] }} tdn">{{ $contact['title'] }}</h3>
                        <p class="{{ $design['paragraph'] }} tac fs12">{{ $contact['description'] }}</p>

                        <div class="rd3 tma_d3 pd12">
                            <p class="{{ $design['paragraph'] }} fs16 fw6">Admin: {{ $contact['admin_name'] }}</p>
                            <div class="mg8t">
                                <span class="fs12 fw7 tdn">Correo:</span>
                                <a href="{{ $contact['email_link'] }}" target="_blank" title="Enviar correo vía Gmail"
                                    class="{{ $design['link_icon'] }}">
                                    <i class="fab fa-google mg6r"></i> {{ $contact['email'] }}
                                </a>
                            </div>
                            <div class="mg8t">
                                <span class="fs12 fw7 tdn">Móvil:</span>
                                <a href="{{ $contact['whatsapp_link'] }}" target="_blank" title="Chatear vía WhatsApp"
                                    class="{{ $design['link_icon'] }}">
                                    <i class="fab fa-whatsapp mg6r"></i> {{ $contact['phone'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </main>
@endsection