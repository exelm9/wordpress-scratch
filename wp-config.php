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
define('DB_NAME', 'wordpressFinal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '.R*{mA<GS(.<0=+@8eSTtex9AZj5$d(?9,e^j.TBC.*>NY:~?flPv6M]zK`ZdfC2');
define('SECURE_AUTH_KEY',  'ib;gT=qI2Q=9W,fz%f YguR<?Wu!)h*(^N7<RjNtPwUqiu]:]_e7|y_6=$K2sv$j');
define('LOGGED_IN_KEY',    'xo8%+Ng{V, {mg!3%(C~w?)k,,P5_L>Y-CY^e!&da1(QvF5w}{0fn$K @(03:?.@');
define('NONCE_KEY',        '/RyWpR}B~{oyk=Pu1W|JT]P|gg,zCyJDT~<{*W]Pf4Q$KltN/[27+(|1sz~=)lP6');
define('AUTH_SALT',        'X3E:}83-|oa}fSM?6BzHZp8~aKh@Y -y+K19:x#5eSSs]5HwCSUu)K@-RWM(i=0O');
define('SECURE_AUTH_SALT', 'A@ICYR6`~d$9ep|9T?p}EiPo)%W$ok#o*%I@I:w~K{;UzqQ|DoF_!14C nQ~viZ+');
define('LOGGED_IN_SALT',   'G/)ox $Z{hx0_ivpYh`xR{vb{J<E~r+:dd&Yt9h;?t8Ia;}$dQq4vZbK0]79u%X!');
define('NONCE_SALT',       'L2AQ&b3N:gtOC19U__:eX4#+-OA({z,t+j.L]EY9~37cfrjO]rF 9BS|}n$/@lr0');

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
