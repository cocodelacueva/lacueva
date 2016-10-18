<?php
/**
 *
 * @package minimal
 */
get_header(); 
?>
<!---- sitio ---->
<div class="wrapper">
	<main role="main">

	<?php 
		get_template_part( 'template-parts/content', 'none' );
	?>
	</main><!-- //cierra main section -->
</div>  <!-- //cierra wrapper -->

<?php

get_footer();