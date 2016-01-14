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
define('DB_NAME', 'sidekicks_database');

/** MySQL database username */
define('DB_USER', 'sidekick');

/** MySQL database password */
define('DB_PASSWORD', 'PTtEvzWa5tzYqA2Z');

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
define('AUTH_KEY',         '=m8{bO-LF&6J5T7 TBN//Z!0z+X6a-5v|wui-7#B&(`|VohikVm}ON.nl-O#s<sE');
define('SECURE_AUTH_KEY',  '?9vLDFqJB4l9EIwtMdz-5>`&.ylK$y#-1R8p]GNx|I)#C-L.1g(Mnt vC`;IoUhl');
define('LOGGED_IN_KEY',    '6]hP*AtPR[}JzE6k+(863s!*YY@uZ.n*Qg**M#NBuq**feKD:nc(yS;p3Qk|@BI7');
define('NONCE_KEY',        'G7_?N>fYOp~(<|/H o>M7}#X>C|;^G]t~#$rztLSDX(dT}?%!2 *d!LbQ{|614#%');
define('AUTH_SALT',        'h9Z.%z<p+7`}ow;v { h5c @3zV:`f^L( >@sU8#~y>2o{+9,+qapL(Ns$f$S !2');
define('SECURE_AUTH_SALT', '=(}JXVo[PFnairf>>l[#uehg+=A`wFi9O]D=qt<lD1Q3S)[ZhY-t!AyC*ACAK#`!');
define('LOGGED_IN_SALT',   '&%)12k3}XyiF-N^<}$_dZ!.bZ=3(Y>tc/P<0~Bk~ldT/F_ZxmzqrM!#v8iyxGy=t');
define('NONCE_SALT',       '%@-S:&|B[hTcv:ibZ.Z8Cc:EVqM/b5wMtbTA(!=2#&]78zxY|xfe}E*5jr=Gn#;s');

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
