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
define('DB_NAME', 'wp_task');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'inheritx');

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
define('AUTH_KEY',         '-zd!c1LGA@|ij7.>99H]C;*Hsk,HiQIkRd0Ie5}q8`;C8(R}<{ysI]LYFB??zs;d');
define('SECURE_AUTH_KEY',  '8NmM@0e-=`w_sBTm5F@J4i,ohz1L-Y*7QW<F.N6hZsz^atAr8rF[0F:Gx.GmfOlF');
define('LOGGED_IN_KEY',    'zJa@R3EZUq.ulGrAjI+3U<S`,+-S|q(NZig.8@R$j!-F9xO&?xx|,U&30PQ*F..U');
define('NONCE_KEY',        'GxnHcZN]eRW|?(t *W>YUX-%Gtap]%$5n+Tk9#j6|Wj(S8+TNoIP%oea.`CO`.n#');
define('AUTH_SALT',        'D<l&<Z435%1D7%H77iyLQ,.hxC=[f&v/yf{l3[Hgt~]o/z6Nh+D8Q29yu@zxE>7D');
define('SECURE_AUTH_SALT', 'bzog4iV=DzsQ/P4`4|q2>^$N{Fs@mw|.^a;:=r3#dg*GkwaHj?QAZXD;|eXg@ p]');
define('LOGGED_IN_SALT',   'c{?)FR}B4UJoxl!hP_qF0oQ-Mf;B#bzc?ab?/{5D(y]#K+dWYSSf>&+x^E.[!9oB');
define('NONCE_SALT',       '*B. vLZOiKQCgPMp`j#)O:|YkBj2:pF(F}O&2<uCclfe<sF3U7h?<crpN#}[9 C*');

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
