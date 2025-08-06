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
define( 'DB_NAME', 'iti' );

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
define( 'AUTH_KEY',         'kuVo^{-0{a*eM2j2sdp*eJ .vqH4 _.(s1nkj`/Vc%ESmBP<i]!#HSdz)UBP$wF@' );
define( 'SECURE_AUTH_KEY',  '4Lc@r#=DaK_uk`{C6s&4|gMCgdMhN5u[`8r}8p2_i4.m7~<s~-X-KY2b[e7W}%z8' );
define( 'LOGGED_IN_KEY',    'SuE#_.FR.IIlUI99D0A!=#gCU<9z3Xc9wuFuJ!JI1?s t<IN &KjLboI?ZNM@BUw' );
define( 'NONCE_KEY',        'i+:O*].; `%{l|>woFPMZl}OnYklQcYo`_5s+_!2q547/^x03TIKFVd?$tY_#!OV' );
define( 'AUTH_SALT',        'bNLu+:XB;_[~uPYz#IQFil9.2tnb7LL({08A2/TT42f[!u&>YF0$n2I_rUSZYRZk' );
define( 'SECURE_AUTH_SALT', 'w5G#e<xm`iM$h~(x{n?a@W4)fSlS7dU6F[CENlU9)o`gG!-2F>QU8$o^e,Wc5<U0' );
define( 'LOGGED_IN_SALT',   '2{y1SQ9Y14UIel79]2n,[ioRbOK>aWH^!qs5dn+V/P.OVwNSUE1dWG5}:0/ <PFK' );
define( 'NONCE_SALT',       'BjEs%Da;Oq5_LoPy_:1,yWUZc6c[+8vBbrpP~1*u7=o%6|SjgU@KSjg3CbkY%8R-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
