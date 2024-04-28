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
define( 'DB_NAME', 'pinto' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1dv7cpvvszRfvjTE' );

/** Database hostname */
define( 'DB_HOST', 'devkinsta_db' );

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
define( 'AUTH_KEY',          '7GQx7e?>Xid `Qb3+m[@s_Wht5m~8/)dWw.I[:!2~TTz-:=^lriI`Aj]mSuF,;M@' );
define( 'SECURE_AUTH_KEY',   '!xp1RQG$F2r_}nyf&-x`b/HPl&d7:@){e-O=&cNjW|T03o$hA070/RvE$a8?+fOc' );
define( 'LOGGED_IN_KEY',     '|6,P-TlgO/k^Zr(Nk|A`^K=@/dJ6#F][a-~YOP+fNp^HoqigDZ[ziB5Iz9xWRM5>' );
define( 'NONCE_KEY',         'Cc#~eFSPn57?SRH?p$rNYU,5RKZK7bskE6|u;+Vp$95_j{zNGT<iRxmH>0dZDZ /' );
define( 'AUTH_SALT',         'rVi2Ds0bu9V7.b>CLw_0Y|ef9F.,K9lXD[L/|F01x:=POh~xLh3>]Ek i6i->Rzp' );
define( 'SECURE_AUTH_SALT',  'i.7^ZUfm_zE+- ]^<xYzK1!9cc}mrHj4EbncM&f*xn3=CaU3xR6VR,}T?18a81Mc' );
define( 'LOGGED_IN_SALT',    ';4BV8$bf:jWzcDpl|4fF_/p:QUR66duJYZd`W-L%!P38$#1RCRb~3i9y1>8Dx?CK' );
define( 'NONCE_SALT',        '/2:e[(6#6V[tVcMc{nL.i}Tys$OC)1dD<s1<num>k(#R%K7]n*J!Df{k1]pQti*X' );
define( 'WP_CACHE_KEY_SALT', '6ZR[PdRABF5~n6eFO!pcGPp9l5mVa7%K.&Vy.Nh&W4ttABynq[p@PE2v*py%%Ko,' );


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

define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
