<?php
/**
 * minimal functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _minimal
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'THEME_FOLDER', dirname( __FILE__ ));

if ( ! function_exists( 'minimal_setup' ) ) :

function minimal_setup() {

	//hace que wordpress maneje la etiqueta tittle
	add_theme_support('title-tag');

	//texdomain
	load_theme_textdomain('_minimal', get_template_directory() .'/languages');

	//registrar menu
	register_nav_menus( array(
			'primary' => esc_html__('Primary Menu', '_minimal')
		) );

	//habilitar thumbails
	add_theme_support('post-thumbnails');

	//cambia las tags para que sean html5
	add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

	add_theme_support('custom-background', apply_filters( '_minimal_custom_background_args', array(
		'default-color' => 'ececec',
		'default-image' => '',
		) ));

}
endif;

add_action( 'after_setup_theme', 'minimal_setup' );


if ( ! function_exists( 'minimal_styles_scripts' ) ) :

function minimal_styles_scripts() {
	//cargar style home
	if ( is_front_page() ) :
		wp_enqueue_style( 'minimal-home-style', get_template_directory_uri() . '/css/minimal-home-style.css' );
	//carga google fonts
		wp_enqueue_style('minimal_google_fonts', 'https://fonts.googleapis.com/css?family=Raleway:700italic,300');

	else :
		wp_enqueue_style( 'minimal-style', get_stylesheet_uri() );
		wp_enqueue_style('minimal_google_fonts', 'https://fonts.googleapis.com/css?family=Raleway:700,300, 300i');
	endif;

	//cargar script
	wp_enqueue_script(
		'minimal-script-js',
		 get_template_directory_uri() . '/js/minimal.js',
		 array('jquery'), '1.0', true );

    wp_localize_script( 'minimal-script-js', 'MinimalScriptsData', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
	) );
}

endif;

add_action( 'wp_enqueue_scripts', 'minimal_styles_scripts' );

//incluye archivo de ajax
require_once plugin_dir_path( __FILE__ ) . 'admin/ajax.php';

//incluye metaboxes
require_once plugin_dir_path( __FILE__ ) . 'admin/meta-boxes.php';

//incluye settings
require_once plugin_dir_path( __FILE__ ) . 'admin/settings.php';

//incluye post types
require_once plugin_dir_path( __FILE__ ) . 'includes/post-type.php';

//incluye shortcodes
require_once plugin_dir_path( __FILE__ ) . 'includes/shortcodes.php';
