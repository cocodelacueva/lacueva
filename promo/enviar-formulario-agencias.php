<?php
header ('Content-type: text/html; charset=utf-8');

 function recogeDato($campo){ 
     return isset($_REQUEST[$campo])?$_REQUEST[$campo]:'';
 }
 $landing    = recogeDato('landing');
 $nombre    = recogeDato('nombre');
 $email    = recogeDato('email');
 $tel    = recogeDato('tel'); 
 $web    = recogeDato('web');
 $autoadministrable = recogeDato('autoadministrable');
 $ventaonline = recogeDato('ventaonline');
 $paquetes = recogeDato('paquetes');
 $consulta  = recogeDato('consulta');
 $algunerror = FALSE;
 $cabeceras = "From: info@lacueva.tv \n".
    "Reply-To: " .$email;
 
 
if($autoadministrable==''){
    $autoadministrable = 'No';
} else {
    $autoadministrable = 'Si';
}

if($ventaonline==''){
    $ventaonline = 'No';
} else {
    $ventaonline = 'Si';
}

if($email==''){
     $algunerror = TRUE;
     echo "<p>No has introducido tu email</p>\n";
 } 
 if($consulta==''){
     $algunerror = TRUE;
     echo "<p>Su consulta es importante.</p>\n";
  }
  if ($algunerror){
     echo "<p>&nbsp;</p>\n";
     echo "<p>No se ha podido enviar el mensaje por los errores que se detallan arriba.</p>\n";
     echo "<p>Por favor, vuelve a rellenar el formulario.</p>\n";
     echo "<p><a href=\"../index.html\">Volver al formulario</a></p>\n";
  }else{
     $para="info@lacueva.tv";
     $asunto="Consulta desde agencias";
     $mensaje="Datos del formulario de contacto (agencias) \n".  
     "Nombre:  ".$nombre."\n".
     "eMail:  ".$email."\n".
     "tel:  ".$tel."\n".
     "Web:  ".$web."\n".
     "Paquetes que manejan: " .$paquetes."\n".   
     "Venta Online: ".$ventaonline."\n".
     "Sitio autoadministrable: " .$autoadministrable ."\n".
     "Mensaje adicional: ". $consulta;
     mail($para, utf8_decode($asunto), utf8_decode($mensaje), $cabeceras); 
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>LaCueva.tv-Formulario</title>

<script type="text/javascript">
            function redireccionar(){
              window.location="/gracias/";
            }
            setTimeout ("redireccionar()", 500);
        </script>
<style type="text/css">
    .loader {
        position: absolute;
        height: 112%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: $gris-clarito;
        color: $negro;
        z-index: 111;
    }
    p {
        font-size: 24px;
        }
</style>
</head>

<body class="loader">
 <p>Espere un segundo mientras enviamos su mensaje.</p>
</body>
</html>