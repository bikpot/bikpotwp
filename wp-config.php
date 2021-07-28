<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u816867968_nw7EQ' );

/** MySQL database username */
define( 'DB_USER', 'u816867968_7MrV4' );

/** MySQL database password */
 define( 'DB_PASSWORD', 'prnvzB5jw4' );


/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'LRTN4xshl([j=Drgg$M^6`7d.PJ IcHp[S*LjVO]5^m~2S*NIB~a1e2(~yRL(%J&' );
define( 'SECURE_AUTH_KEY',   ',-<9J#2[o)d-KEJ1437>{Myv2@U1Z#%#f)?{lJG_{,]1`hqJH#cwen%xd#P[XV{(' );
define( 'LOGGED_IN_KEY',     'F,aAbD2r+XZm=(G`LuKXOU]TT71h*g9:xnDlW Al&#sHG3hT|(5[5fWAF1&-[1?n' );
define( 'NONCE_KEY',         '?Ok]k`$k{x6LlWpp@m77LGpq8uYYTO.}DJO!?Q,tcm)A_QBRwR;23;+C0[`%%f;?' );
define( 'AUTH_SALT',         'Sc4L[-SBni^a[~b5K@?d-%4!8(EgiLj7YaU1=Nni28q+!HL3,OfJVn@ya3G87{K:' );
define( 'SECURE_AUTH_SALT',  'Qdtb28D[2/E: @g=w$(ROG$@U(-anqW5pV.@[Z!&]T=7Qn%y+v@agr6P0;7;!K>2' );
define( 'LOGGED_IN_SALT',    'hpFh}!`0f6yPsEQT.]W~*e5vXV=Y*x,pFR).>b1fJJ)8bu6JitQ@VWaA7AyEhE|V' );
define( 'NONCE_SALT',        ']phd(SS9/ReeTV$}}Tmf$XvGG?.t&Mq!A<xRfV4q05 ;z0-pG3$r,Z9yj[WbA?:X' );
define( 'WP_CACHE_KEY_SALT', 'gcx/UUw0^r?Y^UJC8{M@KKVmJtZc[7L5_m3CA|qoe^!C$$.Un(tW Et]g#=#*a(G' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


