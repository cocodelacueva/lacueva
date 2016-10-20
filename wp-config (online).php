<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'demolacu_lqva');

/** MySQL database username */
define('DB_USER', 'demolacu_wp-mast-co');

/** MySQL database password */
define('DB_PASSWORD', 'E,vBx?k(kwW&');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[h1g&?b&&hxZlNVA_^1Rr)--aMC20m+y1 >n*`p+Or4-3?_a@-J#dOZ.z/[|wn;}');
define('SECURE_AUTH_KEY',  'iC~wl%jh.py7iDe-W@s%AcBEI|y82oM^NY-Ogkd5+SvK=0fitHPlfps>;&se;-/4');
define('LOGGED_IN_KEY',    '!hnAgVW;!wU:Km#d^|^rJnR1FSM i~lre2^pqJNEWRtbG?pfpy[_SS`_-(|kCO/S');
define('NONCE_KEY',        'bG^auII=.K{MDK-?F,@.szW;~ kO>!ehtow= 4m5)1}aD_c?+E`Q:%tY3eHAsT= ');
define('AUTH_SALT',        '-P5o|NSgZ,ElsJMfrpu,T2O6j1SGVQxx(>8DSr5xQ=Cv-*&6MDntJ{*g-2_,~_K`');
define('SECURE_AUTH_SALT', 'XtlR=~Dm/Ava>2x@%{Qj y%[IQ,8{P|wG<IZ:i~$fMh`cSW=#6e#>{f9`OcK!Y%a');
define('LOGGED_IN_SALT',   ';Im!|]r;=,?ow`F#93Suv^5q81_[/+%>BRGY&t7^>ZxZ;ERB9;./dO-TLisKV&.d');
define('NONCE_SALT',       '2gyc3VE YGG2fXK+-%;p}6I=,92!V-.vU{8tngtc7a:4{j8-aq0w=%t9U|V|D?iM');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lqva_';



/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

define('WP_HOME','http://demo-lacueva.com');
define('WP_SITEURL','http://demo-lacueva.com/wp');

/**
 * Custom content directory.
 * 
 * Use a content directory different from the usual wp-content, so it becomes
 * easier to update WordPress versions.
 */
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/core' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/core' );

//desactiva el editor por defecto
define( 'DISALLOW_FILE_EDIT', true);

//quita o enumera la cantidad de revisiones guardadas, en vez de false se puede poner un número
define( 'WP_POST_REVISIONS', false );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('UPLOADS', '../contenido');
