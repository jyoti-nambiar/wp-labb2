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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sportsbutik' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'yhZ$f&,OR>_WC<%j@f&mZ|Owo#2s!^>xu-;#!hHP5jY>sE;1K!*NAT+a9z06F+2]' );
define( 'SECURE_AUTH_KEY',  '8Q+!10-%ayk6fDIq1J}V=93c<`w^Z)GVaI+#mT+pi0(lf;M/?r=>=^$3sCuE3qD~' );
define( 'LOGGED_IN_KEY',    '+T,sPo14 6<E33O:(^CiWL] u>b2{yi~zqe;B/<,rh4}4ANH,jx-!O&Tqak}%)z%' );
define( 'NONCE_KEY',        'Svb??E-<^H_{m6D^9z;EuO)|q`}!&,F/COg#kG2ywBExf;E5x%!@$TwL2+,n~jkc' );
define( 'AUTH_SALT',        'C18=o6Z{A|-G~Z{d}qxy|*x=nrU)l&C1->-mrhCA(j8`b9$_6=LEK?/ZU`;io;JQ' );
define( 'SECURE_AUTH_SALT', '^o-Q);Wr}:eED$&P|S(_;wdI?y//ePO.trhQh3bS=c2E@;P_$Vx;F9t1nXoY_jaM' );
define( 'LOGGED_IN_SALT',   'xE~LzyZx$+K5i[F.vy*!=s(v/v&iTN^Y>]Fpc.PQY))%IWKU?*I7LM*_p8cWrw:z' );
define( 'NONCE_SALT',       'n<DJ2ZF.3tgQX<H$w1[%gg*`{N}*44^BT1pZ U4Q`xK1HohJy4c7U.DzK0kVc#it' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
