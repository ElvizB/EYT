<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Rmgol';
?>

<section class="wow fadeIn" data-wow-delay="0.2s">
    <div class="waves-effect waves-light z-depth-3">
        <img class="d-block w-100 " src="<?php echo RUTA_IMG?>contacto/ban_contact.png" alt="First slide">
    </div>
</section>

<main class="pt-0">
    <div class="main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="p-0 p-md-5 py-4 py-md-0">
                        <hr class="mb-2 line-border">
                        <!-- Section heading -->
                        <div class="wow fadeIn py-3" data-wow-delay="0.4s">
                            <h1 class="text-center text-md-left h5-responsive font-AvenirProLTB color-datos">DATOS
                                PERSONALES</h1>
                        </div>

                        <!-- Default form register -->
                        <form class="" action="#!">

                            <div class="form-row mb-3">
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <!-- First name -->
                                    <input type="text" id="defaultRegisterFormFirstName" class="form-control"
                                        placeholder="NOMBRES">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <!-- Last name -->
                                    <input type="text" id="defaultRegisterFormLastName" class="form-control"
                                        placeholder="APELLIDOS">
                                </div>
                            </div>

                            <div class="form-row mb-3">
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <!-- First name -->
                                    <input type="text" id="defaultRegisterFormFirstName" class="form-control"
                                        placeholder="DNI">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <!-- Last name -->
                                    <input type="text" id="defaultRegisterFormLastName" class="form-control"
                                        placeholder="TELEFONO">
                                </div>
                            </div>


                            <div class="form-row mb-3">
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <!-- First name -->
                                    <input type="text" id="defaultRegisterFormFirstName" class="form-control"
                                        placeholder="CELULAR">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <!-- Last name -->
                                    <input type="text" id="defaultRegisterFormEmail" class="form-control"
                                        placeholder="E-MAIL">
                                </div>
                            </div>

                            <div class="form-row mb-3">
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <!-- Subject -->
                                    <select class="browser-default custom-select ">
                                        <option value="" disabled>SERVICIOS</option>
                                        <option value="1" selected>TRANSFORMER UNO</option>
                                        <option value="2">TRANSFORMER DOS</option>
                                        <option value="3">OPCIONALES</option>
                                        <option value="4">AUXILIO Y DIANÓSTICO</option>
                                        <option value="5">OTROS</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <!-- Subject -->
                                    <select class="browser-default custom-select">
                                        <option value="" disabled>SUBSERVICIOS</option>
                                        <option value="1" selected>TRANSFORMER UNO</option>
                                        <option value="2">4 NEUMÁTICOS</option>
                                        <option value="3">4 MANIJAS INTERNAS</option>
                                        <option value="4">MANO DE ALEACIÓNS</option>
                                        <option value="4">CONTROLES DE AUDIO</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="form-group">
                                <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"
                                    placeholder="MENSAJE"></textarea>
                            </div>


                            <div class="text-center text-md-right">
                                <!-- Button trigger modal-->
                                <button type="button" class="btn fondo-contact text-white font-AvenirProLTB"
                                    data-toggle="modal" data-target="#modalCart">Ver términos y condiciones
                                </button>

                                <!-- Modal: modalCart -->
                                <div class="modal fade" id="modalCart" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <!--Header-->
                                            <div class="modal-header z-depth-1" style="background: #818181 !important;">
                                                <h5 class="modal-title text-white font-AvenirProLTB" id="myModalLabel">
                                                    Términos y
                                                    condiciones
                                                </h5>
                                                <!-- <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                 <span aria-hidden="true" class="text-white">×</span>--->
                                                </button>
                                            </div>
                                            <!--Body-->
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                    odio,
                                                    dapibus ac facilisis in, egestas eget
                                                    quam.
                                                    Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et.
                                                    Vivamus sagittis lacus vel augue
                                                    laoreet
                                                    rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                    commodo
                                                    cursus magna, vel scelerisque nisl
                                                    consectetur
                                                    et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                                    auctor
                                                    fringilla.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                    odio,
                                                    dapibus ac facilisis in, egestas eget
                                                    quam.
                                                    Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et.
                                                    Vivamus sagittis lacus vel augue
                                                    laoreet
                                                    rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                    commodo
                                                    cursus magna, vel scelerisque nisl
                                                    consectetur
                                                    et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                                    auctor
                                                    fringilla.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                    odio,
                                                    dapibus ac facilisis in, egestas eget
                                                    quam.
                                                    Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et.
                                                    Vivamus sagittis lacus vel augue
                                                    laoreet
                                                    rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                    commodo
                                                    cursus magna, vel scelerisque nisl
                                                    consectetur
                                                    et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                                    auctor
                                                    fringilla.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                    odio,
                                                    dapibus ac facilisis in, egestas eget
                                                    quam.
                                                    Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et.
                                                    Vivamus sagittis lacus vel augue
                                                    laoreet
                                                    rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                    commodo
                                                    cursus magna, vel scelerisque nisl
                                                    consectetur
                                                    et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                                    auctor
                                                    fringilla.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                    odio,
                                                    dapibus ac facilisis in, egestas eget
                                                    quam.
                                                    Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et.
                                                    Vivamus sagittis lacus vel augue
                                                    laoreet
                                                    rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                    commodo
                                                    cursus magna, vel scelerisque nisl
                                                    consectetur
                                                    et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                                    auctor
                                                    fringilla.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                    odio,
                                                    dapibus ac facilisis in, egestas eget
                                                    quam.
                                                    Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et.
                                                    Vivamus sagittis lacus vel augue
                                                    laoreet
                                                    rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                    commodo
                                                    cursus magna, vel scelerisque nisl
                                                    consectetur
                                                    et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                                    auctor
                                                    fringilla.
                                                </p>
                                            </div>
                                            <!--Footer-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-contact btn-md btn-block "
                                                    data-dismiss="modal">Cerrar</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal: modalCart -->
                            </div>
                            <!-- Newsletter -->
                            <div class="custom-control custom-checkbox text-right mt-2 pr-4">
                                <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
                                <label class="custom-control-label small font-AvenirMe"
                                    for="defaultRegisterFormNewsletter">Acepto
                                    Términos y condiciones</label>
                            </div>

                            <div class="mt-3 text-center text-md-right">
                                <button id="btnenviar"
                                    class="btn btn-send waves-effect waves-light font-AvenirProLTB"><i
                                        class="fas fa-paper-plane pr-2"></i>ENVIAR</button>
                            </div>

                        </form>
                        <!-- Default form register -->

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