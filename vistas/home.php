<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
include_once 'plantillas/carousel.php';

$titulo = 'Rmgol';
?>


<div class="inicio">
    <!-- Featured image -->
    <div class="flex-center">
        <ul class="list-style">
            <li>
                <h2 class="h2-responsive text-reel font-cBol wow fadeInUp pb-5" data-wow-delay="0.2s">TU ELIGES CÓMO
                    EVOLUCIONAR</h2>
            </li>
            <li>
                <div class="row pb-5">
                    <div class="col-lg-6">
                        <img src="<?php echo RUTA_IMG?>/inicio/e_1.png" class="img-fluid wow pulse pb-3" />
                        <h6 class="wow fadeInUp" data-wow-delay="0.2s">VENTA DE
                            VEHÍCULOS <br />
                            MULTIMARCAS USADOS</h5>

                    </div>
                    <div class="col-lg-6">
                        <img src="<?php echo RUTA_IMG?>/inicio/e_2.png" class="img-fluid wow pulse pb-3" />
                        <h6 class=" wow fadeInUp" data-wow-delay="0.2s">TRANSFORMACIÓN <br /> Y TUNING
                        </h6>
                    </div>
                </div>
            </li>
            <li>
                <a href="<?php echo RUTA_SERVICIOS ?>" class="btn boton-v2 btn-md waves-effect waves-light px-5">VER MÁS
                    SERVICIOS</a>
            </li>
        </ul>
    </div>
</div>


<section id="nosotros">

    <div class="container">

        <!-- Section: Testimonials v.3 -->
        <section class="team-section text-center my-5">

            <!-- Section heading -->
            <div>
                <h2 class="h1-responsive fondo-curve">
                    BENEFICIOS</h2>
            </div>


            <!--Grid row-->
            <div class="row text-center pt-5">

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-md-0 mb-5">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="mx-auto">
                            <img src="<?php echo RUTA_IMG?>/inicio/b_1.png" class="img-fluid">
                        </div>
                        <!--Content-->
                        <p class="color-bene mt-4">Contamos con taller propio</p>
                        <!--Review-->
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-md-0 mb-5">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar mx-auto">
                            <img src="<?php echo RUTA_IMG?>/inicio/b_2.png" class="img-fluid">
                        </div>
                        <!--Content-->
                        <p class="color-bene mt-4">Somos importaores de partes exclusivas para Toyota Hilux</p>
                        <!--Review-->
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-md-0 mb-5">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar mx-auto">
                            <img src="<?php echo RUTA_IMG?>/inicio/b_3.png" class="img-fluid">
                        </div>
                        <!--Content-->
                        <p class="color-bene mt-4">Ahorra dinero con nuestros vehículos</p>
                        <!--Review-->
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-md-0 mb-5">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar mx-auto">
                            <img src="<?php echo RUTA_IMG?>/inicio/b_4.png" class="img-fluid">
                        </div>
                        <!--Content-->
                        <p class="color-bene mt-4">Hacemos el overhaul más completo con mucha pasión</p>
                        <!--Review-->
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-md-0 mb-5">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar mx-auto">
                            <img src="<?php echo RUTA_IMG?>/inicio/b_5.png" class="img-fluid">
                        </div>
                        <!--Content-->
                        <p class="color-bene mt-4" key="n_item6">Garantizamos post servicios</p>
                        <!--Review-->
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar mx-auto">
                            <img src="<?php echo RUTA_IMG?>/inicio/b_6.png" class="img-fluid">
                        </div>
                        <!--Content-->
                        <p class="color-bene mt-4">Contamos con el staff más calificado</p>
                        <!--Review-->
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
            <div>


        </section>
        <!-- Section: Testimonials v.3 -->
    </div>

</section>

<section>
    <div>
        <img src="<?php echo RUTA_IMG?>/inicio/ban_beneficio.png" class="d-block w-100 " />
    </div>
</section>

<?php
  include_once 'plantillas/footer.php';
   include_once 'plantillas/documento-cierre.inc.php';
?>