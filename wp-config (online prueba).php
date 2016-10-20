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
define('DB_NAME', 'zp000350_lqva');

/** MySQL database username */
define('DB_USER', 'zp000350_lqva');

/** MySQL database password */
define('DB_PASSWORD', '64doliWEke');

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
define('AUTH_KEY',         '8}cP399Oq-gutd=3&R#AHPWc?)XL8*wn0Kq+aW)JG:itB_x/1CUh.xysg0xg_A:k');
define('SECURE_AUTH_KEY',  'ZLB^-b`j7j?C,)EuQ#ke[NG%ni%*d6D5n0/%Ff:GgUZ2T66)vlqviD;)&{}).:5=');
define('LOGGED_IN_KEY',    '^0Ni{4X->eZv(Ngf2,C-=5/HE[YOj29x;3a]W-]*J3|jdD~Yj.jjBwGX<~dmVztD');
define('NONCE_KEY',        'ETw>,`h`.nelLhVY$z!yRr}u@Ji@nTl&TL*_nRQS>a++tU@.zgLo$LV+{<ZMFm|~');
define('AUTH_SALT',        'x);*4,~bP4H0YT+9h7^i]#*j#`!wEE~.)^GkZ>TTS`=2yZ.@mtH?RiYy|e@>o+s7');
define('SECURE_AUTH_SALT', 'M8BMw`:xSZ{Y^-<V5)9kZ!MKnP4 f{~T)?uk*3D^VP*r(t+2%Jbr/nAUC.-g^:nG');
define('LOGGED_IN_SALT',   '=K=O]wo2&=Ar.Xqy+B[s:N[gAC72wODP0o>ld SWywvzc4zYr5Xh{tx8=iPc:q$/');
define('NONCE_SALT',       ' >=l54-gp*qI*MH[otfJHFb{B=V~f4YRLrO|Z.3oc8O]5++A|;,]4qY-c7AuvCi4');


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
