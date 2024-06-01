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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         's9p8k&hHDvIP*OO4l;?8IzxZ~v<_7k|I.NTG^4A+v;`NinLL)_qZ^y@ZN9I,yk`%' );
define( 'SECURE_AUTH_KEY',  'f#+0$SLii0~O&hw]j|V.f:cO-}zpCX%Pdg(.?3We{H}/!;Atxxcdh*~8-<dsymw+' );
define( 'LOGGED_IN_KEY',    ']LMwuL?.lydT|kJc.j]Sz15@VL3|}gTb~o64,rr ;3R03/O|~L_bb^5;CCVGtTnu' );
define( 'NONCE_KEY',        'qff^A!O7BnQs9b3-x=wZ^.I0yh_GN%d]b,TVmqmv?Nu1fjOB:KDWt.lKX=I{00(1' );
define( 'AUTH_SALT',        '%YwX=jR`u`Jq6[.n(i,hP>,[&w~|K5+SxpD+kqANFl|no.Qcz>,{F?z`~Dk+Xd~K' );
define( 'SECURE_AUTH_SALT', '|2<yO3H$z$jvzGmH`Myjw3`gS`}/UF)`.DH>!+a]@|#0 F6D>~N?q|*vM|/:5laG' );
define( 'LOGGED_IN_SALT',   'G&Ac*7?2i5bw!|}QB?<Np20=}X%%74+B,}Lv,Ykh|1u)D2Zl*4a.~K]tI1g:6xQv' );
define( 'NONCE_SALT',       'HmItNzNs}_xDMr*B~YH)ZZ=WTn-{T.an=7<v<`b/RWU;oEAxcV>26 $ez_#&|-wm' );

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
