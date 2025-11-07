@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Input (ip, ckb)')
@section('description', 'Ejemplos de las utilidades de inputs generales y checkboxes, con estilos oscuros y elegantes.')

@section('body')
    <header>
        @include('_layouts.navbar')
        <div class="pd12">
            <h1>Inputs y Formularios (`ip`, `ckb`)</h1>
            <p>
                Clases para definir la apariencia y el tamaño de los campos de formulario, siguiendo el tema oscuro, elegante y profesional.
            </p>
        </div>
    </header>

    <main class="pd12">
        <h2>Inputs Generales (`.ipN`)</h2>
        <p class="mg6">Aplica estilos y define la altura (desde 16px hasta 64px) para `input`, `textarea`, y `select`.</p>

        <div class="mg6x pd6 bd1 tma_d2">
            <h3 class="mg6">Inputs Pequeños (16px - 32px)</h3>
            <div class="mg6">
                <input type="text" placeholder=".ip16" class="ip16 mg3">
                <input type="text" placeholder=".ip24" class="ip24 mg3">
                <input type="text" placeholder=".ip32" class="ip32 mg3">
            </div>

            <h3 class="mg6">Inputs Grandes (40px - 64px)</h3>
            <div class="mg6">
                <input type="email" placeholder=".ip40" class="ip40 mg3">
                <input type="password" placeholder=".ip48" class="ip48 mg3">
                <select class="ip64 mg3">
                    <option>.ip64 (64px)</option>
                </select>
            </div>
        </div>

        ---

        <h2>Checkboxes (`.ckbN`)</h2>
        <p class="mg6">Controla el tamaño y la apariencia de los campos `input[type="checkbox"]`.</p>

        <div class="mg6x pd6 bd1 tma_d3 fx fx16 fx10">
            <div class="mg6 pd3 bd1 tma_d5 fx fx16">
                <input type="checkbox" class="ckb16" checked>
                <span class="fs12 mg3">.ckb16</span>
            </div>
            <div class="mg6 pd3 bd1 tma_d5 fx fx16">
                <input type="checkbox" class="ckb32" checked>
                <span class="fs14 mg3">.ckb32</span>
            </div>
            <div class="mg6 pd3 bd1 tma_d5 fx fx16">
                <input type="checkbox" class="ckb48" checked>
                <span class="fs16 mg3">.ckb48</span>
            </div>
            <div class="mg6 pd3 bd1 tma_d5 fx fx16">
                <input type="checkbox" class="ckb64" checked>
                <span class="fs18 mg3">.ckb64</span>
            </div>
        </div>
    </main>
@endsection