<?php
/**
 *
 * @package minimal
 */

get_header(); 

?>
<!---- sitio ---->
<div class="wrapper">
	
	<!---- main section:portfolio ------>
	<main role="main">
	<?php
		if ( have_posts() ) : ?>

		<header class="content-header">
	        <h1>Trabajos</h1>
	    </header>
	    
	    <section id="trabajos">
        	<ul class="trabajos-items">

	    <?php
			while ( have_posts() ) : the_post(); ?>
						
			<?php get_template_part( 'template-parts/content' ); ?>
			
			<?php endwhile;
		?>

			</ul>
        </section>

		<footer class="content-footer">
		<img class="img-loader-ajax" src="<?php bloginfo('stylesheet_directory') ?>/images/loader.gif" alt="cargando">
            <button class="btn-mastrabajos">Cargar más</button>
        </footer>

        	<?php
		//si no hay post:
		else :
			get_template_part( 'template-parts/content', 'none');
		
		endif;
	?>

    </main><!-- //cierra main section -->

<?php

get_footer();