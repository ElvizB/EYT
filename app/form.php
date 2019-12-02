<?php
$nombre         = isset($_POST['nombre'])   ?   $_POST['nombre']    : '';
$email          = isset($_POST['email'])    ?   $_POST['email']     : '';
$celular        = isset($_POST['celular'])  ?   $_POST['celular']   : '';
$asunto         = isset($_POST['asunto'])   ?   $_POST['asunto']    : '';
$mensaje        = isset($_POST['mensaje'])  ?   $_POST['mensaje']   : '';

if( $nombre === '' || $email==='' || $celular=== '' || $celular === '' || $mensaje==='') {
  echo json_encode('Llena los campos ctm');
}else{
  echo json_encode('Correcto: <br> Sus Datos son: ');
}
/*$nombre         = isset($_POST['nombre'])   ?   $_POST['nombre']    : '';
$email          = isset($_POST['email'])    ?   $_POST['email']     : '';
$celular        = isset($_POST['celular'])  ?   $_POST['celular']   : '';
$asunto         = isset($_POST['asunto'])   ?   $_POST['asunto']    : '';
$mensaje        = isset($_POST['mensaje'])  ?   $_POST['mensaje']   : '';
$contenido  = '
                <html>
                    <head>
                        <title>Email con HTML</title>
                    </head>
                    <body>
                        <h2 style="margin-bottom: 0;color: #0081c2">Llego la siguiente información :</h2>
                        <hr>
                        <p><strong>'.$nombre.'</strong> te ha enviado el siguiente mensaje :</p>
                        <p>'.$mensaje.' <br><br> </p>
                        <p>Puedes ponerte en contacto con la persona através de su email : '.$email .'</p>
                        <p>Su número es : '.$celular.'</p>
                        <hr>
                    </body>
                </html>';
$contenido .= "Enviado el : " . date('d-m-Y');
//$contenido .= "Enviado el : " . date('d-m-Y (H:i:s)', time());      

$headers    =   'MIME-Version: 1.0' . "\r\n";
$headers   .=  "Content-type: text/html; charset=UTF-8\r\n";

$destinatario   = 'contacto@rmgol.com';
//$asunto         = 'Consultas sobre los programas';

// Enviar correo
$sendMail   =   mail($destinatario, $asunto , $contenido, $headers);

if ($sendMail)
echo json_encode('Llena los campos ctm');
else
echo json_encode('Correcto: <br> Sus Datos son: ');*/