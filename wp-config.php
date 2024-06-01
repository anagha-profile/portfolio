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
define( 'AUTH_KEY',         'x,sr1v]R|vezAG1{-Jv{?Cy]Hnd fKX]-X9prVu~cg;gc^Q,4`M~d$*gNX4l2av:' );
define( 'SECURE_AUTH_KEY',  'Jiin4?6Glk9WtjX/96|]CkU99)jO,aYY0nt1P4UR7I_kdEu1Bt:4)I)*:V1/OLUM' );
define( 'LOGGED_IN_KEY',    '`r781(Ft.`A0&=u[de.Hf~c@! O6Y@n=06%lQ23CphtG2-4cHS=/>S|wEIS%Od&l' );
define( 'NONCE_KEY',        '9b(f,YB*sU2R4 jd$D.Ga|W6PuCK(E1LXSP@`P~0|*1GM~{{2e[-v-lCc|Uvl`!S' );
define( 'AUTH_SALT',        '8a7VCo<WHCk2KAmj[E0Dz:w+_,:cA_qni+#ucqk]/|,:Y6)AusIiVUwVN-3h<B&<' );
define( 'SECURE_AUTH_SALT', 'E8i$d-}|d<,u+D)^TmaB/3PE mvJnxkCk)ty~YH^9x@E3!iN,Cs~J7SV{3b*5#|Z' );
define( 'LOGGED_IN_SALT',   'Yfb>?R1x!M^GStRx^x&X53jP(pV2v_$Qni:7MtJmVs2^SkV/$-q/-UKyOJD2+m:%' );
define( 'NONCE_SALT',       '/iU0k<>E#w)Hc2lsd*]{{VIbZKf8CsrhKL,VG>?=IfrSaldO^*Nu2<5P?HxexpB7' );

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
