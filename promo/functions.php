<?php 
/*landing pages de LaCueva.tv
 * Diciembre 2016
 * Versión 1.0
 * Desarrollo, hoteles, agencias, cine
 * Pagina de funciones y variables
 */
//titulos de página

//definir que pagina
function NombrePagina ( $nombre ) {
	$page = 'desarrollo';

	if ( $nombre == 'hoteles' ) {
	    $page = 'hoteles';
	}
	if ( $nombre == 'agencias' ) {
	    $page = 'agencias';
	}
	if ( $nombre == 'cine' ) {
	    $page = 'cine';
	}
  if ( $nombre == 'contacto' ) {
      $page = 'contacto';
  }
	return $page;
}
//define <title>
function tituloPagina ( $url ) {
  $tituloPagina = 'LaCueva.tv &#8211; Agencia de desarrollo web';

  if ( $url == 'hoteles' ) {
  	$tituloPagina = 'Diseño web para hoteles &#8211; LaCueva.tv';
  }
  if ( $url == 'agencias' ) {
  	$tituloPagina = 'Diseño web para agencias de turismo &#8211; LaCueva.tv';
  }
  if ( $url == 'cine' ) {
  	$tituloPagina = 'Diseño web para cine &#8211; LaCueva.tv';
  }
  //finalmente imprime el título
  echo $tituloPagina;
}//tituloPagina()

//fuentes Raleway siempre normal e italica salvo las bold:
function RalewayFont ( $url ) {
  $linkfont = 'https://fonts.googleapis.com/css?family=Raleway:';

  $RNormal = '400,400i';
  $RLight = '300,300i';
  $RUltraLight = '200,200i';
  $Rbold = '600';
  $RUltrabold = '800';

  switch ( $url ) {
  	case 'desarrollo':
  		$linkfont .= $RNormal;
  		$linkfont .= ','; 
      $linkfont .= $Rbold;
  		break;
  	case 'hoteles' :
  		$linkfont .= $RUltraLight;
  		$linkfont .= ','; 
  		$linkfont .= $Rbold;
		break;
	case 'agencias' :
  		$linkfont .= $RNormal;
  		$linkfont .= ',';
  		$linkfont .= $RLight;
      $linkfont .= ',';
      $linkfont .= $Rbold;
		break;
	case 'cine' : 
  		$linkfont .= $RUltrabold;
		break;
  }
  //imprime el link completo
  echo $linkfont;
}//RalewayFont()

//define el css a incluir
function inluirCss ( $url ) {
	$cssPagina = 'css/style.css';

	switch ( $url ) {
  	case 'desarrollo':
  		$cssPagina = 'css/style.css';
  		break;
  	case 'hoteles' :
  		$cssPagina = 'css/hoteles.css';
		break;
	case 'agencias' :
  		$cssPagina = 'css/agencias.css';
		break;
	case 'cine' : 
  		$cssPagina = 'css/cine.css';
		break;
  }

  echo $cssPagina;
}


?>