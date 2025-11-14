@extends('_layouts.main')

@section('title', 'Mukimono - Utilidades de Color (Variantes)')
@section('description', 'Ejemplos de las Variantes de Color (bgN, clN) para acentos y estados fijos de Mukimono CSS.')

@section('body')
    <header>
        @include('_layouts.navbar_guide_top')
        <div class="pd24 tac">
            <h1>Variantes de Color</h1>
            <p>
                Clases para aplicar colores.
            </p>
        </div>
    </header>

    <main>
        <h2 class="w100p tac pd12">Si agregas x al final afectas a hijos.</h2>
        <div class="pd24 fx10 mg2x pd12x wa256x">
            
            {{-- Color 1: Teal (Soft) --}}
            <div>
                <h2>cl1 y bg1</h2>
                <div class="pd12 tma_d3 rd3">
                    <div class="pd2tb">Color Teal (Soft)</div>
                    <p class="cl1 pd2tb">Texto con .cl1</p>
                    <div class="bg1 pd12">Fondo con .bg1</div>
                </div>
            </div>

            {{-- Color 2: Soft Coral --}}
            <div>
                <h2>cl2 y bg2</h2>
                <div class="pd12 tma_d3 rd3">
                    <div class="pd2tb">Color Soft Coral</div>
                    <p class="cl2 pd2tb">Texto con .cl2</p>
                    <div class="bg2 pd12">Fondo con .bg2</div>
                </div>
            </div>

            {{-- Color 3: Muted Gold --}}
            <div>
                <h2>cl3 y bg3</h2>
                <div class="pd12 tma_d3 rd3">
                    <div class="pd2tb">Color Muted Gold</div>
                    <p class="cl3 pd2tb">Texto con .cl3</p>
                    <div class="bg3 pd12">Fondo con .bg3</div>
                </div>
            </div>

            {{-- Color 4: Slate Blue --}}
            <div>
                <h2>cl4 y bg4</h2>
                <div class="pd12 tma_d3 rd3">
                    <div class="pd2tb">Color Slate Blue</div>
                    <p class="cl4 pd2tb">Texto con .cl4</p>
                    <div class="bg4 pd12">Fondo con .bg4</div>
                </div>
            </div>

            {{-- Color 5: Olive Green --}}
            <div>
                <h2>cl5 y bg5</h2>
                <div class="pd12 tma_d3 rd3">
                    <div class="pd2tb">Color Olive Green</div>
                    <p class="cl5 pd2tb">Texto con .cl5</p>
                    <div class="bg5 pd12">Fondo con .bg5</div>
                </div>
            </div>

            {{-- Color 6: Mauve --}}
            <div>
                <h2>cl6 y bg6</h2>
                <div class="pd12 tma_d3 rd3">
                    <div class="pd2tb">Color Mauve</div>
                    <p class="cl6 pd2tb">Texto con .cl6</p>
                    <div class="bg6 pd12">Fondo con .bg6</div>
                </div>
            </div>

            {{-- Color 7: Soft Orange --}}
            <div>
                <h2>cl7 y bg7</h2>
                <div class="pd12 tma_d3 rd3">
                    <div class="pd2tb">Color Soft Orange</div>
                    <p class="cl7 pd2tb">Texto con .cl7</p>
                    <div class="bg7 pd12">Fondo con .bg7</div>
                </div>
            </div>

            {{-- Color 8: Dusty Pink --}}
            <div>
                <h2>cl8 y bg8</h2>
                <div class="pd12 tma_d3 rd3">
                    <div class="pd2tb">Color Dusty Pink</div>
                    <p class="cl8 pd2tb">Texto con .cl8</p>
                    <div class="bg8 pd12">Fondo con .bg8</div>
                </div>
            </div>

            {{-- Color 9: Soft Cyan --}}
            <div>
                <h2>cl9 y bg9</h2>
                <div class="pd12 tma_d3 rd3">
                    <div class="pd2tb">Color Soft Cyan</div>
                    <p class="cl9 pd2tb">Texto con .cl9</p>
                    <div class="bg9 pd12">Fondo con .bg9</div>
                </div>
            </div>

            {{-- Color 10: Muted Brown --}}
            <div>
                <h2>cl10 y bg10</h2>
                <div class="pd12 tma_d3 rd3">
                    <div class="pd2tb">Color Muted Brown</div>
                    <p class="cl10 pd2tb">Texto con .cl10</p>
                    <div class="bg10 pd12">Fondo con .bg10</div>
                </div>
            </div>

        </div>
    </main>
@endsection