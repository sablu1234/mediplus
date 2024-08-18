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
define( 'DB_NAME', 'mediplus' );

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
define( 'AUTH_KEY',         '/Ggi`}D> eA{_{?JUT7M+T%2fQ#}Otqv]u^$: x.%(WT*9H](buEg@;?T(Yc0)qz' );
define( 'SECURE_AUTH_KEY',  'G*N7t@?z6)paza%d}UTPHX,f8]>!hW16>c034!czQ{sAk*&X7gh)DWu#E%+p0/Ed' );
define( 'LOGGED_IN_KEY',    ':jd@oUJN%*&y;)}y~$S{p[UzB6l,5f9dT@`-}3#SQ)R(z{n;M9?IO>E5Y4.Ud^[b' );
define( 'NONCE_KEY',        'D4Z@ru:utIz%PB8uzi#$4T7ql`,aLX]D`!1*N]28J2t3%!Q+XvYt]mN{kbhEG5u+' );
define( 'AUTH_SALT',        'D0FgtBihvE/gVj</i]U`Cq}#BoGI_07O$1-]Y*Hc}aoWx$y@M1RcFR,*#Z>[|yp$' );
define( 'SECURE_AUTH_SALT', '(O)D+=g2v}ACBu>2~nzxO4~j1`|HEC9RoK,/P$5f5`9as _@^J5w2ierSzqwt$?$' );
define( 'LOGGED_IN_SALT',   'P{FGJ}~~Afr`W!Rx3Mw8UzCpZz{bdQdshN.g_Tq:{:a)AT6PSos:]pIh*ZV%xCZ`' );
define( 'NONCE_SALT',       ')#$!;d^)OR#T_v`Rji*p0!wK2,,#nM(.KUa7y*HU&uaUmk*X0>@V{#Or8#$j913}' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
