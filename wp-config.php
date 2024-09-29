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
define( 'AUTH_KEY',         '*&SSC(_D/lVjZZACQl+cZ$NtA^F.vqC%r>p).Raw`u2G8H/v^/z-xepzajL<v^CF' );
define( 'SECURE_AUTH_KEY',  '<Dz;a*Q-cFt_iO59XA@#,Md@NX!)#UX{xFX@mANA%n*B,jfD<N#RnANYkb^aK9b1' );
define( 'LOGGED_IN_KEY',    'MGpuH9;?wW8}8;$/Evx#_1xZ=xuA *i.*xYFsN3-u/F,)nZ_Iu<gM7L2(DmWEi@&' );
define( 'NONCE_KEY',        '|G/3#y+#/M_<&Pl8_1p5_DPcGQQ{jB jE.syYDHT/m5hvq r0S~Q23?iCgt&hWl?' );
define( 'AUTH_SALT',        'ur(n^~O^AWdN[(GS{[#X>v:cH>*dWF|p :Vb+>dO${R&{;,N@>{}rJ9kW|r0jSH5' );
define( 'SECURE_AUTH_SALT', 'Yq`TB(DK:CS51SdO%N)F#v|dRd6gCq(qeV{(b*?BtNA{ENj5(LmyL`~.*h<KMlBz' );
define( 'LOGGED_IN_SALT',   '$c1.h]S~(kq;L[9I :_T-%ulai=]c]7n~U<NV$o(_MNljXc!l;8]&9i|Wxz8_$3J' );
define( 'NONCE_SALT',       'fRFwv}z 1;vgKYawQ5]QT7:<4hZ8n5w_CV&i8@),DeR_H1P>UDMUgCj?r3?,o&lS' );

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
