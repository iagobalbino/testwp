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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'l6D#PlS=_ FKG#[/.&k_1xOpgtoG<=[%)1,kk8 P:M8v2RVKNnQ.bFT%yWn:ujZb' );
define( 'SECURE_AUTH_KEY',  'YUE.QT~Dz oymIQX.)Do:S$FtNX5*EW>`3ToX7g8;Y*x6OiC5r;+<]H`h!)=JUUb' );
define( 'LOGGED_IN_KEY',    '.P7%5mMkzFE=JtCCKnZu0y8K2Ao0miC2k)=$mNh`do_O_5*(*=d/C:r+E+c[.Rb4' );
define( 'NONCE_KEY',        'v`kp<p=Fdc]=(.aS=-Ud2vkA1eel]r|ff9z-yh(?lqt)(uu4UL)*WI<!p[V*Vfpa' );
define( 'AUTH_SALT',        ';p?>)e^8nI84SJuXAK5,xn,_~DL{sh@(tS?B1CT:ya)GGe}9TdKU@Tm^p~eQCl[_' );
define( 'SECURE_AUTH_SALT', 'G%L84cUZZv)R*^O^:,|iC57^TqXV}_~5>^y&@rTu4Ze@w#c_3!h$0c$l@`.[auaI' );
define( 'LOGGED_IN_SALT',   ')NgbzcD+={A9zB,Ai7a:jU xB:W`QI0&Nt[&8:/;PeW{Y+[45k#6o0IkDgE?9q~$' );
define( 'NONCE_SALT',       '{^w*g8}4xm4cq}5rhE o^[9e}Q_I~lmQ`j68 +*[M3O9#rTq[;2k lYGTN;qIZh_' );

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
