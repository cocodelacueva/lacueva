<?php
/**
 *
 * @package minimal
 */

get_header();

?>
<!---- sitio ---->
<div class="wrapper"> 
	<!---- main section:single-page ------>
	<main role="main">
		<div class="single-page">
			<?php
				if ( have_posts() ) : 
					while ( have_posts() ) : the_post();
					the_title( '<h1 class="page-titulo">', '</h1>' ); 
					the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continuar leyendo %s <span class="meta-nav">&rarr;</span>', '_minimal' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
					endwhile;
				endif;
			?>
		</div>
    </main><!-- //cierra main section -->

<?php

get_footer();