<?php
require_once __DIR__ . '/componentes/helpers.php';
$perfil = require __DIR__ . '/datos/perfil.php';
$proyectos = require __DIR__ . '/datos/proyectos.php';
$articulos = require __DIR__ . '/datos/articulos.php';
$habilidades = require __DIR__ . '/datos/habilidades.php';
$tituloPagina = 'Inicio';

require __DIR__ . '/componentes/header.php';
require __DIR__ . '/componentes/navbar.php';
require __DIR__ . '/paginas/inicio.php';
require __DIR__ . '/componentes/footer.php';
