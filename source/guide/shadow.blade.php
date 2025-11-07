@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Sombra de Caja (bsd)')
@section('description', 'Clases para aplicar "box-shadow", incluyendo sombras suaves para botones/tarjetas y efectos de borde simulado con color y grosor específicos.')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd12">
            <h1>Sombra de Caja (`bsd`)</h1>
            <p>
                Clases para aplicar el efecto **`box-shadow`**. Se utilizan para dar profundidad (sombras funcionales) o para simular bordes de color y grosor específicos (bordes simulados).
            </p>
        </div>
    </header>

    <main class="pd12">

        <h2>Efectos de Borde de Precisión</h2>
        <p class="mg6">Utiliza `box-shadow` sin desenfoque (`blur: 0`) para crear un borde que no consume espacio, con variantes de grosor (`bsd1`, `bsd3`, `bsd5`) y color (Gris 50, 70, 80).</p>

        <div class="mg6x bd1 tma_d2 pd6 fx fx10">
            {{-- bsd1_70_05 (Borde de 1px) --}}
            <div class="bsd1_70_05 pd6 mg3 bg1" style="width: 150px; height: 50px;">
                <p class="mg0 fs14">.bsd1 (1px, Gris 70)</p>
            </div>
            
            {{-- bsd3r_80_05 (Solo Derecha) --}}
            <div class="bsd3r_80_05 pd6 mg3 bg1" style="width: 150px; height: 50px;">
                <p class="mg0 fs14">.bsd3r (3px, solo derecha)</p>
            </div>

            {{-- bsd5lr_50_05 (Izquierda y Derecha) --}}
            <div class="bsd5lr_50_05 pd6 mg3 bg1" style="width: 150px; height: 50px;">
                <p class="mg0 fs14">.bsd5lr (5px, laterales)</p>
            </div>
        </div>

        ---

        <h2>Sombras Funcionales</h2>

        <h3>1. Botones (`bsd_bt`)</h3>
        <p class="mg6">Sombras sutiles y verticales para dar un efecto de elevación y clic a los botones.</p>

        <div class="mg6x bd1 tma_d3 pd6 fx fx10">
            <div class="bsd_bt_1 pd3 mg3 bg1" style="width: 100px; text-align: center;">.bsd_bt_1</div>
            <div class="bsd_bt_2 pd3 mg3 bg1" style="width: 100px; text-align: center;">.bsd_bt_2</div>
            <div class="bsd_bt_3 pd3 mg3 bg1" style="width: 100px; text-align: center;">.bsd_bt_3</div>
        </div>

        <h3>2. Tarjetas (`bsd_cd`)</h3>
        <p class="mg6">Sombras más amplias y prominentes para elevar visualmente paneles y tarjetas del fondo.</p>

        <div class="mg6x bd1 tma_d4 pd6 fx fx10">
            <div class="bsd_cd1 pd6 mg3 bg1" style="width: 150px; height: 60px;">.bsd_cd1 (Ligera)</div>
            <div class="bsd_cd3 pd6 mg3 bg1" style="width: 150px; height: 60px;">.bsd_cd3 (Media)</div>
            <div class="bsd_cd5 pd6 mg3 bg1" style="width: 150px; height: 60px;">.bsd_cd5 (Profunda)</div>
        </div>
    </main>
@endsection