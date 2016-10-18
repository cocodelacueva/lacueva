<?php
/**
 *
 * @package minimal
 */
get_header(); 
?>
<!---- sitio ---->
<div class="wrapper">
	<!---- main section: portfolio ---->
	<main role="main">

	<?php
		while ( have_posts() ) : the_post();

		get_template_part('template-parts/content', 'single');

		the_post_navigation(
			array(
            'screen_reader_text' => __( 'Otros trabajos', '_minimal' ),));
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; ?>

		
    </main><!-- //cierra main section -->
    
    <!---- section: contact form ---->
    <section id="form" class="complete-form">
        <h2>Contacto</h2>
        <form id="contact" method="post" action="formulario-short.php">
            <input type="text" name="email" required placeholder="correo electrónico">
            <input type="text" name="tel" placeholder="teléfono">
            <textarea name="consulta" placeholder="mensaje"></textarea>
            <button type="submit"><span class="red-icon red-icon-contacto"></span> enviar</button>
            <div class="close-form">
                  <span class="cruz-l"></span>
                  <span class="cruz-lr"></span>
            </div> 
        </form>
    </section><!-- //cierra contact form -->
    
</div>  <!-- //cierra wrapper -->

<?php

get_footer();