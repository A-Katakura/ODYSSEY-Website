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
define( 'AUTH_KEY',          'jQFI>ZQ++:*}[_n]Q^!4R^,_;a(c~Yk,JKSe}:u`py3(4@[nP@oL_V{2Khc#Z.: ' );
define( 'SECURE_AUTH_KEY',   'a<hh*T&zGW0_MUYYO 0M2rMrHf@jnnI&mwS8<T?{uql9]%E|qba q#z^sdmTV|%d' );
define( 'LOGGED_IN_KEY',     'j-X)]N$^v_;Z8ebg0<oP)~d&*q0J~NMSu3kDnZ#y/v6z C*g])_0^!9AVLbE`cJl' );
define( 'NONCE_KEY',         '^TS?L^W.0DWIfK.1r*FWJW4MO^po[Br<nOAo,coSk0LX|tPfS^v9O$!aER6={W|9' );
define( 'AUTH_SALT',         '0C  sSdwE#aUiwb^Y=L-YM%UE/v~*vHV0+t(^2]UkVz99N_PjRfH_;@hol7H#?|U' );
define( 'SECURE_AUTH_SALT',  '36ZI3k$GsnIhof5RrB>w!:ZE$xuJp5V9|!JF{GQ5;D!Z8 JZ4tbwI9)v`OJEzK$i' );
define( 'LOGGED_IN_SALT',    'Xx@-ayX}R!umrt!Z;F&HKM=u;~8:;$tqR)=z4>r[_K,G]N(/=<{{G[O5@Qua.=@>' );
define( 'NONCE_SALT',        'h=Z^V6n#jpcI.~zS7N>_S~v#h-%7.!9atjRNf-1Jo8ZyG[)<DAvQvvJ+??e@/l7h' );
define( 'WP_CACHE_KEY_SALT', ' ;P<t3&wF1T4$t*jNJ236qR!}Z`IYCi`{`26Hm8]`OG`eD2BAUp,#AII}VJxX!]M' );


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
