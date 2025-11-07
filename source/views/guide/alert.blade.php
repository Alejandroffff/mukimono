@extends('_layouts.main')

@section('title', 'Mukimono - Estilo para Alertas')
@section('description', 'Ejemplos de las utilidades de alertas compactas (al1 a al10) de Mukimono CSS.')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Alertas</h1>
            <p>
                Estilos para mensajes de alerta.
            </p>
        </div>
    </header>

    <main class="pd12">
        <h2>Ejemplos de Alertas</h2>
        <div class="mg6x rd3x">
            <div class="al1">Éxito: Datos Guardados.</div>
            <div class="al2">ℹInfo: Revisar el Estado.</div>
            <div class="al3">Alerta: Sesión Próxima.</div>
            <div class="al4">Error: Conexión Perdida.</div>
            <div class="al5">Neutro: Mensaje General.</div>
            <div class="al6">Proceso: Tarea Ejecutada.</div>
            <div class="al7">Notificación: Nueva Versión.</div>
            <div class="al8">Advertencia: Batería Baja.</div>
            <div class="al9">Destacado: Oferta Única.</div>
            <div class="al10">Finalizado: Tarea Lista.</div>
        </div>
    </main>
@endsection