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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'qweasd');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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

define('AUTH_KEY',         'kv4%n:sL91pJ-}[+1+q5S:`OSxfA#Z}4x|M8DY]J ]0[@Aw|KJMdERbzj/O7t{mz');
define('SECURE_AUTH_KEY',  'KN~K}opFC2VB4{4RzF;0q)Ge?F^D.mhc_x)E--Q(Zl-<fZpuYKiq*/<wrp*o*ga2');
define('LOGGED_IN_KEY',    '?b%Wd=u%oZVBKB76wP{z3_-}E a)HsaFW#fX{-Rg|L#1ME6Es,%+c_=#Lo=nV>d>');
define('NONCE_KEY',        'tY0;L_K`J1qoG9%7wy)QJ}j_{AL=%!-Jd(+t>LgxySDIhIU@9N&W )#.$NEn**Qv');
define('AUTH_SALT',        'hR>O0X<6nAuZ*nCD7P L/>+mU`c{zlvBYe/|dShk<]:vP0Ts|o#]{$aeh((L1%,K');
define('SECURE_AUTH_SALT', ')OTo>^M+3^AYo*d^mN+^Q6rk)WTo~WI~g~Y_#cY-HrZLg-.8d$DWt6>F[!T]zS[N');
define('LOGGED_IN_SALT',   'L cN/0l7-9jd|Q<y$Xv|*l2S(vr(O-0a7P%7x[0.pJOgA`Xjf4ZM-.(3r~/Z:9Q6');
define('NONCE_SALT',       '(g a)OkA*Jgi|KGF-csCs]T23hq-L/k;ZX5-YPIodqsw9qM~KVPDL}P+i+q8u48W');

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
