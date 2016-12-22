<?php
/*landing pages de LaCueva.tv
 * Diciembre 2016
 * Versión 1.0
 * Desarrollo, hoteles, agencias, cine
 */
header ('Content-type: text/html; charset=utf-8');

//empecemos: primero se incluyen las funciones
include 'functions.php';

//definimos que pagina es
if ( $_GET['id'] == null ) {
    define ( 'LANDINGPAGE', NombrePagina( 'desarrollo'));
} else {
    define ( 'LANDINGPAGE', NombrePagina( $_GET['id'] ) );
}

//incluye cabecera que va hasta el body
include 'header.php';
//incluye el loader que es gral
include 'loader.php';

//contenido de pagina:
switch (LANDINGPAGE) {
    case 'desarrollo':
        include 'desarrollo.php';
        break;
    case 'hoteles':
        include 'hoteles.php';
        break;
    case 'agencias':
        include 'agencias.php';
        break;
    case 'cine':
        include 'cine.php';
        break;
    case 'contacto':
        include 'contacto.php';
        break;
}

include 'footer.php';
?>