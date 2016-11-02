<?php
/**
 * Template part for displaying posts.
 *
 * @package minimal
 */
?>
<li class="trabajo-item">
    <article id="post-<?php the_ID(); ?>" class="trabajo">
        <header>
            <?php
            the_title( '<h2 class="trabajo-titulo"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            the_tags('<h4 class="trabajo-tags">', ', ', '</h4>');

            ?>
        </header>
        <div class="trabajo-descripcion"><?php
        the_excerpt(); ?>

            <a href="<?php echo get_permalink(); ?>" class="trabajo-more-btn">Leer más</a>
        </div>
        <?php
            if ( has_post_thumbnail() ) :
            ?>
            <a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail('full', array( 'class' => 'trabajo-imagen')
                );?></a>
            <?php else :
                echo ('<img class="trabajo-imagen" src="' . get_template_directory_uri() . '/images/logo.svg" alt="laCueva.tv - portfolio">');
            endif;

        the_date('', '<p class="trabajo-fecha">', '</p>');

        $urlOnline = get_post_meta( $post->ID, '_post_data', true );

        if ( $urlOnline == '' ) :
        $urlOnline = esc_url( get_permalink() );
            ?>
        <a href="<?php echo($urlOnline); ?>" target="_blank" class="trabajo-btn">Ver online</a>
        <?php
        else :
            ?>
        <a href="<?php echo($urlOnline); ?>" target="_blank" class="trabajo-btn">Ver online</a>
        <?php
        endif;
        ?>
    </article>
</li>
