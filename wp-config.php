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
define( 'DB_NAME', 'bai2' );

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
define( 'AUTH_KEY',         'Q_9eFlK2h&ioMG;P)n5v+T/R!l]6+s4?#*U89jm{nS.]in~4|wz*L~bG4WM%=|+t' );
define( 'SECURE_AUTH_KEY',  'eNV~v5RG{%h!hNy@/R|Y11{8vRue&O2@;EMQ>HL;tRH#5CjHO]ag8OQya1#b_ES!' );
define( 'LOGGED_IN_KEY',    'V-8(Qb[cdZ(I*pA/R&m|Y%i.NWt7WR`qt*5m%o;- W0Ruc3kyR6+R<f|xNi90J -' );
define( 'NONCE_KEY',        'f:z;S#ZTaidh}vUNSH%oNB0J_frBW[{)_LXz=3{Vqq}[9SSMY}ifN_|3HH4h*8jA' );
define( 'AUTH_SALT',        'j8u/O}.3Jshr>U&R<-!yh/Cx}Mtk Eym~t@;@LU&6M7n%N;M=`i%-Y!m]|ei-~l<' );
define( 'SECURE_AUTH_SALT', 'Oou/]OPn+L?U*B@&]|NvK#FLxiq]Zv{Ea>{o}pmb(e@[$.5{{qd*qWhuVbks`,BK' );
define( 'LOGGED_IN_SALT',   'WW[Y(:Xy,E.c4=N-@$Ec-]AE0Iw*E 1<9~KW8FYKlV`j4^nH.os/D|5L`#e&:WGk' );
define( 'NONCE_SALT',       '#SJVS(hPE`]hhu) hm.,OlFx{JtBHgC#^nd1E,kyBNxTUe!kidk=,;+*iBTe96J2' );

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
