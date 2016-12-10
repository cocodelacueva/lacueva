<?php

 function recogeDato($campo){ 
     return isset($_REQUEST[$campo])?$_REQUEST[$campo]:'';
 }

 $nombre    = recogeDato('f_name'); 
 $email    = recogeDato('f_email'); 
 $consulta  = recogeDato('f_message');
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
     $asunto=utf8_decode("Consulta desde LaCueva.tv");
     $mensaje="Datos del formulario de contacto:\n".  
     "eMail:  ".$email."\n".
     "Pregunta: ".$consulta;
     mail($para, utf8_decode($asunto), utf8_decode($mensaje), $cabeceras); 
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<title>LaCueva.tv-Formulario</title>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58713788-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>

    <script type="text/javascript">
            function redireccionar(){
              window.location="/gracias/";
            }
            setTimeout ("redireccionar()", 100);
    </script>

</head>

<body>
 <p>Espere un segundo mientras procesamos su mensaje.</p>
</body>
</html>
