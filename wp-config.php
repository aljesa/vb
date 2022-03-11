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
define( 'DB_NAME', 'vb-db' );

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
define( 'AUTH_KEY',         '/mOe4zZtLNxODLY=Pi~}QtHTxfz[MT.d(G=p/:Jp/CS3(`V7_CoId~BGkm2HKSCA' );
define( 'SECURE_AUTH_KEY',  ';y`gNJt55*5 u.yEfZ?oH]9YsP>lHTycvp6!+:{t(L).6SP kU*`x|A,hLlY&BXQ' );
define( 'LOGGED_IN_KEY',    'n^Caeh)(:s5C>q2VN{<JDuLC%2[9!5.]S8;Tu.JG-OAxC(crobL</%ex=&yw*)E.' );
define( 'NONCE_KEY',        'Ju;4+t|/0VhtnSN-sSqhS5x7L @@a(BEtp#7x55xWm}YJ<`V_`3LcJ03ka=M[lfG' );
define( 'AUTH_SALT',        'w yCn9|DT6Y&{$jc-TaT[aTP*YT&<ZN mvB%2b/8ujg3*{$:{EXuVM G663t@%MQ' );
define( 'SECURE_AUTH_SALT', '[/jsMq$E]1NL;Yj5K+`)!~xF7H&DoVju[D0KqL-/b8B.Cc7]8R^tC>_BOe#C@v 1' );
define( 'LOGGED_IN_SALT',   '|X;.|C_>^40.|KLz`UOa;5H?:l}GQ~P%gCl/u4zurnCPR`]vZCz0~SW: B3x9O;x' );
define( 'NONCE_SALT',       '$g@E73UAsg}w[a*66W~zVA6pES$DDb3={RFD:(My[3%+cR!k%?sV3tPqRo0H]D4{' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
