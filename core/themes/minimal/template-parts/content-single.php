<?php
/**
 * Template part for displaying single post.
 *
 * @package minimal
 */

$urlOnline = get_post_meta( $post->ID, '_post_data', true );
$postType = get_post_type();
$tarifaPrecio = get_post_meta( get_the_ID(), '_tarifa_data', true );
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
		<div class="col-right-img">
			<?php
			//$postType = get_post_type();
				if ( $postType == 'tarifas' ) : ?>
					<figure class="entri-figure">
				<?php else : ?>
					<figure class="entri-figure-tarifa">
				<?php endif;
					if ( has_post_thumbnail() ) {
					the_post_thumbnail('full', array( 'class' => 'entri-img')
				); }
				?>
			</figure>
		<?php
		//$postType = get_post_type();
			if ( $postType == 'tarifas' ) : ?>
				<ul class="btns-tarifa-trabajos-single">
					<li><a href="#" class="btn-tarifa-single">Contacto</a></li>
					<li><a href="/trabajos/" class="btn-trabajos-single">Trabajos</a></li>
				</ul>
				<div class="tarifa-en-single">
					<?php echo($tarifaPrecio); ?>
				</div>
				<a href="/terminos-y-condiciones/" target="_blank" class="terminos-y-condiciones-link">Ver términos y condiciones</a>
			<?php else : ?>
				<a href="<?php echo($urlOnline); ?>" target="_blank" class="btn-online">Ver online</a>
			<?php endif; ?>
		</div>
	</div><!-- .entry-content -->
	<?php
	//$postType = get_post_type();
	if ( $postType !== 'tarifas' ) :
	?>
		<footer class="content-footer-single">
       <?php the_date('', '<p>', '</p>'); ?>
    </footer>
	<?php endif; ?>
</article><!-- #post-## -->
