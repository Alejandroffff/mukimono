@extends('_layouts.main')

@section('title', 'Mukimono - Alineación de Texto (ta, tva)')
@section('description', 'Clases para controlar la alineación horizontal de texto y la alineación vertical de elementos inline/inline-block.')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd12">
            <h1>Alineación de Texto (`ta`) y Vertical (`tva`)</h1>
            <p>
                Clases para el control tipográfico. Permiten definir la alineación horizontal del texto y la posición vertical de los elementos en línea.
            </p>
        </div>
    </header>

    <main class="pd12">

        <h2>Alineación Horizontal de Texto (`ta`)</h2>
        <p class="mg6">Se aplica al contenedor padre y afecta a todos sus contenidos de texto e *inline*.</p>

        <div class="mg6x bd1 tma_d2 pd6">
            <div class="tal pd3 bd1 tma_d5 mg3">
                <p class="mg0 fs14">**`.tal`**: Texto a la izquierda (`left`).</p>
            </div>
            <div class="tar pd3 bd1 tma_d5 mg3">
                <p class="mg0 fs14">**`.tar`**: Texto a la derecha (`right`).</p>
            </div>
            <div class="tac pd3 bd1 tma_d5 mg3">
                <p class="mg0 fs14">**`.tac`**: Texto centrado (`center`).</p>
            </div>
            <div class="taj pd3 bd1 tma_d5 mg3">
                <p class="mg0 fs14">**`.taj`**: Texto justificado (`justify`).</p>
            </div>
        </div>

        ---

        <h2>Alineación Vertical (`tva`)</h2>
        <p class="mg6">Controla la alineación vertical de elementos en línea (`inline` o `inline-block`) dentro de una misma línea.</p>
        
        <div class="mg6x bd1 tma_d3 pd6" style="height: 100px; line-height: 100px;">
            <p class="fs14 swib pd3 mg0">Contenido base: </p>
            <div class="tvat swib pd3 bd1 tma_d5" style="height: 40px; line-height: normal;">
                **`.tvat`** (Top)
            </div>
            <div class="tvam swib pd3 bd1 tma_d8" style="height: 40px; line-height: normal;">
                **`.tvam`** (Middle)
            </div>
            <div class="tvab swib pd3 bd1 tma_d5" style="height: 40px; line-height: normal;">
                **`.tvab`** (Bottom)
            </div>
        </div>
    </main>
@endsection