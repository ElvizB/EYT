<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Rmgol';
?>


<div id="carousel-example-1z" class="carousel slide carousel-fade slider-d" data-ride="carousel">
    <!--Slides clip-path: polygon(8% 0, 100% 0, 100% 100%, 0 100%);-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="waves-effect waves-light" style="cursor: auto;">
            <img class="d-block w-100 " src="<?php echo RUTA_IMG?>seminuevo/ban_semi.png" alt="First slide">
        </div>
        <!--/First slide-->
    </div>
    <!--/.Slides-->
</div>


<div id="carousel-example-1z" class="carousel slide carousel-fade slider-m" data-ride="carousel">
    <!--Slides clip-path: polygon(8% 0, 100% 0, 100% 100%, 0 100%);-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="waves-effect waves-light" style="cursor: auto;">
            <img class="d-block w-100 " src="<?php echo RUTA_IMG?>seminuevo/movil/semi_m.png" alt="First slide">
        </div>
        <!--/First slide-->
    </div>
    <!--/.Slides-->
</div>
<div class="bg-semi">
    <ul class="nav  nav-justified container list-menu">
        <li class="nav-item button-e sobre2">
            <a class="nav-link text-white"  data-filter=".camionetas">Camionetas</a>
        </li>
        <li class="nav-item button-e sobre2">
            <a class="nav-link text-white"  data-filter=".comerciales">Comerciales</a>
        </li>
        <li class="nav-item button-e sobre2">
            <a class="nav-link text-white"  data-filter=".deport">Deportivos</a>
        </li>
        <li class="nav-item button-e sobre2">
            <a class="nav-link text-white"  data-filter=".familiares">Familiares</a>
        </li>
        <li class="nav-item button-e sobre2">
            <a class="nav-link text-white"  data-filter=".hibridos">Hibridos</a>
        </li>
        <li class="nav-item button-e sobre2 activar">
            <a class="nav-link text-white"  data-filter="all">Todos</a>
        </li>

    </ul>
</div>

