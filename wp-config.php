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
define('DB_NAME', 'wellservices');

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
define('AUTH_KEY',         '%=<CD8</#14Zsp>=EFs6<W1QRMlw6kZCio/iqv]hiq,=KS%io8Le{g`d1Ql%Xo2Y');
define('SECURE_AUTH_KEY',  'klb_nS#7ZgJbb@ZRD44*i8dY`x;/|:6^ WVK$B-<$5x6?2*&IF.3#9TC,Gy>{{@L');
define('LOGGED_IN_KEY',    '@Z4{eSV/{I[f>.O7nDq$6CULF+!.RtX>|IJB9Q4bc*O7(NMD]5G5Rc-%!E^}rH Z');
define('NONCE_KEY',        '%V4dV,2zIL-YgQH-k}DVMnOPo7x4/DU6ZtRM!+.rrqH-/hJ^l~Mi7MT7Vw};9lb[');
define('AUTH_SALT',        '_0H80V=e]#Rh&c,H>czWm_B}oP+x`zz/lmf  ]#t^rsALApYD,tUATy>}2aC%DFk');
define('SECURE_AUTH_SALT', 'fM{EF0Rr*eTQuj7YvO+jAS.WLwFX/>yF4f~pGs4NWj_UFF2V,-P.nLP*MXxy6,a2');
define('LOGGED_IN_SALT',   'clZt9eUg7G?&2b0;ap?yeV4$yUH3v_(umpS{8ASpSwyMEgDgT.StBc3<1$,5?/Jg');
define('NONCE_SALT',       '(lTD8ZU<PIL%iPWqT+XX3#(rz  ??@2vbuCGd^q~3P4tJdcl`2QF |f)}|V7|[ R');

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
