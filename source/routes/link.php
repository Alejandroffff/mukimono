<?php

/**
 * @file link.php
 * Defines the navigation structures and essential asset paths for the site.
 * Uses a robust associative array format.
 */

// Define el listado completo de utilidades para asegurar la consistencia.
$mukimonoUtilityKeys = [
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

// Mapeo manual o generado de las utilidades a nombres e íconos legibles.
// Aquí se mapean las 36 utilidades para link_secondary.
$mukimonoUtilities = [
    'home' => ['name' => 'Guide Home', 'icon' => 'book'],
    'alert' => ['name' => 'Alerts', 'icon' => 'bell'],
    'animation' => ['name' => 'Animations', 'icon' => 'play'],
    'blur' => ['name' => 'Blur', 'icon' => 'eye-slash'],
    'border' => ['name' => 'Borders', 'icon' => 'square'],
    'button' => ['name' => 'Buttons', 'icon' => 'hand-pointer'],
    'color' => ['name' => 'Colors & BG', 'icon' => 'palette'],
    'container' => ['name' => 'Containers', 'icon' => 'inbox'],
    'containerflex' => ['name' => 'Flex Containers', 'icon' => 'grip-lines'],
    'cursor' => ['name' => 'Cursor', 'icon' => 'mouse-pointer'],
    'dropdown' => ['name' => 'Dropdowns', 'icon' => 'caret-down'],
    'flex' => ['name' => 'Flex Items', 'icon' => 'grip-lines-vertical'],
    'font' => ['name' => 'Font & Text', 'icon' => 'font'],
    'height' => ['name' => 'Height', 'icon' => 'arrows-alt-v'],
    'hide' => ['name' => 'Hide', 'icon' => 'minus-circle'],
    'image' => ['name' => 'Images', 'icon' => 'image'],
    'input' => ['name' => 'Inputs', 'icon' => 'keyboard'],
    'link' => ['name' => 'Links', 'icon' => 'link'],
    'list' => ['name' => 'Lists', 'icon' => 'list-ul'],
    'margin' => ['name' => 'Margin (m-)', 'icon' => 'ruler-vertical'],
    'menu' => ['name' => 'Menu/Nav', 'icon' => 'bars'],
    'notes' => ['name' => 'Notes/Tips', 'icon' => 'sticky-note'],
    'overflow' => ['name' => 'Overflow', 'icon' => 'window-maximize'],
    'padding' => ['name' => 'Padding (p-)', 'icon' => 'ruler-horizontal'],
    'page' => ['name' => 'Page Setup', 'icon' => 'file-alt'],
    'panel' => ['name' => 'Panels/Cards', 'icon' => 'clone'],
    'position' => ['name' => 'Position', 'icon' => 'map-pin'],
    'responsive' => ['name' => 'Responsive', 'icon' => 'mobile-alt'],
    'round' => ['name' => 'Round/Radius', 'icon' => 'circle'],
    'scroll' => ['name' => 'Scroll', 'icon' => 'mouse-scroll'],
    'shadow' => ['name' => 'Shadows', 'icon' => 'cloud'],
    'show' => ['name' => 'Show', 'icon' => 'plus-circle'],
    'textalign' => ['name' => 'Text Align', 'icon' => 'align-left'],
    'theme' => ['name' => 'Themes', 'icon' => 'brush'],
    'verticalalign' => ['name' => 'Vertical Align', 'icon' => 'exchange-alt'],
    'width' => ['name' => 'Width', 'icon' => 'arrows-alt-h'],
    'zindex' => ['name' => 'Z-Index', 'icon' => 'layer-group'],
];

// Genera dinámicamente el array link_secondary completo
$secondaryLinks = [];
foreach ($mukimonoUtilityKeys as $key) {
    // Busca la data mapeada
    $data = $mukimonoUtilities[$key];
    $secondaryLinks[] = [
        'name' => $data['name'],
        // Construye la ruta /guide/{key}
        // Asumiendo rutas basadas en path para Jigsaw:
        'route' => '/guide/' . $key,
        'icon' => $data['icon'],
    ];
}


// Define el main configuration object containing links and assets.
$NAV_LINKS = [

    /**
     * Site Asset Paths (Images, Icons, CSS, and JS).
     */
    'asset_paths' => [
        // Rutas generales
        'logo'          => '/assets/images/logo.png',
        'logotype'      => '/assets/images/logotype.png',
        'favicon'       => '/assets/images/logo.ico',

        // Rutas específicas para el tutorial Mukimono CSS
        'tutorial_images'   => '/assets/images/mukimono-tutorial/',

        // Ruta del logo de administrador
        'admin'      => '/assets/images/admin/logo_alejandro.png',

        'compiled_assets' => [
            'css' => '/assets/build/css/main.css',
            'js'  => '/assets/build/js/main.js',
            'version' => time(),
        ],
    ],

    /**
     * Primary Navigation Links (Visible on Desktop, main site links).
     */
    'link_public' => [
        [
            'name'  => 'Home',
            'route' => '/',
            'icon'  => 'home',
        ],
        [
            'name'  => 'Contact',
            'route' => '/contact',
            'icon'  => 'phone',
        ],
        // ENLACE DE DONACIÓN AGREGADO
        [
            'name'  => 'Donar',
            'route' => '/legal/donate',
            'icon'  => 'hand-holding-usd', 
        ],
    ],

    /**
     * Secondary Navigation Links (Documentación de Mukimono).
     * Generado automáticamente desde las utilidades.
     */
    'link_secondary' => $secondaryLinks,

    /**
     * Navigation Links accessible only to authenticated users (Private).
     */
    'link_private' => [
        // Private routes would be added here.
    ],

    /**
     * Links for the site footer.
     * Incluye enlaces legales esenciales para una plataforma profesional.
     */
    'link_footer' => [
        // Enlaces Legales 
        [
            'name'  => 'Política de Privacidad',
            'route' => '/legal/privacy',
            'icon'  => 'user-secret', 
        ],
        [
            'name'  => 'Términos de Servicio',
            'route' => '/legal/terms',
            'icon'  => 'gavel', 
        ],
        [
            'name'  => 'Política de Cookies',
            'route' => '/legal/cookies',
            'icon'  => 'cookie-bite', 
        ],
    ],
];

// **CORRECCIÓN CLAVE:** El archivo DEBE devolver un array que contiene NAV_LINKS.
return [
    'NAV_LINKS' => $NAV_LINKS,
];