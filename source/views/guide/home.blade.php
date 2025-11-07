@extends('_layouts.main')

@section('title', 'Guía de Inicio Mukimono')
@section('description', 'Bienvenido a la guía de Mukimono CSS.')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Bienvenido a la Guía de Mukimono CSS</h1>
            <p>
                Aquí encontrarás toda la documentación para las utilidades de Mukimono CSS.
                Usa el menú lateral para navegar entre las diferentes secciones.
            </p>
            <p>
                Mukimono CSS es un framework ligero y modular diseñado para
                ayudarte a construir interfaces de usuario rápidas y consistentes.
            </p>
        </div>

    </header>


    <main class="pd12">
        <h2>¿Por dónde empezar?</h2>
        <ul>
            <li>Explora la sección de
                <a href="{{ route('guide.alert') }}">Alerts</a>
                para entender cómo
                manejar notificaciones.
            </li>
            <li>Descubre cómo animar elementos en la sección de
                <a href="{{ route('guide.animation') }}">Animation</a>.
            </li>
            <li>Revisa las utilidades básicas de
                <a href="{{ route('guide.color') }}">Color</a> y
                <a href="{{ route('guide.font') }}">Font</a>.
            </li>
        </ul>
    </main>
@endsection
