@extends('_layouts.main')

@section('title', 'Mukimono - Alineación Vertical (va)')
@section('description', 'Clases para controlar la propiedad "vertical-align" de elementos en línea (inline y
    inline-block), crucial para texto y componentes inline.')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Alineación Vertical (`va`)</h1>
            <p>
                Clases para aplicar **`vertical-align`** a elementos que se muestran en línea (`inline` o `inline-block`).
                Esto controla su posición vertical respecto al contenido circundante.
            </p>
        </div>
    </header>

    <main class="pd12">

        <h2>Valores de Alineación</h2>
        <p class="mg6">Se aplican a elementos hijos para alinearlos dentro de la línea de texto de su padre.</p>

        <div class="mg6x bd1 tma_d2 pd6" style="height: 100px; line-height: 100px;">
            <p class="fs14 swib pd3 mg0">Línea de Texto </p>

            <div class="vat swib pd3 bd1 tma_d5" style="height: 40px; line-height: normal;">
                **`.vat`** (Top)
            </div>
            <div class="vamd swib pd3 bd1 tma_d8" style="height: 40px; line-height: normal;">
                **`.vamd`** (Middle)
            </div>
            <div class="vabt swib pd3 bd1 tma_d5" style="height: 40px; line-height: normal;">
                **`.vabt`** (Bottom)
            </div>
            <div class="vabs swib pd3 bd1 tma_d8" style="height: 40px; line-height: normal;">
                **`.vabs`** (Baseline)
            </div>
        </div>

        ---

        <h2>Alineación Relacionada con Texto</h2>
        <p class="mg6">Alinean el elemento con la parte superior/inferior del texto actual o como subíndice/superíndice.
        </p>

        <div class="mg6x bd1 tma_d3 pd6" style="height: 80px; line-height: 40px;">
            <p class="fs14 swib mg0">Texto con <span class="vatt swib pd1 bd1 tma_d8">**.vatt** (Text-Top)</span>, <span
                    class="vasub swib pd1 bd1 tma_d5">**.vasub** (Sub)</span>, y <span
                    class="vasup swib pd1 bd1 tma_d8">**.vasup** (Super)</span>.</p>
        </div>

    </main>
@endsection
