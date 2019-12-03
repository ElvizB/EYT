<?php

$componentes_url = parse_url($_SERVER['REQUEST_URI']);
//eyt-prueba.herokuapp.com
//$componentes_url = parse_url($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);

$ruta = $componentes_url['path'];

$partes_ruta = explode('/', $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);

$ruta_elegida = 'vistas/404.php';

if($partes_ruta[0] == 'eyt'){
  if (count($partes_ruta) == 1){
    $ruta_elegida = 'vistas/home.php';
  }else if (count($partes_ruta) == 2){
    switch($partes_ruta[1]){
      case 'servicios':
        $ruta_elegida = 'vistas/servicios.php';
        break;
      case 'nosotros':
          $ruta_elegida = 'vistas/Nosotros.php';
          break;
      case 'seminuevo':
        $ruta_elegida = 'vistas/seminuevo.php';
        break;
      case 'contacto':
        $ruta_elegida = 'vistas/Contacto.php';
        break;
      
    }
  }
}

include_once $ruta_elegida;