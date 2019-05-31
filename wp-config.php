<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ravi' );

/** MySQL database username */
define( 'DB_USER', 'ravi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ravi' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xsFA{U0OO(_X gVCj/QYUj=D%V8AO4V$wwM[Yll@z %xHv#@Mg}B}i-KM*i<$eHM' );
define( 'SECURE_AUTH_KEY',  'F!uF+q(g&U-zi?2Uq `bKxz3!yb9$i;hU0<k=;[=O$AaeiA_nV9)lhZslsTW;Fit' );
define( 'LOGGED_IN_KEY',    'k1X7h+VQOn/WgsBF X2?/E8+%Ucz? *rY`&rpHaCGBB:$f,$xm]mw`oR6J*b_/Xa' );
define( 'NONCE_KEY',        'M5knjD:P!7gg!*R3C=d{~F)r;Y#y(2yz$-#|},dCcRKAy)CP,FLEi}:7oZ:uVmYx' );
define( 'AUTH_SALT',        ':_RAgg8ac`U +QJ&x~|%S9bP9r$%7[]!VsJ#&+V1zpl07DhAUK?8K|39:L]e}zrf' );
define( 'SECURE_AUTH_SALT', '@:)w~J$.U(bPX8-Y0<+ *W)6?>Qd1ZH=UcTk]01_$.ae1IMgF==h&YD,k4Q50>Pg' );
define( 'LOGGED_IN_SALT',   'VrL>dE mj.eg!KH$]$Wf$4gg4Vr;Zr<>d]P&Tq+??4f~[UP~Vq~D8`.3#x* OH5f' );
define( 'NONCE_SALT',       '{CNZb9p[nN%*0 ERUVmU&% 2g9:BQ)=}ee-9R?}I&)}66Q.}%S$H8NE^9I;.D_A1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
