@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Visualización (sw)')
@section('description', 'Clases para controlar la propiedad "display" (block, inline-block, flex) y sus variantes responsivas.')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Visualización / Display (`sw`)</h1>
            <p>
                Clases para definir el comportamiento de visualización (`display`) de un elemento. Incluye utilidades **base** y una completa matriz de **utilidades responsivas** por *breakpoint*.
            </p>
        </div>
    </header>

    <main class="pd12">
        
        <h2>Bloques Base</h2>
        <p class="mg6">Definiciones de `display` sin media queries (aplicables siempre).</p>
        
        <div class="mg6x bd1 tma_d2 pd6">
            <div class="swb pd3 bd1 tma_d5 mg3">
                <p class="mg0 fs14">**`.swb`**: `display: block` (Ocupa todo el ancho).</p>
            </div>
            <div class="swib pd3 bd1 tma_d8 mg3" style="width: max-content;">
                <p class="mg0 fs14">**`.swib`**: `display: inline-block` (Se comporta como texto, acepta ancho/alto).</p>
            </div>
            <div class="swf pd3 bd1 tma_d5 mg3">
                <p class="mg0 fs14">**`.swf`**: `display: flex` (Contenedor flexible).</p>
            </div>
            <div class="swif pd3 bd1 tma_d8 mg3" style="width: max-content;">
                <p class="mg0 fs14">**`.swif`**: `display: inline-flex` (Flexible en línea).</p>
            </div>
        </div>

        ---

        <h2>Control Responsivo (Media Queries)</h2>
        <p class="mg6">Permiten cambiar el tipo de `display` del elemento según el tamaño de la pantalla.</p>

        <div class="mg6x pd6 bd1 tma_d3">
            <table>
                <thead>
                    <tr>
                        <th>Prefijo</th>
                        <th>Ejemplo</th>
                        <th>Significado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>**`swb`**</td>
                        <td>`.swb`</td>
                        <td>Base (`display: block`).</td>
                    </tr>
                    <tr>
                        <td>**`swba`**</td>
                        <td>`.swfa640`</td>
                        <td>`display: flex` **hasta** (max-width) 640px.</td>
                    </tr>
                    <tr>
                        <td>**`swbi`**</td>
                        <td>`.swbi961`</td>
                        <td>`display: block` **desde** (min-width) 961px.</td>
                    </tr>
                    <tr>
                        <td>**`swbXxY`**</td>
                        <td>`.swib321x640`</td>
                        <td>`display: inline-block` **entre** 321px y 640px.</td>
                    </tr>
                </tbody>
            </table>
            <p class="fs12 cl4 mg12t">
                *Nota: Los sufijos `a` (hasta), `i` (desde) y `XxY` (rango) aplican para todos los tipos: `b` (block), `ib` (inline-block), `f` (flex), `if` (inline-flex).*
            </p>
        </div>
    </main>
@endsection