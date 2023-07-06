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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cms' );

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
define( 'AUTH_KEY',         '1#&_f_F p }(2k^[NOFWgo@Fu)tH@qI3WAmxYDL3;a;#ydb:^xq<~&,sRTb;D)^d' );
define( 'SECURE_AUTH_KEY',  'Xee+,9lbLY+Hz=%hwxW!H[()O>e]1~6sfW~G,vDqj8lpA>C)(cI}/:qFyIa->HcX' );
define( 'LOGGED_IN_KEY',    '_[k3EAl>_H=%EQD1P .3_ETh_e!#mug@l8JSx8_D:!<.FZ7>!h-]z3kwy s0aKn=' );
define( 'NONCE_KEY',        '?UTA?GJ<Gy2S[Qxsu+F]5b{2?{D< WnHY)3py)qLsz]pS#gB5$+B!>x.CJ;DU`L`' );
define( 'AUTH_SALT',        'e:tJ&G{M`firxbkaXjEu!iO3Oh:qy4nG5<K6N4vhO97ow-7iq}Kt7 >a:m3WBr[}' );
define( 'SECURE_AUTH_SALT', 'LuT&8=R/f8dXq^9WmW*G|ApJ)DF;GOR:|uI4|%peWe(!,RIkP$PIrO6]+`FBVmIU' );
define( 'LOGGED_IN_SALT',   'gQ;LD,ZfQO y%(GL9N:QWi:Rs.;0s(=4wjRoC3C[e%yOSTzjo3.r*x2I^_)$7wN,' );
define( 'NONCE_SALT',       'AnTo WDiHKsnn5p/#ZqRM!cPp)#Xrh)](Rre!r[IWY{nX|@1vYoQsB~^^bJPQXyd' );

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
