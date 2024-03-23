<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'AUTH_KEY',         'Vv3oYo^!9%uP_u%F|fS0&onk8S[ybPz.}Oj7E~J3j@&t3h3dkopVl->]m96 k3c&' );
define( 'SECURE_AUTH_KEY',  'kuO9K]w-1X0qf5@96YLOB2O{3$9cV(e<*V%11e,=%kVL(8#1j%K`_Yz*|d=w_M 1' );
define( 'LOGGED_IN_KEY',    '](:xka5|9Q!magTI|F#B&je4X+x)bI8bOk$RP8}|bp/:|LW4i&q_H3,1`+s,egeR' );
define( 'NONCE_KEY',        '_EOm}59o nj=Bk2H_p/;!K^uIQ^9Ed{*}<Sw-=L#Xw_n#AC~ p.0rf1^}[je~!AK' );
define( 'AUTH_SALT',        '@{s0CZ{DL[<C%m*)`m[9WOuq1L2qKC0w!p}H]Pyy$S-.$B_!YobJ]b.re&qPuizy' );
define( 'SECURE_AUTH_SALT', 'wz.hdt6PYt5cZ.P`BvHx)6W{oFcSbf~e|A$A!)maF`lAp*q#69]g;|Vpkyu{L]QR' );
define( 'LOGGED_IN_SALT',   ')+a,tA[qsrCTzByYrzUIF!sj&30WOzqI*O/qodiUn5p!~vsv$,NHX2u9|1tY1>zQ' );
define( 'NONCE_SALT',       '_|}7jj:HHiO_C76eJ|UWtGkPwWo@.^7jA!/5C]g0:3)RT2-ZEAp7!.E*.Izoc?QW' );

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
