@extends('_layouts.main')
@section('title', 'Mukimono - Utilidades de Animación')
@section('description', 'Ejemplos de las utilidades de animación Mukimono CSS (Rotación, Fade y Escala).')

@section('body')
    <style>
        .mk-1 {
            width: 24px;
            height: 24px;
            background-color: red;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            margin-left: 8px;
            vertical-align: middle;
            cursor: pointer;
        }
    </style>
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd24 tac">
            <h1>Animaciones</h1>
            <p>
                Clases Rotación, Desteñir y Escala con 0.5s, 1s, 1.5s.
            </p>
        </div>
    </header>

    <main class="pd24x liv fx10">
        <div>
            <h3>1. Rotaciones Continuas (ani_r)</h3>
            <ul class="rd3x tma_d4x pd6x mg1x">
                <li>ani_rtr05 <div class="mk-1 ani_rtr05">A</div>
                </li>
                <li>ani_rtr1 <div class="mk-1 ani_rtr1">A</div>
                </li>
                <li>ani_rtr15 <div class="mk-1 ani_rtr15">A</div>
                </li>
                <li>ani_rtl05 <div class="mk-1 ani_rtl05">A</div>
                </li>
                <li>ani_rtl1 <div class="mk-1 ani_rtl1">A</div>
                </li>
                <li>ani_rtl15 <div class="mk-1 ani_rtl15">A</div>
                </li>
            </ul>
        </div>

        <div>
            <h3>2. Efectos Desteñir (ani_fd)</h3>
            <ul class="rd3x tma_d4x pd6x mg1x">
                <li>ani_fdi05 <div class="mk-1 ani_fdi05">A</div>
                </li>
                <li>ani_fdi1 <div class="mk-1 ani_fdi1">A</div>
                </li>
                <li>ani_fdi15 <div class="mk-1 ani_fdi15">A</div>
                </li>
                <li>ani_fdo05 <div class="mk-1 ani_fdo05">A</div>
                </li>
                <li>ani_fdo1 <div class="mk-1 ani_fdo1">A</div>
                </li>
                <li>ani_fdo15 <div class="mk-1 ani_fdo15">A</div>
                </li>
            </ul>
        </div>

        <div class="w100p">
            <h3 class="tac">3. Escalas al Pasar el Ratón arriba</h3>
            <div class="fx10 wa320x mg3x">
                <div>
                    <h4>Agrandar (ani_sco)</h4>
                    <div>
                        <ul class="rd3x tma_d4x pd6x mg1x liv">
                            <li>ani_sco_sm05 <div class="mk-1 ani_sco_sm05">A</div>
                            </li>
                            <li>ani_sco_sm1 <div class="mk-1 ani_sco_sm1">A</div>
                            </li>
                            <li>ani_sco_sm15 <div class="mk-1 ani_sco_sm15">A</div>
                            </li>
                            <li>ani_sco_md05 <div class="mk-1 ani_sco_md05">A</div>
                            </li>
                            <li>ani_sco_md1 <div class="mk-1 ani_sco_md1">A</div>
                            </li>
                            <li>ani_sco_md15 <div class="mk-1 ani_sco_md15">A</div>
                            </li>
                            <li>ani_sco_lg05 <div class="mk-1 ani_sco_lg05">A</div>
                            </li>
                            <li>ani_sco_lg1 <div class="mk-1 ani_sco_lg1">A</div>
                            </li>
                            <li>ani_sco_lg15 <div class="mk-1 ani_sco_lg15">A</div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <h4>Reducir (ani_sci)</h4>
                    <div>
                        <ul class="rd3x tma_d4x pd6x mg1x liv">
                            <li>ani_sci_sm05 <div class="mk-1 ani_sci_sm05">A</div>
                            </li>
                            <li>ani_sci_sm1 <div class="mk-1 ani_sci_sm1">A</div>
                            </li>
                            <li>ani_sci_sm15 <div class="mk-1 ani_sci_sm15">A</div>
                            </li>
                            <li>ani_sci_md05 <div class="mk-1 ani_sci_md05">A</div>
                            </li>
                            <li>ani_sci_md1 <div class="mk-1 ani_sci_md1">A</div>
                            </li>
                            <li>ani_sci_md15 <div class="mk-1 ani_sci_md15">A</div>
                            </li>
                            <li>ani_sci_lg05 <div class="mk-1 ani_sci_lg05">A</div>
                            </li>
                            <li>ani_sci_lg1 <div class="mk-1 ani_sci_lg1">A</div>
                            </li>
                            <li>ani_sci_lg15 <div class="mk-1 ani_sci_lg15">A</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
