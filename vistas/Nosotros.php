<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Rmgol';
?>


<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Slides clip-path: polygon(8% 0, 100% 0, 100% 100%, 0 100%);-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="waves-effect waves-light" style="cursor: auto;">
            <img class="d-block w-100 " src="<?php echo RUTA_IMG?>nosotros/banner_about.png" alt="First slide">
        </div>
        <!--/First slide-->
    </div>
    <!--/.Slides-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-5 col-md-12">
                <div class="row">
                    <div class="col-lg-5 "></div>
                    <div class="col-lg-7 col-md-12">
                        <div class="historia p-4 p-md-4 p-lg-0">
                            <h4
                                class="font-AvenirProLTB mt-1 mb-3 text-center text-md-center text-lg-right color-about">
                                Historia
                            </h4>
                            <p class="text-justify font-AvenirMe">
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.
                                Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when
                                an
                                unknown printer took a galley of type and scrambled it to make a type
                                specimen
                                book.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-lg-7 col-md-12 reset">
                <div class="img-historia">
                    <img class="w-100" src="<?php echo RUTA_IMG?>nosotros/historia.png" alt="Sample image">
                </div>
            </div>
            <!--Grid column-->
        </div>
        <!--/First slide-->
    </div>
    <!--/.Slides-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="row section-mision-w">

            <!--Grid column-->
            <div class="col-lg-7 col-md-12 reset">
                <div class="img-mision">
                    <img class="w-100" src="<?php echo RUTA_IMG?>nosotros/mision.png" alt="Sample image">
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-5 col-md-12">
                <div class="row">

                    <div class="col-lg-7">
                        <div class="mision p-4 p-md-4 p-lg-0">
                            <h4
                                class="font-AvenirProLTB mt-1 mb-3 text-center text-md-center text-lg-right color-about">

                                Misión
                            </h4>
                            <p class="text-justify font-AvenirMe">
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.
                                Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when
                                an
                                unknown printer took a galley of type and scrambled it to make a type
                                specimen
                                book.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12"></div>
                </div>
            </div>
            <!--Grid column-->
        </div>
        <!--/First slide-->
        <!--First slide-->
        <div class="row section-mision-m">

            <!--Grid column-->
            <div class="col-lg-5 col-md-12 flex-center">
                <div class="row">

                    <div class="col-lg-7">
                        <div class="mision p-4 p-md-4 p-lg-0">
                            <h4
                                class="font-AvenirProLTB mt-1 mb-3 text-center text-md-center text-lg-right color-about">

                                Misión
                            </h4>
                            <p class="text-justify font-AvenirMe">
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.
                                Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when
                                an
                                unknown printer took a galley of type and scrambled it to make a type
                                specimen
                                book.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12"></div>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-7 col-md-12 reset">
                <div class="img-mision">
                    <img class="w-100" src="<?php echo RUTA_IMG?>nosotros/mision.png" alt="Sample image">
                </div>
            </div>
            <!--Grid column-->

        </div>
        <!--/First slide-->
    </div>
    <!--/.Slides-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-5 col-md-12 flex-center">
                <div class="row">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-7 col-md-12">
                        <div class="vision p-4 p-md-4 p-lg-0">
                            <h4
                                class="font-AvenirProLTB mt-1 mb-3 text-center text-md-center text-lg-right color-about">
                                Visión
                            </h4>

                            <p class="text-justify font-AvenirMe">
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.
                                Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when
                                an
                                unknown printer took a galley of type and scrambled it to make a type
                                specimen
                                book.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-7 col-md-12 reset">
                <div class="img-vision">
                    <img class="w-100" src="<?php echo RUTA_IMG?>nosotros/vision.png" alt="Sample image">
                </div>
            </div>
            <!--Grid column-->
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
                    <section class="p-0 p-md-5">
                        <hr class="mb-md-5 mb-4 line-border">
                        <h2 class="h1-responsive text-center font-AvenirProLTB color-about">Valores
                        </h2>
                        <p class="text-center mb-2 font-AvenirMe">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <div class="waves-effect waves-light wow zoomIn py-4" data-wow-delay="0.5s">
                            <img class="d-block w-100 " src="<?php echo RUTA_IMG?>/nosotros/valores.png"
                                alt="First slide">
                        </div>
                        <div class="row pt-4">
                            <div class="col-lg-1"></div>

                            <div class="col-lg-2 col-md-6 col-sm-12">
                                <div class="text-center">
                                    <img class="img-fluid" src="<?php echo RUTA_IMG?>/nosotros/v_1.png"
                                        alt="First slide"></div>
                                <h5 class="h5-responsive text-center my-3 font-AvenirProLTB color-about">Lorem ipsum
                                </h5>
                                <p class="text-justify small font-AvenirMe">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                            </div>

                            <div class="col-lg-2 col-md-6 col-sm-12">
                                <div class="text-center">
                                    <img class="img-fluid" src="<?php echo RUTA_IMG?>/nosotros/v_2.png"
                                        alt="First slide"></div>
                                <h5 class="h5-responsive text-center my-3 font-AvenirProLTB color-about">Lorem ipsum
                                </h5>
                                <p class="text-justify small font-AvenirMe">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                            </div>

                            <div class="col-lg-2 col-md-6 col-sm-12">
                                <div class="text-center">
                                    <img class="img-fluid" src="<?php echo RUTA_IMG?>/nosotros/v_3.png"
                                        alt="First slide"></div>
                                <h5 class="h5-responsive text-center my-3 font-AvenirProLTB color-about">Lorem ipsum
                                </h5>
                                <p class="text-justify small font-AvenirMe">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                            </div>

                            <div class="col-lg-2 col-md-6 col-sm-12">
                                <div class="text-center">
                                    <img class="img-fluid" src="<?php echo RUTA_IMG?>/nosotros/v_4.png"
                                        alt="First slide"></div>
                                <h5 class="h5-responsive text-center my-3 font-AvenirProLTB color-about">Lorem ipsum
                                </h5>
                                <p class="text-justify small font-AvenirMe">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                            </div>

                            <div class="col-lg-2 col-md-6 col-sm-12">
                                <div class="text-center">
                                    <img class="img-fluid" src="<?php echo RUTA_IMG?>/nosotros/v_5.png"
                                        alt="First slide"></div>
                                <h5 class="h5-responsive text-center my-3 font-AvenirProLTB color-about">Lorem ipsum</h5>
                                <p class="text-justify small font-AvenirMe">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                            </div>

                            <div class="col-lg-1"></div>
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