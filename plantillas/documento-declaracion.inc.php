<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="description" content="RMGol - Una misma pasión">
    <meta name="keywords" content="RMGol, futbol">
    <meta name="author" content="Rodrigo Monge García">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo RUTA_IMG?>ico.png">
    <?php
    if(!isset($titulo) || empty($titulo)){
      $titulo ='Evolution and Transformation Perú';
    }
    echo "<title>$titulo</title>";
    ?>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">


    <!--datables CSS básico
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS?>datatables/datatables.min.css"/>
        datables estilo bootstrap 4 CSS
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS?>datatables/dataTables.bootstrap4.min.css">-->


    <link href="<?php echo RUTA_CSS?>inicio/index.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>servicio/index.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>nosotros/index.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>seminuevo/index.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>contacto/index.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>slider/slider.css" rel="stylesheet">


</head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149010305-1"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());
</script>

<body class="oculto">

    <div id="mdb-preloader" class="flex-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>