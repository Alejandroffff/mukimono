<?php

// 1. Cargamos el array devuelto por link.php.
// CORRECCIÓN: La ruta es correcta para tu estructura (source/routes/link.php)
$link_data = require(__DIR__ . '/source/routes/link.php');

$base_config = [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Mukimono css',
    'description' => 'Website description for the Mukimono css, detailing system architecture.',
    'collections' => [], 

    'isActive' => function ($page, $path) {
        $currentPath = trim($page->getPath(), '/');
        $testPath = trim($path, '/');
        
        return ($currentPath === $testPath) || (strpos($currentPath, $testPath . '/') === 0);
    },
];

// Fusionamos la configuración base con los datos de navegación
return array_merge($base_config, $link_data);