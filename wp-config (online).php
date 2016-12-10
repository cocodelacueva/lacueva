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
define('AUTH_KEY',         '!=YttJ,U]oqG,P]m[{Gm{a<CjUyxK1I|m+~aMJ evYHN}!Wyk=aUk3Ow3,l8t1xc');
define('SECURE_AUTH_KEY',  'q6e/fCVMg$|+Bqm[++a<[pWs{m-Fj!u?,{[P@}^V1)g3EzmppnP!,m<.6#Z>.t/`');
define('LOGGED_IN_KEY',    '8.zV9F@gp!QNK6RFF#!c5W2=M|GPQtjDl5y j5y]D39tL)5p%v3`p||etX8?yN=G');
define('NONCE_KEY',        'a|x@-<|JpT^|qOYVBWK8Im&?>s|Gpo3;Kr%{lu@=4%485 + r{M!6?U*jmGH+qmr');
define('AUTH_SALT',        'JGN#Tx=V1^YM.k_1>Bd(h/^>|P@tDyG+:Z-3)L8&W01[s}%f 0s&VR->U[Gul-vp');
define('SECURE_AUTH_SALT', 'WWRo]SO/WvmrW:wD?&qZ+aizEC6EPK&oO-&doCc(>b/rzNf5+kyC*jD@][$[,,KG');
define('LOGGED_IN_SALT',   '5N_|4~M:+3Q!-BL2jO/ni0e}G+|5{VsvSO2oeP>pdl|tJ!]7NU:,<G<-m6+^s<Y.');
define('NONCE_SALT',       'Y+Yj|dBVJ<sc-g($`;i-|Iz%T.Nt$_UNm=XbzJOD55D!T-+B:R-:NLcRs6%6=Zkz');


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
define('WP_DEBUG', false);

define('WP_HOME','http://lacueva.tv');
define('WP_SITEURL','http://lacueva.tv/wp');

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
