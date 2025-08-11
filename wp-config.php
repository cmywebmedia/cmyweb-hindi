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
define( 'AUTH_KEY',         '^,o!]X-^.d3gEqUn-C=|mra6k60&, QE&+3vBreg>6b=Q1(~U-R/UMq[p?kni:Tq' );
define( 'SECURE_AUTH_KEY',  'bH3xmpt_ZY2X!#I+8cZEAV{.S*>dSRdiM$mV]XUnQvKpQ/}<!EX^Z]bR-~OCCYd!' );
define( 'LOGGED_IN_KEY',    ']lL4Q~=zF%^/Rh O#)(0^[c^4l/(|EQQLp7Wr:mhC(+bH]^#NvS1zde4+Tqy:^2-' );
define( 'NONCE_KEY',        'W.@gv0cpo^yf$4voI4^ XVMhjxU=j9Se}g>OEY]kBr5sdV8R=w$L8o!wGS))twiw' );
define( 'AUTH_SALT',        '4$LDpo0o40yt:1RAz]$^P-;P9>oiAsOu|+PCMwWF|IwK]Zq{.`f9OSG+?}.*lJ}6' );
define( 'SECURE_AUTH_SALT', 'XpFp[ |R;DTTq#V(,*.`AHWZ7ueNvo&_BBPGA@EjG0y/m//FXD`KdO,;>D+;i~yg' );
define( 'LOGGED_IN_SALT',   ':~1p~lX~4E5lJ.v6xbNQyA!3|RTh.s@,^o^Wf7UREO-[kNXPiKG]{8!>#O[FIPK@' );
define( 'NONCE_SALT',       'E^,NSC+/36<_~X:0glj3vl%H)Nr](;BlDn[!J[H?!q:b) lzNt=Taou<3K66gQ4-' );

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
