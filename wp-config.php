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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Wordpress_db' );

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


define('FS_METHOD', 'direct');
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
define( 'AUTH_KEY',         '`5E?YP<W>}$S>}XWK=IsuXUlG3_RS03SWwJ(A7wnGTn/Pl_H2s9lU2F`^$#N!`Mq' );
define( 'SECURE_AUTH_KEY',  'jl.w-O^GfUv$J]@v+zY;7nLnhcmmv6xCFl5&5Xh<AT76meqA%Eb ={WySQh(fRe2' );
define( 'LOGGED_IN_KEY',    'SM1MKQ/R#>&y?t184Tx(oe7]>I;ASMY-efG&DTVo17Z2?+}_e*C+f5&XV{ZQ3TBc' );
define( 'NONCE_KEY',        'NInu:[!2;YC!oQ2/9jC9_.`|VsZ`jk-Q*:J2U|E(>q0>$8N;kR-RwAohXO4alSuJ' );
define( 'AUTH_SALT',        '-4Q2l<zV(KR#}_G$@;L.</>7Fktk93GtH9l5j(zAtEk6+Q4l6^v%BACqFrr3QlQB' );
define( 'SECURE_AUTH_SALT', 'w;bvfV;7KeU(5vi?|)R-%%JK[sL-cICe&^!ZRIK.Tfmcy^T.`}Y$(JhPe{G jG5}' );
define( 'LOGGED_IN_SALT',   'Og eOj89B6H }!c`a9OK3+,87<EO2H%(=+H$tfNetMk0M*yMu]~@l*i|<?#!hh5Q' );
define( 'NONCE_SALT',       '%cl6lT!PhU=r9=WT(j14^q4/=O?>0}_7Zsy7fZ+N}KGnFCqE)7l)Bb`Wd3Fbh`o3' );

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
