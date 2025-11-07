@extends('_layouts.main')

@section('title', 'Mukimono - Estilos de Notas (nt)')
@section('description', 'Ejemplos de las utilidades de notas y advertencias (nt1 a nt10) con diseño moderno y mate.')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Notas Modernas (`nt`)</h1>
            <p>
                Clases para crear bloques de información, advertencia o éxito estilizados. Utilizan un borde lateral de color para tipificar el mensaje y aplican estilos internos a párrafos, títulos y listas.
            </p>
            <p class="fs14">Pase el cursor sobre cualquier nota para ver el efecto de **hover** elegante.</p>
        </div>
    </header>

    <main class="pd12">
        <div class="mg6x">

            <div class="nt1">
                <h2>✅ Nota 1: Éxito/Confirmación</h2>
                <p>Usa este estilo para confirmar acciones exitosas o información positiva.</p>
                <div class="mg1"><code>Código de confirmación: 200</code></div>
            </div>

            <div class="nt2">
                <h2>ℹ️ Nota 2: Informativa/General</h2>
                <p>Ideal para consejos, información general o detalles importantes sobre el proceso.</p>
                <ul>
                    <li>El proceso tardará 5 minutos.</li>
                    <li>Revisa la documentación adjunta.</li>
                </ul>
            </div>

            <div class="nt3">
                <h2>⚠️ Nota 3: Advertencia Suave/Precaución</h2>
                <p>Sugiere precaución. El color amarillo mate es menos agresivo que el rojo.</p>
                <p>Recuerda que los cambios serán permanentes.</p>
            </div>

            <div class="nt4">
                <h2>❌ Nota 4: Error/Peligro</h2>
                <p>Clase reservada para mensajes de error, fallo o advertencia de alto riesgo.</p>
                <p>La conexión al servidor ha fallado y los datos no se han guardado.</p>
            </div>

            <div class="nt5">
                <h2>⚙️ Nota 5: Neutral/Estandar</h2>
                <p>Una nota con bajo contraste para mensajes poco intrusivos o información secundaria.</p>
            </div>

            <div class="nt6">
                <h2>🟣 Nota 6: Proceso/Acción</h2>
                <p>Útil para indicar que una tarea está en curso o para destacar una funcionalidad en evolución.</p>
            </div>
            
            <div class="nt7">
                <h2>🌊 Nota 7: Novedad/Lanzamiento</h2>
                <p>Excelente para resaltar nuevas características, actualizaciones o notas de versión recientes.</p>
            </div>

            <div class="nt8">
                <h2>🟠 Nota 8: Alerta Caliente/Urgente</h2>
                <p>Similar a la Advertencia, pero con un tono más urgente y orientado a la acción inmediata.</p>
            </div>

            <div class="nt9">
                <h2>✨ Nota 9: Destacado/Oferta</h2>
                <p>Perfecta para llamar la atención sobre promociones, elementos destacados o características premium.</p>
            </div>

            <div class="nt10">
                <h2>🟢 Nota 10: Finalizado/Completo</h2>
                <p>Una alternativa al Éxito para indicar que una fase o tarea específica ha concluido satisfactoriamente.</p>
            </div>
        </div>
    </main>
@endsection