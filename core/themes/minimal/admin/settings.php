<?php
/**
 * Settings file.
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

if ( ! function_exists( 'minimal_settings_page' ) ) :
    function minimal_settings_page () {
        add_options_page(
		//título que aparece en la página de opciones
			__('Opcionando el tema','_minimal'),
		//texto que aparece en el link principal del menú
			__('Minimal-settings','_minimal'),
		//permisos del usuario
			'manage_options',
		//string que identifica el menu internamente
			'minimal_settings',
		//funcion que imprime html
			'minimal_settings_page_html'
		);
    }
endif;

add_action( 'admin_menu', 'minimal_settings_page' );

function minimal_settings_page_html() {
    ?>
    <div class="minimal-settings-page">
		<h1><?php _e('Minimal Theme - configuración', '_minimal'); ?></h1>

		<form action="options.php" method="POST">
			<?php
			//imprime html necesario para las validaciones
				settings_fields( 'minimal_settings_group' );
			?>
			<?php
			//imprime la seccion html del plugin y los campos asociados
				do_settings_sections('minimal_settings');
			?>
			<?php
			//imprime el botón de confirmacion
				submit_button();
			?>
		</form>
	</div>

	<?php
}

function minimal_settings_api_init() {
	//registramos la seccion
	add_settings_section(
			//tag 'id' de la seccion
			'minimal-settings-admin-options',
			//título de la seccion
			__('Stand by opciones', '_minimal'),
			//funcion que imprime el html de la seccion
			'minimal_settings_section_callback_html',
			//slug del menu donde aparece la seccion
			'minimal_settings'
		);
    
    //campo para agregar redes
	add_settings_field (
			//texto del tag 'id' del campo
			'minimal-settings-admin-options-redes',
			//título del campo
			__('Redes sociales', '_minimal'),
			//funcion que imprime el html del input
			'minimal_settings_admin_html_redes',
			//slug del menu donde debe aparecer
			'minimal_settings',
			//id de la seccion que pertenece
			'minimal-settings-admin-options'
		);
    
    //campo para agregar imagen y texto superior
	add_settings_field (
			//texto del tag 'id' del campo
			'minimal-settings-admin-options-head',
			//título del campo
			__('Texto e imagen superior', '_minimal'),
			//funcion que imprime el html del input
			'minimal_settings_admin_html_head',
			//slug del menu donde debe aparecer
			'minimal_settings',
			//id de la seccion que pertenece
			'minimal-settings-admin-options'
		);
    

	register_setting(
			//palabra clave igual que se uso en setting fields
			'minimal_settings_group',
			//nombre de nuestra opcion dentro de la options API
			'minimal_settings'
			//funcion que sanitiza las entradas
			//'minimal_settings_sanitize'
		);
}

add_action( 'admin_init', 'minimal_settings_api_init' );

//callback para la seccion
function minimal_settings_section_callback_html () {
    _e('Configurar los datos del tema aquí', '_minimal');
}

//funciones que imprimen html de los campos de descripcion superior
function minimal_settings_admin_html_head() {
    $minimalSettings = get_option('minimal_settings');
    $textoDescriptivoHead = $minimalSettings['minimal_head_text'];
    
    ?>

		<!-- seccion header -->
		<div class="minimal-settings-page-inputs">
            <label for="texto-superior-minimal"><?php _e('Texto descriptivo superior', '_minimal'); ?></label>
			<input id="texto-superior-minimal" name="minimal_settings[minimal_head_text]" type="text" value="<?php echo $textoDescriptivoHead; ?>">
        </div>
	<?php
}

//funciones que imprimen html de los campos de redes sociales
function minimal_settings_admin_html_redes() {
    $minimalSettings = get_option('minimal_settings');
    $telContact = $minimalSettings['minimal_redes_tel'];
    $emailContact = $minimalSettings['minimal_redes_email'];
	$skypeSB = $minimalSettings['minimal_redes_skype'];
	$facebookSB = $minimalSettings['minimal_redes_facebook'];
	$twitterSB = $minimalSettings['minimal_redes_twitter'];
	$googlePlusSB = $minimalSettings['minimal_redes_googleplus'];
	$linkedinSB = $minimalSettings['minimal_redes_linkedin'];
	$githubSB = $minimalSettings['minimal_redes_github'];
	$pinterestSB = $minimalSettings['minimal_redes_pinterest'];
	$behanceSB = $minimalSettings['minimal_redes_behance'];
	$snapchatSB = $minimalSettings['minimal_redes_snapchat'];
	$instagramSB = $minimalSettings['minimal_redes_instagram'];

	?>

		<!-- redes sociales -->
		<div class="minimal-settings-page-inputs">
			<label for="telefono-redes-minimal"><?php _e('Teléfono', '_minimal'); ?></label>
			<input id="telefono-redes-minimal" name="minimal_settings[minimal_redes_tel]" type="text" value="<?php echo $telContact; ?>">

			<label for="email-redes-minimal"><?php _e('Email', '_minimal'); ?></label>
			<input id="email-redes-minimal" name="minimal_settings[minimal_redes_email]" type="email" value="<?php echo $emailContact; ?>">

			<label for="skype-redes-minimal"><?php _e('Skype', '_minimal'); ?></label>
			<input id="skype-redes-minimal" name="minimal_settings[minimal_redes_skype]" type="text" value="<?php echo $skypeSB; ?>">

			<label for="facebook-redes-minimal"><?php _e('Facebook', '_minimal'); ?></label>
			<input id="facebook-redes-minimal" name="minimal_settings[minimal_redes_facebook]" type="url" value="<?php echo $facebookSB; ?>">

			<label for="twitter-redes-minimal"><?php _e('Twitter', '_minimal'); ?></label>
			<input id="twitter-redes-minimal" name="minimal_settings[minimal_redes_twitter]" type="url" value="<?php echo $twitterSB; ?>">

			<label for="googleplus-redes-minimal"><?php _e('Google Plus', '_minimal'); ?></label>
			<input id="googleplus-redes-minimal" name="minimal_settings[minimal_redes_googleplus]" type="url" value="<?php echo $googlePlusSB; ?>">

			<label for="linkedin-redes-minimal"><?php _e('Linkedin', '_minimal'); ?></label>
			<input id="linkedin-redes-minimal" name="minimal_settings[minimal_redes_linkedin]" type="url" value="<?php echo $linkedinSB; ?>">

			<label for="github-redes-minimal"><?php _e('GitHub', '_minimal'); ?></label>
			<input id="github-redes-minimal" name="minimal_settings[minimal_redes_github]" type="url" value="<?php echo $githubSB ; ?>">

			<label for="pinterest-redes-minimal"><?php _e('Pinterest', '_minimal'); ?></label>
			<input id="pinterest-redes-minimal" name="minimal_settings[minimal_redes_pinterest]" type="url" value="<?php echo $pinterestSB; ?>">

			<label for="behance-redes-minimal"><?php _e('Behance', '_minimal'); ?></label>
			<input id="behance-redes-minimal" name="minimal_settings[minimal_redes_behance]" type="url" value="<?php echo $behanceSB; ?>">

			<label for="snapchat-redes-minimal"><?php _e('Snapchat', '_minimal'); ?></label>
			<input id="snapchat-redes-minimal" name="minimal_settings[minimal_redes_snapchat]" type="url" value="<?php echo $snapchatSB; ?>">

			<label for="instagram-redes-minimal"><?php _e('Instagram', '_minimal'); ?></label>
			<input id="instagram-redes-minimal" name="minimal_settings[minimal_redes_instagram]" type="url" value="<?php echo $instagramSB; ?>">
		</div>
	<?php
}

//funcion de sanitizacion
//function minimal_settings_sanitize() {}

function minimal_wp_admin_style() {
        wp_register_style( 'minimal_wp_admin_css', get_template_directory_uri() .'/css/minimal-admin.css', false, '1.0.0' );
        wp_enqueue_style('minimal_wp_admin_css');
}

add_action( 'admin_enqueue_scripts', 'minimal_wp_admin_style' );