@extends('_layouts.main')

@php
    $page->title = 'Mukimono - Alertas'; // Agregado: título de página (variable page del layout principal)
    $page->description = 'Clases directas para notificaciones compactas.'; // Agregado: descripción de página

    $alerts = [
        ['class' => 'al1', 'name' => 'Success', 'icon_class' => 'check-circle'],
        ['class' => 'al2', 'name' => 'Info', 'icon_class' => 'info-circle'],
        ['class' => 'al3', 'name' => 'Warning', 'icon_class' => 'exclamation-triangle'],
        ['class' => 'al4', 'name' => 'Error', 'icon_class' => 'times-circle'],
        ['class' => 'al5', 'name' => 'Neutral', 'icon_class' => 'tag'],
        ['class' => 'al6', 'name' => 'Process', 'icon_class' => 'circle-notch'],
        ['class' => 'al7', 'name' => 'Notification', 'icon_class' => 'bell'],
        ['class' => 'al8', 'name' => 'Advisory', 'icon_class' => 'exclamation-circle'],
        ['class' => 'al9', 'name' => 'Highlight', 'icon_class' => 'star'],
        ['class' => 'al10', 'name' => 'Completed', 'icon_class' => 'check-double'],
    ];
@endphp

{{-- Directivas de Blade para Título y Descripción --}}
@section('title', $page->title)
@section('description', $page->description)

@section('body')
    <header class="pd24 tac">
        <div>
            <h1>Alertas (al1 - al10)</h1>
            <p>
                Para dar un toque de color a las alertas.
            </p>
        </div>
    </header>

    <main class="pd24 tac">
        <h2>Ejemplos y Uso Directo</h2>

        <div class="fx10 wa96x rd3x mg3x">
            @foreach ($alerts as $alert)
                <div class="mg8b">
                    <h3>{{ $alert['class'] }}</h3>
                    <div class="pd12 {{ $alert['class'] }}">
                        <span>{{ $alert['name'] }}:</span>
                        <span>Este es un ejemplo</span>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection