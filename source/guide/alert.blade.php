@extends('_layouts.main')

@php
    $page->title = 'Mukimono - Alertas';
    $page->description = 'Clases directas para notificaciones compactas.';

    $alerts = [
        ['class' => 'al1', 'name' => 'Success'],
        ['class' => 'al2', 'name' => 'Info'],
        ['class' => 'al3', 'name' => 'Warning'],
        ['class' => 'al4', 'name' => 'Error'],
        ['class' => 'al5', 'name' => 'Neutral'],
        ['class' => 'al6', 'name' => 'Process'],
        ['class' => 'al7', 'name' => 'Notification'],
        ['class' => 'al8', 'name' => 'Advisory'],
        ['class' => 'al9', 'name' => 'Highlight'],
        ['class' => 'al10', 'name' => 'Completed'],
    ];
@endphp

@section('title', $page->title)
@section('description', $page->description)

@section('body')

    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd24 tac">
            <h1>Alertas</h1>
            <p>
                Para dar un toque de color a las alertas.
            </p>
        </div>
    </header>

    <main class="pd24 tac">
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