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
define( 'DB_NAME', 'cmyweb-hindi' );

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
define( 'AUTH_KEY',         'mWfT4*YZ=~yt,QxUp@MBk|DS<sHHK.CYpnC96am_Eu$:`Buf%/to:_M<K5.omF~%' );
define( 'SECURE_AUTH_KEY',  'sU7+j5Rtpc!F)MIOE]31igjrSL[9Ct?ZQ|sM-X(rFRSdr91)Q-m%c}W6]y4|6Mfo' );
define( 'LOGGED_IN_KEY',    '*=D=A_oX-_$w3%0 AOkHKs;3~uIUF$?mNO^RY`Tte6T ?i>TzZ-i|@:OThQ9X3s:' );
define( 'NONCE_KEY',        '=n%qjU7dUP] oKR%|p57[MsAlDYk-F1V-6Ak(k-k1W7SK+Hd2xR/JR94j]i]J%jc' );
define( 'AUTH_SALT',        'XR[vP>:@`wM|4WJh_sJ)i#!oA:jgLWo.%^{c%&hlTf-UQ>RdrUme8}[vKX6E^=aK' );
define( 'SECURE_AUTH_SALT', '(Hs`Nn+2yaiQUzP%Mbp3C<3Wm<?f|M3lU8r-BmaZF33x:8E62j4=qh531[`3f)^>' );
define( 'LOGGED_IN_SALT',   'WBvzI$uV.fj^C/KBR_3<uyk+|Z>hlg(z`h q??Q%]6cB!k}Elltmu9.PQcoRUgEg' );
define( 'NONCE_SALT',       'r!QiMJYN;#L<H^~d(n*eBhzcOwt+;3j@twqib2zZO@;~YnsHn8X~q{*v6I$!hFRP' );

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
