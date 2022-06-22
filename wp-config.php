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
define( 'DB_NAME', 'test_wp' );

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
define( 'AUTH_KEY',         '@dtPDrwry2QDX61[VLAdo-a q._c_rhIpF,c,&B&F+aA>RQ-bj7= p?<{Ak&F^8!' );
define( 'SECURE_AUTH_KEY',  'ye*B?(m*|E~m_rO!5o;Wb]V]n4S4a8 uyrT.C>|;987w9QZqge.GGZUX ToV+L&D' );
define( 'LOGGED_IN_KEY',    'N+!S2 <<IB?;E9BGT<<>[MIE XMwx?vXt(36b +&ktn&L]}I|fH{d:TQf[{=H,^F' );
define( 'NONCE_KEY',        'W@s^,?Fv`$g_U~o 5g^pv1r8Os_8Hj)Ozo*JEWLyf{?f@E#wvq?~dG@N^T8B)^3d' );
define( 'AUTH_SALT',        'I?aZO/b4$p6B#F4k3Z%&U5.?2?!3D:F/01nxc2bN/V#dB65E7+9RhlGW1q0^r>im' );
define( 'SECURE_AUTH_SALT', 'H m:Otz5F[`i)*@LNDR+jzioe7XZR(.=U]Dz:(e?tb&?&Gwa#%&,{){yD}C-c/8(' );
define( 'LOGGED_IN_SALT',   'gJ!y?jPEokJC$_Y_X)o~`iA|I#?HE4Ufs~/40?oz4*o,MMj~/s.;mTzB&f7}KtoD' );
define( 'NONCE_SALT',       'TasO]kKW7,nQOt/h^lCGw)Tt8[uh/Blrl=~u*V`[^X eo0x<KMSd)^;isr:e/:.&' );

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
