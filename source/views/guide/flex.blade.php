@extends('_layouts.main')

@section('title', 'Mukimono - Flexbox (fx, ifx)')
@section('description', 'Documentación completa para las utilidades de Flexbox para Contenedores (fx) e Ítems (ifx).')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Flexbox (`fx` & `ifx`)</h1>
            <p>
                Mukimono ofrece control total sobre Flexbox, dividiendo las utilidades en clases para el **Contenedor** (`fx`) y para los **Ítems** (`ifx`). La clase base para contenedores es **`.fx`**.
            </p>
        </div>
    </header>

    <main class="pd12">

        <h2>Contenedores Flex (`fx`)</h2>
        <p class="mg6">Utilidades aplicables al contenedor principal (padre).</p>

        <div class="mg6x pd6 bd1 tma_d1">
            <h3 class="mg6">Dirección, Wrap y Justificación</h3>
            
            {{-- fx3: Direction Column | fx5: Wrap No-Wrap | fx10: Justify Center --}}
            <div class="fx fx3 fx5 fx10 mg6 pd6 bd1 tma_d4" style="height: 120px; width: 300px;">
                <div class="pd3 mg3 bd1 tma_d5">1</div>
                <div class="pd3 mg3 bd1 tma_d5">2</div>
                <div class="pd3 mg3 bd1 tma_d5">3</div>
            </div>

            <h3 class="mg6">Alineación de Ítems (`fx17`) y Contenido (`fx21`)</h3>
            
            {{-- fx17: Align Items Flex-Start | fx21: Align Content Flex-Start --}}
            <div class="fx fx17 fx21 mg6 pd6 bd1 tma_d4" style="height: 120px;">
                <div class="pd3 mg3 bd1 tma_d5">Item 1</div>
                <div class="pd3 mg3 bd1 tma_d5">Item 2</div>
            </div>

            <h3 class="mg6">Selectores de Hijos y Gap</h3>
            <p class="mg6">fx13x (Justify Space-Between en hijos) y fx45 (Gap 2rem).</p>
            <div class="fx fx45 mg6 pd6 bd1 tma_d3 fx13x">
                <div class="pd3 bd1 tma_d5">Hijo 1</div>
                <div class="pd3 bd1 tma_d5">Hijo 2</div>
                <div class="pd3 bd1 tma_d5">Hijo 3</div>
            </div>
        </div>

        ---

        <h2>Ítems Flex (`ifx`)</h2>
        <p class="mg6">Utilidades aplicables a los elementos hijos dentro del contenedor Flex. Se utiliza la clase base **`.ifx`**.</p>
        
        <div class="mg6x pd6 bd1 tma_d2" style="height: 150px;">
            <h3 class="mg6">Grow, Shrink y Basis</h3>
            <div class="fx mg6 pd6 bd1 tma_d4">
                {{-- ifx2: Grow 1 | ifx4: Shrink 0 | ifx8: Basis 25% --}}
                <div class="ifx ifx2 ifx4 ifx8 pd3 mg3 bd1 tma_d5">1/4 + Grow</div>
                
                {{-- ifx3: Grow 2 | ifx5: Shrink 1 | ifx9: Basis 50% --}}
                <div class="ifx ifx3 ifx5 ifx9 pd3 mg3 bd1 tma_d8">1/2 + Grow 2</div>
                
                {{-- ifx13: Flex: 1 1 auto (Flex Abbreviated) --}}
                <div class="ifx ifx13 pd3 mg3 bd1 tma_d9">Flex: 1 1 auto</div>
            </div>

            <h3 class="mg6">Align Self y Order</h3>
            <div class="fx fx10 fx16 mg6 pd6 bd1 tma_d4" style="height: 100px;">
                <div class="ifx ifx24 pd3 mg3 bd1 tma_d5">Orden 2</div>
                <div class="ifx ifx23 ifx19 pd3 mg3 bd1 tma_d8">Orden 1 (End)</div>
                <div class="ifx ifx22 ifx18 pd3 mg3 bd1 tma_d5">Orden 0 (Start)</div>
            </div>
        </div>

    </main>
@endsection