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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'bK%Xn(o2gx`8ww9,,iarzm/A!4,xZ!(IS:QKFkta!n}ZQyn=8TEcP/fiFR2MmBr(' );
define( 'SECURE_AUTH_KEY',   '#~5>j>S68fXh?j1vyC;GVW$q~g+}&i5Vu.}|}anBT ,{}xai[p/c`CZCZ3sP2NL3' );
define( 'LOGGED_IN_KEY',     'bAE[WIP{-Ier!|erE:aGD_4e7>~NL3eUH{1I7ho99HCw:?}/1]mODv yDQj9`;R,' );
define( 'NONCE_KEY',         'Ge 5F38um5yC,DZo{[?E$QGp]5Y{%HVU4&Z]36aH[3ibx(j?%hCkYdmgR_o&Rk58' );
define( 'AUTH_SALT',         'I>&/pJZV`#ghgt{[r)@sDA0!euDqKNJ)xEESF=dCq4?bW#@h(8E~cX5d7k?lqq;q' );
define( 'SECURE_AUTH_SALT',  '{`k%!<[wzd9BK+w;^(SaQ~i?.&3ywg$$ulZz!tiG>a~4-;*ReT.tu0Pl;B;X&4_%' );
define( 'LOGGED_IN_SALT',    'Y)F!_pb*3A(m3-1i&Hd<SN{eVU$#Y!-|&a{0iqL$xq*9pzPh;.zGrl{Z|-27d0|S' );
define( 'NONCE_SALT',        'A&W >j8v%;P)4EQpp_(Vhhcm{!yfE;yrG^n*6qV~=E%brB$UtkLvt*BelkZqzecG' );
define( 'WP_CACHE_KEY_SALT', 'x[5_pI&k=#IsEXx_&Km?&[4p}=<JA?>e$pv7Cz81D[7gZFEbb(]LOjFhr,myv@e6' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
