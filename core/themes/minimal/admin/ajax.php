<?php
/**
 * Load more posts via AJAX.
 *
 * @since 1.0
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) :

    add_action( 'wp_ajax_minimal_load_more_projects', 'minimal_load_more_projects_calback' );
    add_action( 'wp_ajax_nopriv_minimal_load_more_projects', 'minimal_load_more_projects_calback' );

    if ( ! function_exists( 'minimal_load_more_projects_calback' ) ) :

        function minimal_load_more_projects_calback() {
            $project_query = new WP_Query( array(
                    'post_type'      => 'post',
                    'posts_per_page' => 9,
                    'paged'          => isset( $_POST['page'] ) ? intval( $_POST['page'] ) : 2,
                )
            );

            // The Loop
            if ( $project_query->have_posts() ) :

                while ( $project_query->have_posts() ) : $project_query->the_post();

                    get_template_part( 'template-parts/content' );

                endwhile;

                wp_reset_postdata();

            endif;

            exit();
        }

    endif;
endif;
