<?php
header ('Content-type: text/html; charset=utf-8');

 function recogeDato($campo){ 
     return isset($_REQUEST[$campo])?$_REQUEST[$campo]:'';
 }
 $landing    = recogeDato('landing');
 $email    = recogeDato('email');
 $tel    = recogeDato('tel'); 
 $consulta  = recogeDato('consulta');
 $algunerror = FALSE;
 $cabeceras = "From: info@lacueva.tv \n".
    "Reply-To: " .$email;
 
 
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
     $asunto="Consulta desde " . $landing;
     $mensaje="Datos del formulario de contacto (". $landing .") \n".  
     "eMail:  ".$email."\n".
     "tel:  ".$tel."\n".
     "Pregunta: ". $consulta;
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

<body>
 <p>Espere un segundo mientras procesamos su mensaje.</p>
</body>
</html>