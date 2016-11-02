<?php
/**
 * Template part for displaying single post.
 *
 * @package minimal
 */

$urlOnline = get_post_meta( $post->ID, '_post_data', true );
?>

<article id="post-<?php the_ID(); ?>" class="trabajo-single">
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entri-titulo">', '</h1>' );
			the_tags('<h4 class="entri-tags">', ', ', '</h4>');
		else :
			the_title( '<h2 class="trabajo-titulo"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="entri-text">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continuar leyendo %s <span class="meta-nav">&rarr;</span>', '_minimal' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
			?>
		</div>
		<figure class="entri-figure">
		<?php
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('full', array( 'class' => 'entri-img')
		); }
		?>
	</figure>
		<a href="<?php echo($urlOnline); ?>" target="_blank" class="btn-online">Ver online</a>
	</div><!-- .entry-content -->

	<footer class="content-footer-single">
       <?php the_date('', '<p>', '</p>'); ?>
    </footer>
</article><!-- #post-## -->