<main class="pt-0">
    <div class="main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="p-4 p-md-5">

                        <div class="mymixcont">

                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 mix deport mb-5">
                                    <div class="card rounded-2 expand" style="margin-top: 0%;">
                                        <div class="card-body rounded-2">
                                            <div class="text-center">
                                                <button type="button" class="reset-btn-semi" data-toggle="modal"
                                                    data-target="#modalYT">
                                                    <img class="img-fluid" src="<?php echo RUTA_IMG?>seminuevo/auto.png"
                                                        alt="Sample image">
                                                </button>
                                                <h6 class="font-AvenirProLTB text-center pt-3">
                                                    HYUDAI DER 2010 SSS 4.5
                                                </h6>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 reset-semi line-semi">
                                                    <ul class="fa-ul">
                                                        <li
                                                            class="flex-end flex-md-center small pt-2 pl-0 pl-md-0 pl-lg-2">
                                                            <span class="fa-li">
                                                                <img class="img-fluid display-n"
                                                                    src="<?php echo RUTA_IMG?>seminuevo/rueda.png"
                                                                    alt="Sample image">
                                                            </span>
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <ul class="fa-ul" style="margin-left: 0em;">
                                                        <li class="small pt-2">
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="text-center py-4">
                                                <a href="<?php echo RUTA_CONTACTO ?>"
                                                    class="btn boton-v3 btn-md waves-effect waves-light px-5 font-AvenirProLTB">MÁS
                                                    INFORMACIÓN</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 mix familiares mb-5">
                                    <div class="card rounded-2 expand" style="margin-top: 0%;">
                                        <div class="card-body rounded-2">
                                            <div class="text-center">
                                                <button type="button" class="reset-btn-semi" data-toggle="modal"
                                                    data-target="#modalYT">
                                                    <img class="img-fluid" src="<?php echo RUTA_IMG?>seminuevo/auto.png"
                                                        alt="Sample image">
                                                </button>
                                                <h6 class="font-AvenirProLTB text-center pt-3">
                                                    HYUDAI DER 2010 SSS 4.5
                                                </h6>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 reset-semi line-semi">
                                                    <ul class="fa-ul">
                                                        <li
                                                            class="flex-end flex-md-center small pt-2 pl-0 pl-md-0 pl-lg-2">
                                                            <span class="fa-li">
                                                                <img class="img-fluid display-n"
                                                                    src="<?php echo RUTA_IMG?>seminuevo/rueda.png"
                                                                    alt="Sample image">
                                                            </span>
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <ul class="fa-ul" style="margin-left: 0em;">
                                                        <li class="small pt-2">
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="text-center py-4">
                                                <a href="<?php echo RUTA_CONTACTO ?>"
                                                    class="btn boton-v3 btn-md waves-effect waves-light px-5 font-AvenirProLTB">MÁS
                                                    INFORMACIÓN</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 mix deport mb-5">
                                    <div class="card rounded-2 expand" style="margin-top: 0%;">
                                        <div class="card-body rounded-2">
                                            <div class="text-center">
                                                <button type="button" class="reset-btn-semi" data-toggle="modal"
                                                    data-target="#modalYT">
                                                    <img class="img-fluid" src="<?php echo RUTA_IMG?>seminuevo/auto.png"
                                                        alt="Sample image">
                                                </button>
                                                <h6 class="font-AvenirProLTB text-center pt-3">
                                                    HYUDAI DER 2010 SSS 4.5
                                                </h6>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 reset-semi line-semi">
                                                    <ul class="fa-ul">
                                                        <li
                                                            class="flex-end flex-md-center small pt-2 pl-0 pl-md-0 pl-lg-2">
                                                            <span class="fa-li">
                                                                <img class="img-fluid display-n"
                                                                    src="<?php echo RUTA_IMG?>seminuevo/rueda.png"
                                                                    alt="Sample image">
                                                            </span>
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <ul class="fa-ul" style="margin-left: 0em;">
                                                        <li class="small pt-2">
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="text-center py-4">
                                                <a href="<?php echo RUTA_CONTACTO ?>"
                                                    class="btn boton-v3 btn-md waves-effect waves-light px-5 font-AvenirProLTB">MÁS
                                                    INFORMACIÓN</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 mix familiares mb-5">
                                    <div class="card rounded-2 expand" style="margin-top: 0%;">
                                        <div class="card-body rounded-2">
                                            <div class="text-center">
                                                <button type="button" class="reset-btn-semi" data-toggle="modal"
                                                    data-target="#modalYT">
                                                    <img class="img-fluid" src="<?php echo RUTA_IMG?>seminuevo/auto.png"
                                                        alt="Sample image">
                                                </button>
                                                <h6 class="font-AvenirProLTB text-center pt-3">
                                                    HYUDAI DER 2010 SSS 4.5
                                                </h6>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 reset-semi line-semi">
                                                    <ul class="fa-ul">
                                                        <li
                                                            class="flex-end flex-md-center small pt-2 pl-0 pl-md-0 pl-lg-2">
                                                            <span class="fa-li">
                                                                <img class="img-fluid display-n"
                                                                    src="<?php echo RUTA_IMG?>seminuevo/rueda.png"
                                                                    alt="Sample image">
                                                            </span>
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <ul class="fa-ul" style="margin-left: 0em;">
                                                        <li class="small pt-2">
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="text-center py-4">
                                                <a href="<?php echo RUTA_CONTACTO ?>"
                                                    class="btn boton-v3 btn-md waves-effect waves-light px-5 font-AvenirProLTB">MÁS
                                                    INFORMACIÓN</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 mix deport mb-5">
                                    <div class="card rounded-2 expand" style="margin-top: 0%;">
                                        <div class="card-body rounded-2">
                                            <div class="text-center">
                                                <button type="button" class="reset-btn-semi" data-toggle="modal"
                                                    data-target="#modalYT">
                                                    <img class="img-fluid" src="<?php echo RUTA_IMG?>seminuevo/auto.png"
                                                        alt="Sample image">
                                                </button>
                                                <h6 class="font-AvenirProLTB text-center pt-3">
                                                    HYUDAI DER 2010 SSS 4.5
                                                </h6>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 reset-semi line-semi">
                                                    <ul class="fa-ul">
                                                        <li
                                                            class="flex-end flex-md-center small pt-2 pl-0 pl-md-0 pl-lg-2">
                                                            <span class="fa-li">
                                                                <img class="img-fluid display-n"
                                                                    src="<?php echo RUTA_IMG?>seminuevo/rueda.png"
                                                                    alt="Sample image">
                                                            </span>
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <ul class="fa-ul" style="margin-left: 0em;">
                                                        <li class="small pt-2">
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="text-center py-4">
                                                <a href="<?php echo RUTA_CONTACTO ?>"
                                                    class="btn boton-v3 btn-md waves-effect waves-light px-5 font-AvenirProLTB">MÁS
                                                    INFORMACIÓN</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 mix hibridos mb-5">
                                    <div class="card rounded-2 expand" style="margin-top: 0%;">
                                        <div class="card-body rounded-2">
                                            <div class="text-center">
                                                <button type="button" class="reset-btn-semi" data-toggle="modal"
                                                    data-target="#modalYT">
                                                    <img class="img-fluid" src="<?php echo RUTA_IMG?>seminuevo/auto.png"
                                                        alt="Sample image">
                                                </button>
                                                <h6 class="font-AvenirProLTB text-center pt-3">
                                                    HYUDAI DER 2010 SSS 4.5
                                                </h6>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 reset-semi line-semi">
                                                    <ul class="fa-ul">
                                                        <li
                                                            class="flex-end flex-md-center small pt-2 pl-0 pl-md-0 pl-lg-2">
                                                            <span class="fa-li">
                                                                <img class="img-fluid display-n"
                                                                    src="<?php echo RUTA_IMG?>seminuevo/rueda.png"
                                                                    alt="Sample image">
                                                            </span>
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <ul class="fa-ul" style="margin-left: 0em;">
                                                        <li class="small pt-2">
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="text-center py-4">
                                                <a href="<?php echo RUTA_CONTACTO ?>"
                                                    class="btn boton-v3 btn-md waves-effect waves-light px-5 font-AvenirProLTB">MÁS
                                                    INFORMACIÓN</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 mix deport mb-5">
                                    <div class="card rounded-2 expand" style="margin-top: 0%;">
                                        <div class="card-body rounded-2">
                                            <div class="text-center">
                                                <button type="button" class="reset-btn-semi" data-toggle="modal"
                                                    data-target="#modalYT">
                                                    <img class="img-fluid" src="<?php echo RUTA_IMG?>seminuevo/auto.png"
                                                        alt="Sample image">
                                                </button>
                                                <h6 class="font-AvenirProLTB text-center pt-3">
                                                    HYUDAI DER 2010 SSS 4.5
                                                </h6>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 reset-semi line-semi">
                                                    <ul class="fa-ul">
                                                        <li
                                                            class="flex-end flex-md-center small pt-2 pl-0 pl-md-0 pl-lg-2">
                                                            <span class="fa-li">
                                                                <img class="img-fluid display-n"
                                                                    src="<?php echo RUTA_IMG?>seminuevo/rueda.png"
                                                                    alt="Sample image">
                                                            </span>
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <ul class="fa-ul" style="margin-left: 0em;">
                                                        <li class="small pt-2">
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="text-center py-4">
                                                <a href="<?php echo RUTA_CONTACTO ?>"
                                                    class="btn boton-v3 btn-md waves-effect waves-light px-5 font-AvenirProLTB">MÁS
                                                    INFORMACIÓN</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 mix deport mb-5">
                                    <div class="card rounded-2 expand" style="margin-top: 0%;">
                                        <div class="card-body rounded-2">
                                            <div class="text-center">
                                                <button type="button" class="reset-btn-semi" data-toggle="modal"
                                                    data-target="#modalYT">
                                                    <img class="img-fluid" src="<?php echo RUTA_IMG?>seminuevo/auto.png"
                                                        alt="Sample image">
                                                </button>
                                                <h6 class="font-AvenirProLTB text-center pt-3">
                                                    HYUDAI DER 2010 SSS 4.5
                                                </h6>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 reset-semi line-semi">
                                                    <ul class="fa-ul">
                                                        <li
                                                            class="flex-end flex-md-center small pt-2 pl-0 pl-md-0 pl-lg-2">
                                                            <span class="fa-li">
                                                                <img class="img-fluid display-n"
                                                                    src="<?php echo RUTA_IMG?>seminuevo/rueda.png"
                                                                    alt="Sample image">
                                                            </span>
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <ul class="fa-ul" style="margin-left: 0em;">
                                                        <li class="small pt-2">
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="text-center py-4">
                                                <a href="<?php echo RUTA_CONTACTO ?>"
                                                    class="btn boton-v3 btn-md waves-effect waves-light px-5 font-AvenirProLTB">MÁS
                                                    INFORMACIÓN</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 mix camionetas mb-5">
                                    <div class="card rounded-2 expand" style="margin-top: 0%;">
                                        <div class="card-body rounded-2">
                                            <div class="text-center">
                                                <button type="button" class="reset-btn-semi" data-toggle="modal"
                                                    data-target="#modalYT">
                                                    <img class="img-fluid" src="<?php echo RUTA_IMG?>seminuevo/auto.png"
                                                        alt="Sample image">
                                                </button>
                                                <h6 class="font-AvenirProLTB text-center pt-3">
                                                    HYUDAI DER 2010 SSS 4.5
                                                </h6>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 reset-semi line-semi">
                                                    <ul class="fa-ul">
                                                        <li
                                                            class="flex-end flex-md-center small pt-2 pl-0 pl-md-0 pl-lg-2">
                                                            <span class="fa-li">
                                                                <img class="img-fluid display-n"
                                                                    src="<?php echo RUTA_IMG?>seminuevo/rueda.png"
                                                                    alt="Sample image">
                                                            </span>
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <ul class="fa-ul" style="margin-left: 0em;">
                                                        <li class="small pt-2">
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="text-center py-4">
                                                <a href="<?php echo RUTA_CONTACTO ?>"
                                                    class="btn boton-v3 btn-md waves-effect waves-light px-5 font-AvenirProLTB">MÁS
                                                    INFORMACIÓN</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 mix comerciales mb-5">
                                    <div class="card rounded-2 expand" style="margin-top: 0%;">
                                        <div class="card-body rounded-2">
                                            <div class="text-center">
                                                <button type="button" class="reset-btn-semi" data-toggle="modal"
                                                    data-target="#modalYT">
                                                    <img class="img-fluid" src="<?php echo RUTA_IMG?>seminuevo/auto.png"
                                                        alt="Sample image">
                                                </button>
                                                <h6 class="font-AvenirProLTB text-center pt-3">
                                                    HYUDAI DER 2010 SSS 4.5
                                                </h6>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 reset-semi line-semi">
                                                    <ul class="fa-ul">
                                                        <li
                                                            class="flex-end flex-md-center small pt-2 pl-0 pl-md-0 pl-lg-2">
                                                            <span class="fa-li">
                                                                <img class="img-fluid display-n"
                                                                    src="<?php echo RUTA_IMG?>seminuevo/rueda.png"
                                                                    alt="Sample image">
                                                            </span>
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <ul class="fa-ul" style="margin-left: 0em;">
                                                        <li class="small pt-2">
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="text-center py-4">
                                                <a href="<?php echo RUTA_CONTACTO ?>"
                                                    class="btn boton-v3 btn-md waves-effect waves-light px-5 font-AvenirProLTB">MÁS
                                                    INFORMACIÓN</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 mix camionetas mb-5">
                                    <div class="card rounded-2 expand" style="margin-top: 0%;">
                                        <div class="card-body rounded-2">
                                            <div class="text-center">
                                                <button type="button" class="reset-btn-semi" data-toggle="modal"
                                                    data-target="#modalYT">
                                                    <img class="img-fluid" src="<?php echo RUTA_IMG?>seminuevo/auto.png"
                                                        alt="Sample image">
                                                </button>
                                                <h6 class="font-AvenirProLTB text-center pt-3">
                                                    HYUDAI DER 2010 SSS 4.5
                                                </h6>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 reset-semi line-semi">
                                                    <ul class="fa-ul">
                                                        <li
                                                            class="flex-end flex-md-center small pt-2 pl-0 pl-md-0 pl-lg-2">
                                                            <span class="fa-li">
                                                                <img class="img-fluid display-n"
                                                                    src="<?php echo RUTA_IMG?>seminuevo/rueda.png"
                                                                    alt="Sample image">
                                                            </span>
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <ul class="fa-ul" style="margin-left: 0em;">
                                                        <li class="small pt-2">
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="text-center py-4">
                                                <a href="<?php echo RUTA_CONTACTO ?>"
                                                    class="btn boton-v3 btn-md waves-effect waves-light px-5 font-AvenirProLTB">MÁS
                                                    INFORMACIÓN</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 mix comerciales mb-5">
                                    <div class="card rounded-2 expand" style="margin-top: 0%;">
                                        <div class="card-body rounded-2">
                                            <div class="text-center">
                                                <button type="button" class="reset-btn-semi" data-toggle="modal"
                                                    data-target="#modalYT">
                                                    <img class="img-fluid" src="<?php echo RUTA_IMG?>seminuevo/auto.png"
                                                        alt="Sample image">
                                                </button>
                                                <h6 class="font-AvenirProLTB text-center pt-3">
                                                    HYUDAI DER 2010 SSS 4.5
                                                </h6>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 reset-semi line-semi">
                                                    <ul class="fa-ul">
                                                        <li
                                                            class="flex-end flex-md-center small pt-2 pl-0 pl-md-0 pl-lg-2">
                                                            <span class="fa-li">
                                                                <img class="img-fluid display-n"
                                                                    src="<?php echo RUTA_IMG?>seminuevo/rueda.png"
                                                                    alt="Sample image">
                                                            </span>
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <ul class="fa-ul" style="margin-left: 0em;">
                                                        <li class="small pt-2">
                                                            Lorem Ipsum Ipsumar
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="text-center py-4">
                                                <a href="<?php echo RUTA_CONTACTO ?>"
                                                    class="btn boton-v3 btn-md waves-effect waves-light px-5 font-AvenirProLTB">MÁS
                                                    INFORMACIÓN</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>