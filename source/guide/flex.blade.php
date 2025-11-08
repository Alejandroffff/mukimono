@extends('_layouts.main')

@section('title', 'Mukimono - Flexbox (fx, ifx)')
@section('description', 'Documentación completa para las utilidades de Flexbox para Contenedores (fx) e Ítems (ifx).
    Cada clase tiene su propio ejemplo.')

@section('body')
    @php
        // CLASES DE ALTURA VÁLIDAS (Memorizadas):
        $h_256 = 'h256'; // height: 256px
        $h_128 = 'h128'; // height: 128px
        $h_32 = 'h32'; // height: 32px

        // Estilos para los ítems hijos. Importante: NO incluye altura fija, solo ancho.
        $item_style = 'pd3 mg1 rd2 tma_d7 w32x fx10 fx16 tx-sm';
        $items_content =
            '<div class="' .
            $item_style .
            '">1</div><div class="' .
            $item_style .
            '">2</div><div class="' .
            $item_style .
            '">3</div><div class="' .
            $item_style .
            '">4</div><div class="' .
            $item_style .
            '">5</div>';

        // Estilos base para contenedores
        $container_base = 'fx fx43 mg6 bd1 pd6 rd2 tma_d4'; // fx43 para gap: 0.5rem

        // Estilos especiales para ejemplos
        $col_container = $container_base . ' fx3 ' . $h_128; // Column y Altura 128px
        $ai_container = $container_base . ' ' . $h_128; // Altura 64px para Align Items
        $ac_container = $container_base . ' ' . $h_256 . ' w350x fx6'; // Altura 256px y wrap para Align Content
    @endphp

    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd12">
            <h1>Flexbox (`fx` & `ifx`) - Documentación Exhaustiva</h1>
            <p>
                A continuación, se muestra un ejemplo individual para **cada clase** de utilidad Flexbox (`fx` para
                contenedores, `ifx` para ítems).
            </p>
        </div>
    </header>

    <main class="pd12">
        <div class="mg6x rd3x bd1 tma_d1 pd6">

            ## Contenedores Flex (`fx`)
            <p class="mg6">La clase base para todos los ejemplos es **`.fx`**.</p>

            ---

            ### ➡️ Flex Direction
            <div class="{{ $container_base }} fx1">
                <p class="mg3 w100p">.fx1 (row)</p>{!! $items_content !!}
            </div>
            <div class="{{ $container_base }} fx2">
                <p class="mg3 w100p">.fx2 (row-reverse)</p>{!! $items_content !!}
            </div>
            <div class="{{ $col_container }} fx3">
                <p class="mg3 w100p">.fx3 (column) - {{ $h_128 }}</p>{!! $items_content !!}
            </div>
            <div class="{{ $col_container }} fx4">
                <p class="mg3 w100p">.fx4 (column-reverse) - {{ $h_128 }}</p>{!! $items_content !!}
            </div>

            ---

            ### ➿ Flex Wrap
            <div class="{{ $container_base }} fx5 w200x">
                <p class="mg3 w100p">.fx5 (nowrap)</p>{!! $items_content !!}
            </div>
            <div class=" {{ $container_base }} fx6 w200x">
                <p class="mg3 w100p">.fx6 (wrap)</p>{!! $items_content !!}
            </div>
            <div class=" {{ $container_base }} fx7 w200x">
                <p class="mg3 w100p">.fx7 (wrap-reverse)</p>{!! $items_content !!}
            </div>

            ---

            ### ↔️ Justify Content
            <div class="{{ $container_base }} fx8">
                <p class="mg3 w100p">.fx8 (flex-start)</p>{!! $items_content !!}
            </div>
            <div class="{{ $container_base }} fx9">
                <p class="mg3 w100p">.fx9 (flex-end)</p>{!! $items_content !!}
            </div>
            <div class="{{ $container_base }} fx10">
                <p class="mg3 w100p">.fx10 (center)</p>{!! $items_content !!}
            </div>
            <div class="{{ $container_base }} fx11">
                <p class="mg3 w100p">.fx11 (space-around)</p>{!! $items_content !!}
            </div>
            <div class="{{ $container_base }} fx12">
                <p class="mg3 w100p">.fx12 (space-evenly)</p>{!! $items_content !!}
            </div>
            <div class="{{ $container_base }} fx13">
                <p class="mg3 w100p">.fx13 (space-between)</p>{!! $items_content !!}
            </div>

            ---

            ### ↕️ Align Items
            <p class="mg6">Contenedor: {{ $h_128 }}. Los ítems se estiran verticalmente en `fx14`.</p>
            <div class="{{ $ai_container }} fx14">
                <p class="mg3 w100p">.fx14 (stretch)</p>{!! $items_content !!}
            </div>
            <div class="{{ $ai_container }} fx15">
                <p class="mg3 w100p">.fx15 (baseline)</p>{!! $items_content !!}
            </div>
            <div class="{{ $ai_container }} fx16">
                <p class="mg3 w100p">.fx16 (center)</p>{!! $items_content !!}
            </div>
            <div class="{{ $ai_container }} fx17">
                <p class="mg3 w100p">.fx17 (flex-start)</p>{!! $items_content !!}
            </div>
            <div class="{{ $ai_container }} fx18">
                <p class="mg3 w100p">.fx18 (flex-end)</p>{!! $items_content !!}
            </div>

            ---

            ### 🧱 Align Content
            <p class="mg6">Requiere `flex-wrap` (`fx6` está incluido en $ac\_container) y altura fija
                ({{ $h_256 }}).</p>
            <div class="{{ $ac_container }} fx19">
                <p class="mg3 w100p">.fx19 (stretch)</p>{!! $items_content !!}{!! $items_content !!}
            </div>
            <div class="{{ $ac_container }} fx20">
                <p class="mg3 w100p">.fx20 (center)</p>{!! $items_content !!}{!! $items_content !!}
            </div>
            <div class="{{ $ac_container }} fx21">
                <p class="mg3 w100p">.fx21 (flex-start)</p>{!! $items_content !!}{!! $items_content !!}
            </div>
            <div class="{{ $ac_container }} fx22">
                <p class="mg3 w100p">.fx22 (flex-end)</p>{!! $items_content !!}{!! $items_content !!}
            </div>
            <div class="{{ $ac_container }} fx23">
                <p class="mg3 w100p">.fx23 (space-around)</p>{!! $items_content !!}{!! $items_content !!}
            </div>
            <div class="{{ $ac_container }} fx24">
                <p class="mg3 w100p">.fx24 (space-evenly)</p>{!! $items_content !!}{!! $items_content !!}
            </div>
            <div class="{{ $ac_container }} fx25">
                <p class="mg3 w100p">.fx25 (space-between)</p>{!! $items_content !!}{!! $items_content !!}
            </div>

            ---

            ### 📈 Grow / Shrink / Basis (Contenedor)
            <p class="mg6">Estas clases (`fx26` a `fx31`) aplican `display: flex` y la propiedad flex al *propio
                contenedor*, no a los hijos.</p>
            <div class="{{ $container_base }} fx26 w100p">
                <p class="mg3 w100p">.fx26 (flex-grow: 1)</p>Contenedor que crece.
            </div>

            ---

            ### 📐 Align Self (Contenedor)
            <p class="mg6">Estas clases (`fx32` a `fx37`) aplican `display: flex` y `align-self` al *propio contenedor*,
                útil dentro de otro flex padre.</p>
            <div class="{{ $container_base }} fx35 pd3">.fx35 (align-self: center)</div>

            ---

            ### 🔢 Order (Contenedor)
            <p class="mg6">Estas clases (`fx38` a `fx41`) aplican `display: flex` y `order` al *propio contenedor*.</p>
            <div class="{{ $container_base }} fx41 pd3">.fx41 (order: 3)</div>

            ---

            ### 🏞️ Gap
            <div class="{{ $container_base }} fx42">
                <p class="mg3 w100p">.fx42 (gap: 0.25rem)</p>{!! $items_content !!}
            </div>
            <div class="{{ $container_base }} fx43">
                <p class="mg3 w100p">.fx43 (gap: 0.5rem)</p>{!! $items_content !!}
            </div>
            <div class="{{ $container_base }} fx44">
                <p class="mg3 w100p">.fx44 (gap: 1rem)</p>{!! $items_content !!}
            </div>
            <div class="{{ $container_base }} fx45">
                <p class="mg3 w100p">.fx45 (gap: 2rem)</p>{!! $items_content !!}
            </div>

            ---
            ---

            ## Ítems Flex (`ifx`)
            <p class="mg6">Utilidades aplicables a los elementos hijos dentro del contenedor Flex. La clase base para los
                hijos es **`.ifx`**.</p>
            <p class="mg6">El contenedor padre para estos ejemplos utiliza **`.fx`**.</p>

            ### 📏 Grow
            <div class="{{ $container_base }}">
                <div class="ifx ifx1 {{ $item_style }}">ifx1 (Grow 0)</div>
                <div class="ifx ifx2 {{ $item_style }}">ifx2 (Grow 1)</div>
                <div class="ifx ifx3 {{ $item_style }}">ifx3 (Grow 2)</div>
            </div>

            ### ⬇️ Shrink
            <div class="{{ $container_base }} w300x">
                <div class="ifx ifx4 {{ $item_style }}">ifx4 (Shrink 0)</div>
                <div class="ifx ifx5 {{ $item_style }}">ifx5 (Shrink 1)</div>
                <div class="ifx {{ $item_style }}">Default (Shrink 1)</div>
            </div>

            ### 📐 Basis
            <div class="{{ $container_base }}">
                <div class="ifx ifx6 {{ $item_style }}">ifx6 (auto)</div>
                <div class="ifx ifx7 {{ $item_style }}">ifx7 (0)</div>
                <div class="ifx ifx8 {{ $item_style }}">ifx8 (25%)</div>
                <div class="ifx ifx9 {{ $item_style }}">ifx9 (50%)</div>
                <div class="ifx ifx10 {{ $item_style }}">ifx10 (75%)</div>
                <div class="ifx ifx11 {{ $item_style }}">ifx11 (100%)</div>
            </div>

            ### 🔗 Flex (Abreviada)
            <div class="{{ $container_base }}">
                <div class="ifx ifx12 {{ $item_style }}">ifx12 (0 1 auto)</div>
                <div class="ifx ifx13 {{ $item_style }}">ifx13 (1 1 auto)</div>
                <div class="ifx ifx14 {{ $item_style }}">ifx14 (1 0 0)</div>
                <div class="ifx ifx15 {{ $item_style }}">ifx15 (2 1 0)</div>
            </div>

            ### ⬆️ Align Self
            <div class="{{ $ai_container }} fx16">
                <p class="mg3 w100p">Contenedor en fx16 (Align Items Center) - {{ $h_128 }}</p>
                {{-- Los ítems necesitan altura definida para mostrar el efecto de Align Self, excepto stretch --}}
                <div class="ifx ifx16 {{ $item_style }} {{ $h_32 }}">ifx16 (auto)</div>
                <div class="ifx ifx17 {{ $item_style }}">ifx17 (stretch)</div>
                <div class="ifx ifx18 {{ $item_style }} {{ $h_32 }}">ifx18 (flex-start)</div>
                <div class="ifx ifx19 {{ $item_style }} {{ $h_32 }}">ifx19 (flex-end)</div>
                <div class="ifx ifx20 {{ $item_style }} {{ $h_32 }}">ifx20 (center)</div>
                <div class="ifx ifx21 {{ $item_style }} {{ $h_32 }}">ifx21 (baseline)</div>
            </div>

            ### #️⃣ Order
            <div class="{{ $container_base }}">
                <div class="ifx ifx22 {{ $item_style }}">ifx22 (Order 0)</div>
                <div class="ifx ifx23 {{ $item_style }}">ifx23 (Order 1)</div>
                <div class="ifx ifx24 {{ $item_style }}">ifx24 (Order 2)</div>
                <div class="ifx ifx25 {{ $item_style }}">ifx25 (Order 3)</div>
                <div class="ifx ifx26 {{ $item_style }}">ifx26 (Order 4)</div>
                <div class="ifx ifx27 {{ $item_style }}">ifx27 (Order 5)</div>
            </div>

        </div>
    </main>
@endsection
