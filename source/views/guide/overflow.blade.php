@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Overflow (of)')
@section('description', 'Ejemplos de las utilidades de control de desbordamiento (overflow) para los ejes X e Y.')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Desbordamiento (`of`)</h1>
            <p>
                Clases para controlar cómo se comporta el contenido de un elemento cuando excede el espacio de su contenedor.
            </p>
        </div>
    </header>

    <main class="pd12">
        <h2>Control en Ambos Ejes (`.of1` a `.of4`)</h2>
        <p class="mg6">Estas clases (`.of1` - `.of4`) aplican la propiedad `overflow` a los ejes X e Y simultáneamente.</p>

        <div class="mg6x pd6 bd1 tma_d2 fx fx11" style="height: 150px; overflow: hidden; gap: 1rem;">
            
            <div class="pd3 bd1 tma_d5 of1" style="width: 150px; height: 100%;">
                <h3 class="mg3 fs14">.of1 (auto)</h3>
                <p class="mg3 fs12" style="width: 200px; height: 200px;">El scroll aparece solo si es necesario.</p>
            </div>
            
            <div class="pd3 bd1 tma_d5 of2" style="width: 150px; height: 100%;">
                <h3 class="mg3 fs14">.of2 (scroll)</h3>
                <p class="mg3 fs12" style="width: 200px; height: 200px;">Barras de scroll siempre visibles.</p>
            </div>

            <div class="pd3 bd1 tma_d5 of4" style="width: 150px; height: 100%;">
                <h3 class="mg3 fs14">.of4 (hidden)</h3>
                <p class="mg3 fs12" style="width: 200px; height: 200px;">Contenido recortado y oculto.</p>
            </div>
        </div>

        ---

        <h2>Control por Eje (`.of5` a `.of12`)</h2>
        <p class="mg6">Controla el desbordamiento horizontal (`.of5` - `.of8`) o vertical (`.of9` - `.of12`) de forma independiente.</p>

        <div class="mg6x pd6 bd1 tma_d3" style="height: 120px; overflow: hidden;">
            <div class="pd3 bd1 tma_d5 of5" style="width: 300px; height: 100%;">
                <h3 class="mg3 fs14">.of5 (X: auto)</h3>
                <p class="mg3 fs12" style="width: 600px;">Scroll horizontal solo si el contenido es demasiado ancho.</p>
            </div>
            <div class="pd3 bd1 tma_d8 of10 mg6t" style="width: 300px; height: 100px;">
                <h3 class="mg3 fs14">.of10 (Y: scroll)</h3>
                <p class="mg3 fs12">Línea 1. Línea 2. Línea 3. Línea 4. Línea 5. Línea 6. Línea 7. Línea 8. </p>
            </div>
        </div>

        ---

        <h2>Combinaciones Específicas (`.of13` a `.of19`)</h2>
        <p class="mg6">Utiliza estas clases para definir comportamientos distintos en cada eje (ej. scroll horizontal, ocultar vertical).</p>

        <div class="mg6x pd6 bd1 tma_d4" style="height: 120px; overflow: hidden;">
            <h3 class="mg3 fs14">.of13 (X: auto, Y: hidden)</h3>
            <div class="pd3 bd1 tma_d5 of13" style="width: 350px; height: 100%;">
                <p class="mg3 fs12" style="width: 500px;">Scroll horizontal activo, pero el vertical está forzado a ocultarse.</p>
            </div>
            
            <h3 class="mg3 fs14 mg6t">.of17 (X: hidden, Y: auto)</h3>
            <div class="pd3 bd1 tma_d8 of17" style="width: 350px; height: 100px;">
                <p class="mg3 fs12">Línea A.<br>Línea B.<br>Línea C.<br>Línea D.<br>Línea E.</p>
            </div>
        </div>
    </main>
@endsection