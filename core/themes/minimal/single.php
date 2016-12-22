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

			$postType = get_post_type();
			if ( $postType === 'tarifas' ) :
					?>
					<a href="/tarifas/" class="btn-mastarifas">ver otras tarifas</a>
					<?php
			else :
			the_post_navigation(
				array(
	            'screen_reader_text' => __( 'Otros trabajos', '_minimal' ),));
			endif;
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile;
		?>

    </main><!-- //cierra main section -->

</div>  <!-- //cierra wrapper -->

<?php

get_footer();
