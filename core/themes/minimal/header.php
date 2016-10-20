<?php
/**
 * The header .
 *
 * @package minimal
 */

//redes sociales:
   $minimalSettings = get_option('minimal_settings');
    $textoDescriptivoHead = $minimalSettings['minimal_head_text'];
?>
<!DOCTYPE html>
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

<div class="loader">
    <img src="<?php echo(get_template_directory_uri()); ?>/images/logo.svg">
</div>
<!------- header ------>
<header itemscope itemtype="http://schema.org/Organization" class="main-header">
    <div class="head-nav">
    <?php if ( ! is_page() ) : ?>
        <!--header del portfolio -->
        <h4 itemprop="legalName"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">LaCueva.tv</a></h4>
        
        <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Trabajos</a></h2>

        <?php else : ?>
        <!--header de otras paginas -->
        <h2 itemprop="legalName" class="brand-name-page"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">LaCueva.tv</a></h2>
        
    <?php endif;?>

        <nav>
            <button class="toggle">
                <span class="sr-only">Menú</span>
                <span class="tog1"></span>
                <span class="tog2"></span>
                <span class="tog3"></span>
            </button>
            <?php wp_nav_menu( array( 
                'primary' => 'Primary Menu',
                'container' => 'div', 'container_class' => '', 'menu_class' => 'main-menu' 
                 )); ?>
            <div class="up-nav">
                <span class="up-nav-arrow-left"></span>
                <span class="up-nav-arrow-right"></span>
            </div>
        </nav>
    </div>
    <div class="img-eletu"></div>
    <aside>
    <?php if (  ! $textoDescriptivoHead == '' ) : ?>
        <div class="presentacion">
            <p> <?php echo $textoDescriptivoHead; ?></p>
        </div>
    <?php endif; ?>    
    <!--
        <div class="presentacion">
            <p>Agencia de <strong>desarrollo web</strong> ubicada en Buenos Aires. <strong>Comunicadores, diseñadores, programadores</strong> con espíritu emprendedor. Un equipo joven, siempre al tanto de las <strong>últimas tecnologías</strong>.</p>
        </div>    
        -->
    </aside>
</header>

