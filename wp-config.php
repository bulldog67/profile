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
define('DB_NAME', 'profile');

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
define('AUTH_KEY',         'I(eUswO]i;hTsw|?|Jw50rN3>1B5r-TGl@@7ac-E~q7*-Q@*K7k4:vqDKDEur D_');
define('SECURE_AUTH_KEY',  'fu3BJ*/&EYmTq{;/2F6v4mXY+0HA@v4+EI[?|.&-3?-4ZYv3Pb~G_<zv@<rnL! Y');
define('LOGGED_IN_KEY',    'zK_=VaSQbH8;(x#rCj3&EBVkWe;l7TIEu<OBR9ydfNAr@5@T,YLL&P=n6QS+*]M]');
define('NONCE_KEY',        'W*iXf/Yp-KA.)U(7x&[@C2:qdD`[+m02)|l68T(^!@Tk+* imH$)Su%L$.fDc^a5');
define('AUTH_SALT',        'Ol@^jmtCvM]sv0R7JxIshrx9j`YYI}?e1<M83A<7Cj?ToOSe4!H:v}YllBEg5h 0');
define('SECURE_AUTH_SALT', 'G`;|?8Rlv{uiLx|+VB~8Znu=l`u7cl]k*4|?f@nAa!_(*c^r`l=R1L}PP=|tzmUv');
define('LOGGED_IN_SALT',   'H4;mlW$53Xz%s%oX;QyaGr^lXH`g*:.Ahn/*6;1LU_X1%#evfFeF{O)FLcGhXb`9');
define('NONCE_SALT',       ' zQfd/-:IK^Z+o}<fLw?V1D^I(A0w,aF7lD}}4UXJ=~JV=_*X A&dl{_EK&l8@]v');

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
