<?php

use Illuminate\Support\Facades\Route;

/**
 * Rutas de la Aplicación Principal
 */

// Ruta principal: /
Route::get('/', function () {
    return view('index'); // view: index.blade.php
})->name('home'); 

// Ruta de contacto: /contact
Route::get('/contact', function () {
    return view('contact'); // view: contact.blade.php
})->name('contact.index'); 


// --------------------------------------------------------------------------
// Rutas de la Guía y Documentación (pages_mukimono)
// --------------------------------------------------------------------------

// Ruta principal de la Guía: /guide
Route::get('/guide', function () {
    return redirect()->route('guide.alert');
})->name('guide.index');


// Rutas Individuales para cada Utilidad (36 Rutas)

// alert
Route::get('/guide/alert', function () {
    return view('pages_mukimono.alert');
})->name('guide.alert');

// animation
Route::get('/guide/animation', function () {
    return view('pages_mukimono.animation');
})->name('guide.animation');

// blur
Route::get('/guide/blur', function () {
    return view('pages_mukimono.blur');
})->name('guide.blur');

// border
Route::get('/guide/border', function () {
    return view('pages_mukimono.border');
})->name('guide.border');

// button
Route::get('/guide/button', function () {
    return view('pages_mukimono.button');
})->name('guide.button');

// color
Route::get('/guide/color', function () {
    return view('pages_mukimono.color');
})->name('guide.color');

// container
Route::get('/guide/container', function () {
    return view('pages_mukimono.container');
})->name('guide.container');

// containerflex
Route::get('/guide/containerflex', function () {
    return view('pages_mukimono.containerflex');
})->name('guide.containerflex');

// cursor
Route::get('/guide/cursor', function () {
    return view('pages_mukimono.cursor');
})->name('guide.cursor');

// dropdown
Route::get('/guide/dropdown', function () {
    return view('pages_mukimono.dropdown');
})->name('guide.dropdown');

// flex
Route::get('/guide/flex', function () {
    return view('pages_mukimono.flex');
})->name('guide.flex');

// font
Route::get('/guide/font', function () {
    return view('pages_mukimono.font');
})->name('guide.font');

// height
Route::get('/guide/height', function () {
    return view('pages_mukimono.height');
})->name('guide.height');

// hide
Route::get('/guide/hide', function () {
    return view('pages_mukimono.hide');
})->name('guide.hide');

// image
Route::get('/guide/image', function () {
    return view('pages_mukimono.image');
})->name('guide.image');

// input
Route::get('/guide/input', function () {
    return view('pages_mukimono.input');
})->name('guide.input');

// link
Route::get('/guide/link', function () {
    return view('pages_mukimono.link');
})->name('guide.link');

// list
Route::get('/guide/list', function () {
    return view('pages_mukimono.list');
})->name('guide.list');

// margin
Route::get('/guide/margin', function () {
    return view('pages_mukimono.margin');
})->name('guide.margin');

// menu
Route::get('/guide/menu', function () {
    return view('pages_mukimono.menu');
})->name('guide.menu');

// notes
Route::get('/guide/notes', function () {
    return view('pages_mukimono.notes');
})->name('guide.notes');

// overflow
Route::get('/guide/overflow', function () {
    return view('pages_mukimono.overflow');
})->name('guide.overflow');

// padding
Route::get('/guide/padding', function () {
    return view('pages_mukimono.padding');
})->name('guide.padding');

// page
Route::get('/guide/page', function () {
    return view('pages_mukimono.page');
})->name('guide.page');

// panel
Route::get('/guide/panel', function () {
    return view('pages_mukimono.panel');
})->name('guide.panel');

// position
Route::get('/guide/position', function () {
    return view('pages_mukimono.position');
})->name('guide.position');

// responsive
Route::get('/guide/responsive', function () {
    return view('pages_mukimono.responsive');
})->name('guide.responsive');

// round
Route::get('/guide/round', function () {
    return view('pages_mukimono.round');
})->name('guide.round');

// scroll
Route::get('/guide/scroll', function () {
    return view('pages_mukimono.scroll');
})->name('guide.scroll');

// shadow
Route::get('/guide/shadow', function () {
    return view('pages_mukimono.shadow');
})->name('guide.shadow');

// show
Route::get('/guide/show', function () {
    return view('pages_mukimono.show');
})->name('guide.show');

// textalign
Route::get('/guide/textalign', function () {
    return view('pages_mukimono.textalign');
})->name('guide.textalign');

// verticalalign
Route::get('/guide/verticalalign', function () {
    return view('pages_mukimono.verticalalign');
})->name('guide.verticalalign');

// width
Route::get('/guide/width', function () {
    return view('pages_mukimono.width');
})->name('guide.width');

// zindex
Route::get('/guide/zindex', function () {
    return view('pages_mukimono.zindex');
})->name('guide.zindex');


// --------------------------------------------------------------------------
// Ruta de Reserva (Debe ir al final)
// --------------------------------------------------------------------------

Route::fallback(function () {
    return response()->view('fallback', [], 404); // view: fallback.blade.php
});