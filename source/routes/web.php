<?php

use Illuminate\Support\Facades\Route;
// La Facade Response no es necesaria para Route::view o para la función global response().
// use Illuminate\Support\Facades\Response; // ¡Esta línea es innecesaria y eliminada!

/**
 * Rutas de la Aplicación Principal
 */

// Ruta principal: / (Vista: src/views/index.blade.php)
Route::view('/', 'index')->name('home');

// Ruta de contacto: /contact (Vista: src/views/contact.blade.php)
Route::view('/contact', 'contact')->name('contact.index');


// --------------------------------------------------------------------------
// Rutas de la Guía y Documentación (views)
// --------------------------------------------------------------------------

// Define todas las utilidades de Mukimono CSS, incluyendo 'home' al principio.
$mukimonoUtilities = [
    'home', 
    'alert',
    'animation',
    'blur',
    'border',
    'button',
    'color',
    'container',
    'containerflex',
    'cursor',
    'dropdown',
    'flex',
    'font',
    'height',
    'hide',
    'image',
    'input',
    'link',
    'list',
    'margin',
    'menu',
    'notes',
    'overflow',
    'padding',
    'page',
    'panel',
    'position',
    'responsive',
    'round',
    'scroll',
    'shadow',
    'show',
    'textalign',
    'theme',
    'verticalalign',
    'width',
    'zindex',
];

// Ruta principal de la Guía: /guide
// Muestra directamente la página de inicio de la guía.
Route::view('/guide', 'views.home')->name('guide.index');


// Aplica el prefijo '/guide' a todas las rutas de utilidad.
Route::prefix('guide')->group(function () use ($mukimonoUtilities) {
    foreach ($mukimonoUtilities as $utility) {
        // Genera la ruta: /guide/{utility}
        // Vista: views/{utility}.blade.php
        // Nombre: guide.{utility}
        Route::view("/{$utility}", "views.{$utility}")->name("guide.{$utility}");
    }
});


// --------------------------------------------------------------------------
// Ruta de Reserva (Debe ir al final)
// --------------------------------------------------------------------------
Route::fallback(function () {
    // Retorna la vista de reserva con código 404. Usando la función global response().
    return response()->view('fallback', [], 404);
});