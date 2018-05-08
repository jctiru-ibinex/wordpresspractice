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
define('AUTH_KEY',         '?_cc`aqn#u@VK75_D^gg{~:r(x.@5T2D`3dBzY1Bh/nf~_}T8YbaBRl4~VyV{> Y');
define('SECURE_AUTH_KEY',  'nal[}Ah};cGHY*JvqJ0^c6|W yL2xK#Ph|;YGGvN+g%7SI}w@-T!XL+a.k{D#HHq');
define('LOGGED_IN_KEY',    '<4H}fMy+xJ?4p11+{5__^>H++3tV|9d#XWY01fBk4.^vO7|Kzx}6U-1,vuKQ%1-$');
define('NONCE_KEY',        'khilu(E0U/Z<qFCi},E/Vik4Fz &tEhf];.Ze$^sR2LUT=nPbdW$f%0du!6h-2;8');
define('AUTH_SALT',        '$.NV?C|g31d{797BdX1w$^v!c,;=SxT^$$QJ%PWHL$.?avy`qpaIzyRrusW^5JaE');
define('SECURE_AUTH_SALT', 'pS}Y.EMUy4743d9yhTAqDi(u8&)vFc}%xS|J<?!S-N3J~;mXw2[AV;5Np}^)B[Vg');
define('LOGGED_IN_SALT',   '+_(={J6bc*G]ZyA`13;P7r:3W[NsT;tLMrO?Cwi|;ucbJq#W$V/B7dXBiq6W;n2B');
define('NONCE_SALT',       'Ql>[Ri@U(gl=FR74)D,${D`c~sdktPF[@?$^{D+,<0Gx8x`GDImR3cP Ile4Z+p*');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
