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
define('DB_NAME', 'lacueva');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

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
define('AUTH_KEY',         'd/6gj8;rSKo59 F5Zu|a#ub*mk!kmT]?i~fB-HrTK7JFf@?s8;RjWYYG<:+e/C3p');
define('SECURE_AUTH_KEY',  'bj~<r~O/q|g-crqURSZdoH_2EJ9-`O>i]isEANlr}d8Q5Xb_+Y&aw+O*LBTG~?kR');
define('LOGGED_IN_KEY',    'TNEB1j|xQlly(+&X~@M!qPfkx4ai@+15QU(gU[i[-kY1-<f*h~<ZI(V>NS7z$7sW');
define('NONCE_KEY',        'Z*k#>_c&Z39~+3e0*yH4lj[|z||a)GL-@<|O2V%+oYv4UtSEQrW1V_O>=e=+j2uh');
define('AUTH_SALT',        'xE]I~-g0fxZ&S`*P:rDqSu0Ln84-{$IOblrE6s:[-tZeB?af|P#TL;Kk{lk{Fp:T');
define('SECURE_AUTH_SALT', 'GNF$i.w$urw!W(D#Bs[jM>r810~{b$*xzKDVqjVJ^/jH19f1sbUF *H^nYv}Wd86');
define('LOGGED_IN_SALT',   'y4D$2A2|xt fhRM(nPDyTJ{FS!ZSH;<rQWCI@N%F`zlp,L.CY?7;Nt1@<toDX$68');
define('NONCE_SALT',       'F`WD.fLb#4AI /797iugs@N1F7r(vRCrWUkZ^i7OT]W+[kM:_e.W-BOw5vR.&F+)');


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

define('WP_HOME','http://lacueva.dev');
define('WP_SITEURL','http://lacueva.dev/wp');

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
