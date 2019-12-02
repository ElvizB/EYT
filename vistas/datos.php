<?php
include_once 'app/config.inc.php';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';



$titulo = 'Rmgol';
?>

<section class="pt-5">
<div class="container pt-5">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Puesto</th>
                                <th>Ciudad</th>
                                <th>Edad</th>
                                <th>Año de Ingreso</th>
                                <th>Salario</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <td>Tiger Nixon</td>
                                <td>Arquitecto</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            
                            
                        </tbody>        
                       </table>                  
                    </div>
                </div>
        </div>  
    </div>    
    
</section>

<?php
  include_once 'plantillas/footer.php';
   include_once 'plantillas/documento-cierre.inc.php';
?>