<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
// define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DU]hPiNaJwo95%3F?})t)lE8To?X|1lA-{F:;w?Zsug[:,?Q1%iAo3VX{J<~P^[A' );
define( 'SECURE_AUTH_KEY',  '.iTOp.,QlS_rz@FeaYTE/Q5,PU4E5^zQ1F6s@nhxgFDC -KWO+0(i,^.OHoJ|Hcb' );
define( 'LOGGED_IN_KEY',    '5^}sJpePnX|S^A<~jbz3R-ZZ3[z?SpzvfPBzzXN h8:!Qem7s#JvX7SX]*uSF{S)' );
define( 'NONCE_KEY',        'TM8!Z%;Hh<0[_IyBsE1(kC 1VpO4R/X W29cd$8vv-GdF3qdTI @1#K@orY3ZJeH' );
define( 'AUTH_SALT',        'TUnr*^c{rh>m$<*sSVk3lHF[{VEC+tpEzJlnT.3/93Ce9/i!N/ux,]SE:GI.|oh!' );
define( 'SECURE_AUTH_SALT', 'pg;dQ(,B8gq-bfi xP_78rt5fioZqoW4,()o(FIt5`nr]0(,M)2bh420rMhq:%2L' );
define( 'LOGGED_IN_SALT',   'Hno1gpf{9$v,&TO,W}b&p+t}X4Ws}E}Z -uwCz16fNV^H4HKDth=I1DI6b hHt0W' );
define( 'NONCE_SALT',       '{}PT5eMTt4N12Q!da`_h%Z!Q$;M%~Un4O GGd4*NGa41dm5X?NKS@Q~l3<~=3g~J' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
