<?php 
/**
header landing page. Simplemente tiene la parte <head></head>
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php tituloPagina(LANDINGPAGE); ?></title>
<meta name="keywords" content="LaCueva.tv, Buenos Aires, Desarrollo web, aplicaciones, agencia digital, social media">
<meta name="description" content="Agencia de desarrollo web ubicada en Buenos Aires. Comunicadores, diseñadores, programadores siempre al tanto de las últimas tecnologías.">
<link rel="icon" type="image/png" href="http://lacueva.tv/favicon.png">
<link rel="shortcut icon" href="http://lacueva.tv/favicon.ico">
<link rel="apple-touch-icon" href="http://lacueva.tv/apple-touch-icon-precomposed.png">

<meta property="og:url" content="http://lacueva.tv/" />
<meta property="og:title" content="Desarrollo Web" />
<meta property="og:site_name" content="LaCueva.tv" />
<meta property="og:image" content="http://lacueva.tv/lqva/images/screenshot-minimal.jpg" />
<meta property="og:description" 
  content="Agencia de desarrollo web ubicada en Buenos Aires. Comunicadores, diseñadores, programadores siempre al tanto de las últimas tecnologías." />

<meta name="p:domain_verify" content="ffb14f0df54cf30bf3fe0a529110f3ce"/>

<!-- google fonts -->
    <link href="<?php RalewayFont(LANDINGPAGE); ?>" rel="stylesheet" type="text/css">
<!-- Custom CSS -->
  <link href="<?php inluirCss(LANDINGPAGE); ?>" rel="stylesheet">

<!-------------- google analitycs -------------->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58713788-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>

</head>
<body>