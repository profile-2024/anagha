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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'anagha' );

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
define( 'AUTH_KEY',         'L]nnko:ZvbIX:A%~!eqQ=dTKUyk}cxM[n)aZ!Q F_N/Y%q{npnC,Qcux-NXhtr${' );
define( 'SECURE_AUTH_KEY',  ',T9e(|?o|zm+iHv;VADJ)q*vE Y= }?_nb{X<?|8Y%7/,FB}_`ABv=Oj(eI`%7M2' );
define( 'LOGGED_IN_KEY',    'vQnSM-p9X1y#63YHcs`FS k6GT6#Vw?wx$Gi~5iRFcW25Ji$1XXu`DZkQqu6VU_ ' );
define( 'NONCE_KEY',        'yv|og1NAw>U%J)URa@_*W45Pvsv^quZNxP,3:<u|0nlZLh{5+wO-z@l|Zt ZAKCA' );
define( 'AUTH_SALT',        '>X2P$2WT>pj& Ad/:ac)!S/J>Y{|<Tc4!leyi3WQ5#e8mKkHXMk?k|y5Lzx,dwH(' );
define( 'SECURE_AUTH_SALT', ';cOAeC(E._D64k9Fks@EUG[,,ve<=a-pw)hfz<_W Ud+Dq-C@l~U}xjYXtdN61 q' );
define( 'LOGGED_IN_SALT',   'KjZ*-`xN }}r{9iXf<o}|+~J.f}PZ3Gm*cd}4-RAB3.+YmARbA[C]2M!AL&3oIKY' );
define( 'NONCE_SALT',       'i_;f$/G<,S1nsx=w?R!4R?1r4I!X5j7lS$+qz.@r[9A&Z4UK!U.|&GVSzTO7VDl9' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
