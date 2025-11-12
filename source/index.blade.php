@extends('_layouts.main')

@php
    $page->title = 'Mukimono css - Framework CSS Simple y Elegante';
    $page->description =
        'Mukimono css: Marco de trabajo CSS gratuito, minimalista y profesional para interfaces de alto contraste.';
@endphp

@section('body')
    <div class="design">

        <header>
            @include('_layouts.navbar_main_top')
            <div class="pd12 mg12 fx fx10">
                <div class="pg320 tac">
                    <h1>
                        MUKIMONO <span>CSS</span>
                    </h1>
                    <p>
                        Marco de trabajo CSS simple, rápido y profesional.
                    </p>
                </div>
            </div>
        </header>

        <div class="pd12x mg12x fx fx10">
            <div class="pg320 fx10">
                <div>
                    <a href="{{ $page->NAV_LINKS['link_secondary'][0]['route'] }}" class="lb48 tma_d9 rd3">
                        Comenzar con la Guía
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection