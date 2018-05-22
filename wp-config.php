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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpresspractice');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd%k**3gJq~0X+|*uH%cr[HazX,<>dI:NgYGs9~OK 0QybDYviaRTbH9!]WSo`~vH');
define('SECURE_AUTH_KEY',  '_*VI%o$es_h)u!EKGqMo|T*EbE6?*/.}<jx5Kvwu%X>_p0P5d/Y1~Kc<Dc_%u^[`');
define('LOGGED_IN_KEY',    'sC,~oU=DlDz}~D%5^:Cs?9`ZfRdgpj^n6yW?:.Mf$364!*KSUS.?J jo}oa )=Yo');
define('NONCE_KEY',        '#YJ,4<M3SeQ|K}kJz8K?`I,^vFhHcFlv|ci[.sjP!#Ur3Vj,$+QtS8e;QoJ>Y1T~');
define('AUTH_SALT',        'v9#c*&fqdoAjVRPQIKAqPcqh:!K}F=^qQ8yHG{k7`g.Q+F6k;#)t9E];9 e$t}Y+');
define('SECURE_AUTH_SALT', '4bY97X,i*6*Q5t~086FFA.E&MseQo5e`$#y0%?`e;W~mZXo9rY/:M^tzLi=xTM0f');
define('LOGGED_IN_SALT',   'K,S8mO@S2|=Ywrx|V.1F,h0j}%iQkH7i]ri$_^y/qRJ5f%kNi@Kk)S=P5hQ q+IF');
define('NONCE_SALT',       '0@uH@/q8Xu>+k|O9RrV_EOhx[Tl,)22q^+0ujubxLN^G#i@pXE:/E|jC<?SomAS;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
