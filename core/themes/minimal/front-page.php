<?php
/**
 * Front static page
 *
 * @package minimal
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="icon" type="image/png" href="favicon.png">
<link rel="shortcut icon" href="http://lacueva.tv/favicon.ico">
<link rel="apple-touch-icon" href="http://lacueva.tv/apple-touch-icon-precomposed.png">

<meta property="og:url" content="http://lacueva.tv/" />
<meta property="og:title" content="Desarrollo Web" />
<meta property="og:site_name" content="LaCueva.tv" />
<meta property="og:image" content="<?php echo(get_template_directory_uri()); ?>/images/screenshot-minimal.jpg" />
<meta property="og:description" 
  content="Agencia de desarrollo web ubicada en Buenos Aires. Comunicadores, diseñadores, programadores siempre al tanto de las últimas tecnologías." />

<meta name="p:domain_verify" content="ffb14f0df54cf30bf3fe0a529110f3ce"/>

<?php wp_head(); ?>
<!-- google analytics -->

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

<body <?php body_class(); ?>>
<header class="loader" itemscope itemtype="http://schema.org/Organization">
        <img src="<?php echo(get_template_directory_uri()); ?>/images/logo.svg">
        <h1 itemprop="legalName">LaCueva.tv</h1>
</header>
<!---- sitio ---->
<div class="wrapper">
<!---- main section: front-page ------>
		<main role="main" class="wrapper-front-page">
		<section>
		    <nav>
			    <ul class="main-menu">
			    	<li>
			    		<a href="#contact" class="nav">
			    	contacto</a>
			    	</li>
			    </ul>
		    </nav>
		    <div class="content-front-page">
		        <?php the_post();
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continuar leyendo %s <span class="meta-nav">&rarr;</span>', '_minimal' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>
		    </div>
		    <a href="/trabajos/" class="btn-trabajos">Ver trabajos</a>
		    
		</section>
	</main><!-- //cierra main section -->

<?php

get_footer();