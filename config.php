<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Mukimono css',
    'description' => 'Website description for the Mukimono css, detailing system architecture.',
    'collections' => [], 

    /*
    |--------------------------------------------------------------------------
    | Helper Simplificado para la Navegación Activa
    |--------------------------------------------------------------------------
    | Verifica si el path de la página actual coincide exactamente o comienza con
    | el path de prueba (para páginas anidadas).
    */
    'isActive' => function ($page, $path) {
        // Obtenemos el path limpio de la página actual (ej: 'contact' o 'home').
        $currentPath = trim($page->getPath(), '/');
        // Limpiamos el path de prueba (ej: 'contact').
        $testPath = trim($path, '/');
        
        // Comprobación simple de coincidencia:
        // 1. Coincidencia exacta (ej: 'contact' === 'contact')
        // 2. Coincidencia de inicio (ej: 'blog/post' comienza con 'blog')
        return ($currentPath === $testPath) || (strpos($currentPath, $testPath . '/') === 0);
    },
];