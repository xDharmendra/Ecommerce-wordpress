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
define( 'AUTH_KEY',         '5=>C}8ya6NHE`WUb&R|R( k!alNL,wyP(!ciT}j.X-WS]$_aE2olrAQpBPxnIppa' );
define( 'SECURE_AUTH_KEY',  '&BP,O zV0j` imO)v)%-eC|{i}at5g,9i%n1El[|cba<M|qf#L=4bB#}J-Zi>(dp' );
define( 'LOGGED_IN_KEY',    'T1?G6KV2Ofy];9/yB?a>BQ*sWGcS+TxkXx [ o26:d,ow(ZiGw^^=4Mv7okX%hA5' );
define( 'NONCE_KEY',        'N@{SkXK{eM.`-S.#I]w?52p@ZlZ!<vH<j`%z?sf^aI6d!$2K[.((`hPz2FQ3q{q5' );
define( 'AUTH_SALT',        'i/~^v)J1Rfd@}v}qfPxf+He;dMc3prQG&nZ@v-U3{eZ![H?)t#~EcW8UfL;dpHsW' );
define( 'SECURE_AUTH_SALT', 'Z0zAN:!Xsb.n[@(t0,S#p=<uMColPWu_>cyKH?^MOFDy~>80@z[=Z7/n%Crb(Kl%' );
define( 'LOGGED_IN_SALT',   'J<YRni{eZ!jz ~BF^gJs0UpTHE7={pRp,WZDRmxbLTH(,];KMW^c%&o7=1ByT8;G' );
define( 'NONCE_SALT',       '{eav}-9GBlMdL_GXk=4q%w.xLm.05zc>F+koXf]:ty[DfeN>x:w!K8G_W`)/7NSa' );

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
