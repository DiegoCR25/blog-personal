
<?php

// ==========================================
// 1. CARGAR FUNCIONES AUXILIARES
// ==========================================

require_once __DIR__ . '/componentes/helpers.php';


// ==========================================
// 2. CARGAR DATOS DEL BLOG
// ==========================================

$perfil = require __DIR__ . '/datos/perfil.php';
$proyectos = require __DIR__ . '/datos/proyectos.php';
$articulos = require __DIR__ . '/datos/articulos.php';
$habilidades = require __DIR__ . '/datos/habilidades.php';
$gustos = require __DIR__ . '/datos/gustos.php';


// ==========================================
// 3. CONFIGURAR LAS PAGINAS
// ==========================================

// Obtener la pagina solicitada desde la URL
$pagina = $_GET['pagina'] ?? 'inicio';

// Paginas disponibles en el blog
$rutas = [
    'inicio' => [
        'archivo' => 'inicio.php',
        'titulo' => 'Inicio'
    ],
    'gustos' => [
        'archivo' => 'gustos.php',
        'titulo' => 'Mis gustos'
    ],
    'musica' => [
        'archivo' => 'musica.php',
        'titulo' => 'Mi música'
    ],
    'pasatiempos' => [
        'archivo' => 'pasatiempos.php',
        'titulo' => 'Mis pasatiempos'
    ],
    'experiencias' => [
        'archivo' => 'experiencias.php',
        'titulo' => 'Mis experiencias'
    ],
    'proyectos' => [
        'archivo' => 'proyectos.php',
        'titulo' => 'Mis proyectos'
    ]
];


// ==========================================
// 4. VALIDAR LA PAGINA SOLICITADA
// ==========================================

if (!is_string($pagina) || !isset($rutas[$pagina])) {
    http_response_code(404);
    $pagina = 'inicio';
}

// Obtener el titulo y archivo correspondiente
$tituloPagina = $rutas[$pagina]['titulo'];
$archivoPagina = $rutas[$pagina]['archivo'];


// ==========================================
// 5. CARGAR LA ESTRUCTURA VISUAL
// ==========================================

// Encabezado HTML
require __DIR__ . '/componentes/header.php';

// Menu de navegacion
require __DIR__ . '/componentes/navbar.php';

// Contenido de la pagina seleccionada
require __DIR__ . '/paginas/' . $archivoPagina;

// Pie de pagina
require __DIR__ . '/componentes/footer.php';
