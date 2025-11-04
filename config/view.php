<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | La mayoría de los frameworks almacenan sus vistas en el directorio "resources/views".
    | Aquí se pueden especificar todos los directorios que deben ser comprobados
    | por el framework en busca de tus archivos de vista.
    |
    */

    'paths' => [
        // 1. Ruta estándar (si la usas)
        resource_path('views'), 
        
        // 2. RUTA PERSONALIZADA CORREGIDA:
        // Asumiendo que tu carpeta de vistas principal está en la raíz del proyecto.
        // Si estuviera en 'source/views', usarías base_path('source/views').
        base_path('source/views'), 
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | Esta opción determina dónde deben almacenarse todos los archivos de plantillas
    | de Blade compilados. Normalmente, este directorio puede ser dejado con su
    | valor por defecto, ya que el framework se encargará de él.
    |
    */

    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ),

];