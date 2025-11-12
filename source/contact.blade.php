@extends('_layouts.main')

@php
    $page->title = 'Contacto - MUKIMONO CSS';
    $page->description = 'Canales de soporte directo.';

    // Datos Dinámicos de Contacto
    $contacts = [
        [
            'title' => 'Administrador',
            'admin_name' => 'Alejandro Cedeño',
            'email' => 'alejandroffff11@gmail.com',
            'phone' => '+507 6963-2402',
            'email_link' => 'https://mail.google.com/mail/?view=cm&fs=1&to=alejandroffff11@gmail.com',
            'whatsapp_link' => 'https://wa.me/50769632402',
        ],
    ];

@endphp

@section('body')
    <main class="">
        <header>
            @include('_layouts.navbar_main_top')
            <div class="pd24 tac">
                <h1>Contacto y Soporte</h1>
                <p>
                    Conéctate con el equipo.
                </p>
            </div>
        </header>

        <section class="fx10 pg320x tma_d4x rd3x pd24x mg12x">
                @foreach ($contacts as $contact)
                    <div class="tac">
                        <h3 class="pd12tb">{{ $contact['title'] }}</h3>
                        <div>
                            <div>
                                <span> {{ $contact['admin_name'] }}</span>
                            </div>

                            <div>
                                <span>Correo</span>
                                <a href="{{ $contact['email_link'] }}" target="_blank" title="Enviar correo vía Gmail"
                                    class="lb24 w100p tma_d5hv rd3">
                                    {{ $contact['email'] }}
                                </a>
                            </div>
                            <div>
                                <span>Móvil</span>
                                <a href="{{ $contact['whatsapp_link'] }}" target="_blank" title="Chatear vía WhatsApp"
                                    class="lb24 w100p tma_d5hv rd3">
                                    {{ $contact['phone'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
        </section>

    </main>
@endsection
