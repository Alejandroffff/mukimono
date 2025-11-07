@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Animación')
@section('description', 'Ejemplos de las utilidades de animación Mukimono CSS (Rotación, Fade y Escala).')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd12">
            <h1>Animaciones (`ani_`)</h1>
            <p>
                Clases predefinidas Rotación, Desteñir y Escala con tiempos estandarizados (0.5s, 1s, 1.5s).
            </p>
        </div>
    </header>

    <main class="pd12">
        <h2>Rotaciones Automáticas</h2>
        <div class="mg6x">
            <h3>Rotación Derecha (Clockwise)</h3>
            <div class="pd6x rd3x  tma_d3x">
                <div class="ani_rtr05">0.5s</div>
                <div class="ani_rtr1">1s</div>
                <div class="ani_rtr15">1.5s</div>
            </div>

            <h3 class="mg6tb">Rotación Izquierda (Counter-Clockwise)</h3>
            <div class="pd6x rd3x  tma_d3x">
                <div class="ani_rtl05">0.5s</div>
                <div class="ani_rtl1">1s</div>
                <div class="ani_rtl15">1.5s</div>
            </div>
        </div>

        ---

        <h2>Fade Automáticos</h2>
        <div class="mg6x">
            <h3>Fade In (Entrada)</h3>
            <div class="pd6x rd3x  tma_d3x">
                <div class="ani_fdi05">Aparece (0.5s)</div>
                <div class="ani_fdi1">Aparece (1s)</div>
                <div class="ani_fdi15">Aparece (1.5s)</div>
            </div>

            <h3 class="mg6tb">Fade Out (Salida) ⬅️ NUEVO</h3>
            <div class="pd6x rd3x  tma_d3x">
                <div class="ani_fdo05">Desaparece (0.5s)</div>
                <div class="ani_fdo1">Desaparece (1s)</div>
                <div class="ani_fdo15">Desaparece (1.5s)</div>
            </div>
        </div>

        ---

        <h2>Escalas en Hover</h2>
        <p>Pasa el ratón sobre los elementos para ver el efecto de transición.</p>

        <div class="mg6x">
            <h3>Agrandar (+10% - Mediano)</h3>
            <div class="pd6x rd3x  tma_d3x">
                <div class="ani_sco_md05">Agrandar (0.5s)</div>
                <div class="ani_sco_md1">Agrandar (1s)</div>
                <div class="ani_sco_md15">Agrandar (1.5s)</div>
            </div>
        </div>

        <div class="mg6x mg6tb">
            <h3>Agrandar (+15% - Grande)</h3>
            <div class="pd6x rd3x  tma_d3x">
                <div class="ani_sco_lg05">Máximo (0.5s)</div>
                <div class="ani_sco_lg1">Máximo (1s)</div>
                <div class="ani_sco_lg15">Máximo (1.5s)</div>
            </div>
        </div>

        <div class="mg6x mg6tb">
            <h3>Reducir (-5% - Pequeño)</h3>
            <div class="pd6x rd3x  tma_d3x">
                <div class="ani_sci_sm05">Reducir (0.5s)</div>
                <div class="ani_sci_sm1">Reducir (1s)</div>
                <div class="ani_sci_sm15">Reducir (1.5s)</div>
            </div>
        </div>

        <div class="mg6x mg6tb">
            <h3>Reducir (-15% - Grande)</h3>
            <div class="pd6x rd3x  tma_d3x">
                <div class="ani_sci_lg05">Mínimo (0.5s)</div>
                <div class="ani_sci_lg1">Mínimo (1s)</div>
                <div class="ani_sci_lg15">Mínimo (1.5s)</div>
            </div>
        </div>
    </main>
@endsection
