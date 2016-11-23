<?php
/**
 * Manage meta boxes for this plugin.
 *
 * @package     Metaboxes URL-online on post
 * @author      LaCueva.tv
 * @license     GPL-2.0+
 * @link        http://www.lacueva.tv/
 * @copyright   2016 LaCueva
 * @since       1.0
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register custom meta boxes for minaml theme entrada.
 *
 * @since 1.0
 *
 * @uses minimal_meta_box_callback()
 */

if ( ! function_exists( 'minimal_add_meta_box' ) ) :
    function minimal_add_meta_box() {
        add_meta_box(
            'url_online_meta_box',
            __( 'URL Online', '_minimal' ),
            'minimal_add_meta_box_callback',
            'post'
        );
    }
endif;

add_action( 'add_meta_boxes', 'minimal_add_meta_box' );

if ( ! function_exists( 'minimal_add_meta_box_callback' ) ) :
/**
 * Print HTML for meta box.
 *
 * @since 1.0
 *
 * @param WP_Post $post
 *
 * @see minimal_add_meta_box()
 */
    function minimal_add_meta_box_callback( WP_Post $post ) {
        wp_nonce_field( '_post_data', '_post_data_nonce' );

        $urlOnline = get_post_meta( $post->ID, '_post_data', true );

        ?>

        <div class="url-online-data-field">
            <label for="_url_online"><?php esc_html_e( 'URL del sitio Online', '_minimal' ); ?></label><br/>
            <input type="url" name="_url_online" value="<?php echo esc_attr( $urlOnline ); ?>"/>
        </div>
        <?php

    }
endif;

if ( ! function_exists( 'minimal_save_metabox_data' ) ) :
/**
 * Save meta data for a post.
 *
 * @param int     $post_id
 * @param WP_Post $post
 *
 * @since 1.0
 */
    function minimal_save_metabox_data( $post_id, WP_Post $post ) {
        // Si no se reciben los datos esperados, salir de la función.
        if ( ! isset( $_POST['_url_online'] ) ) {
            return;
        }

        // Si no se aprueba el chequeo de seguridad, salir de la función.
	   if ( ! isset( $_POST['_post_data_nonce'] ) || ! wp_verify_nonce( $_POST['_post_data_nonce'], '_post_data' ) ) {
		  return;
	   }

        $post_type = get_post_type_object( $post->post_type );

        // Si el usuario actual no tiene permisos para modificar el post, salir de la función.
        if ( ! current_user_can( $post_type->cap->edit_post, $post_id ) ) {
            return;
        }
        // Convertimos los datos ingresados a formatos válidos para nuestros campos.
        $urlOnline = esc_url_raw( $_POST['_url_online'] );

        // Guardamos
        update_post_meta( $post_id, '_post_data', $urlOnline );
    }
endif;

add_action( 'save_post', 'minimal_save_metabox_data', 10, 2 );

/**
 * Register custom meta boxes for minimal theme tarifas.
 *
 * @since 1.0
 *
 * @uses minimal_meta_box_callback()
 */

if ( ! function_exists( 'minimal_add_meta_box_tarifas' ) ) :
    function minimal_add_meta_box_tarifas() {
        add_meta_box(
            'tarifa',
            __( 'precio servicio', '_minimal' ),
            'minimal_add_meta_box_callback_tarifas',
            'tarifas'
        );
    }
endif;

add_action( 'add_meta_boxes', 'minimal_add_meta_box_tarifas' );

if ( ! function_exists( 'minimal_add_meta_box_callback_tarifas' ) ) :
/**
 * Print HTML for meta box.
 *
 * @since 1.0
 *
 * @param WP_Post $post
 *
 * @see minimal_add_meta_box()
 */
    function minimal_add_meta_box_callback_tarifas( WP_Post $post ) {
        wp_nonce_field( '_tarifa_data', '_tarifa_data_nonce' );

        $tarifa = get_post_meta( $post->ID, '_tarifa_data', true );

        ?>

        <div class="tarifas-precio-data-field">
            <label for="_tarifa"><?php esc_html_e( 'Tarifa en pesos', '_minimal' ); ?></label><br/>
            <input type="number" name="_tarifa" value="<?php
						if ( ! $tarifa == '' ) {
							echo esc_attr( $tarifa );
						}
						?>"/>
        </div>
        <?php

    }
endif;

if ( ! function_exists( 'minimal_save_metabox_data_tarifas' ) ) :
/**
 * Save meta data for a post.
 *
 * @param int     $post_id
 * @param WP_Post $post
 *
 * @since 1.0
 */
    function minimal_save_metabox_data_tarifas( $post_id, WP_Post $post ) {
        // Si no se reciben los datos esperados, salir de la función.
        if ( ! isset( $_POST['_tarifa'] ) ) {
            return;
        }

        // Si no se aprueba el chequeo de seguridad, salir de la función.
	   if ( ! isset( $_POST['_tarifa_data_nonce'] ) || ! wp_verify_nonce( $_POST['_tarifa_data_nonce'], '_tarifa_data' ) ) {
		  return;
	   }

        $post_type = get_post_type_object( $post->post_type );

        // Si el usuario actual no tiene permisos para modificar el post, salir de la función.
        if ( ! current_user_can( $post_type->cap->edit_post, $post_id ) ) {
            return;
        }
        // Convertimos los datos ingresados a formatos válidos para nuestros campos.
        $tarifa = intval( $_POST['_tarifa'] );

        // Guardamos
        update_post_meta( $post_id, '_tarifa_data', $tarifa );
    }
endif;

add_action( 'save_post', 'minimal_save_metabox_data_tarifas', 10, 2 );
