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

<main class="pt-0">
    <div class="main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="p-4 p-md-5">
                        <div class="row">

                            <ul class="list-menu">

                                <li class="button-e" data-filter="Camionetas">Camionetas</li>
                                <li class="button-e" data-filter="Comerciales">Comerciales</li>
                                <li class="button-e" data-filter="Deportivos">Deportivos</li>
                                <li class="button-e" data-filter="Familiares">Familiares</li>
                                <li class="button-e" data-filter="Hibridos">Hibridos</li>
                                <li class="button-e activar" data-filter="all">Todos</li>
                            </ul>

                            <div class="col-lg-4 col-md-6 col-sm-12 filter Camionetas mb-5">
                                <div class="card rounded-2 expand" style="margin-top: 0%;">
                                    <div class="card-body rounded-2">
                                        <div class="text-center">
                                            <button type="button" class="reset-btn-semi" data-toggle="modal"
                                                data-target="#modalYT">
                                                <img class="img-fluid" src="<?php echo RUTA_IMG?>seminuevo/auto.png"
                                                    alt="Sample image">
                                            </button>
                                            <!--Modal: modalYT-->
                                            <div class="modal fade" id="modalYT" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">

                                                    <!--Content-->
                                                    <div class="modal-content">

                                                        <!--Body-->
                                                        <div class="modal-body mb-0 p-0">

                                                            <div
                                                                class="embed-responsive embed-responsive-16by9 z-depth-1-half">

                                                            </div>

                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn btn-contact btn-md btn-block "
                                                                data-dismiss="modal">Cerrar</button>
                                                        </div>
                                                    </div>
                                                    <!--/.Content-->
                                                </div>
                                            </div>
                                            <!--Modal: modalYT-->
                                            <h6 class="font-AvenirProLTB text-center pt-3">
                                                HYUDAI DER 2010 SSS 4.5
                                            </h6>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 reset-semi line-semi">
                                                <ul class="fa-ul">
                                                    <li class="flex-end flex-md-center small pt-2 pl-0 pl-md-0 pl-lg-2">
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