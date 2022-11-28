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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '~<=ui3#9a8<c}Y3jAGlg;t&NF&VCFLATRn)]7L$9roJ[SXW0p+u;L4cgsu@PXiSS' );
define( 'SECURE_AUTH_KEY',  '!!CQ:{_ h$rT#PHBA/:0r%`kzpy[aFwo!iwztCK9Db +K`@&jD}8Qz75eL:f=>{;' );
define( 'LOGGED_IN_KEY',    ';_LnE&M-*I4.t5^hn^1]PkfRASTK]}Z/A[pfn<<8.GE-E&&h~K~s@6X-?aA)N%tG' );
define( 'NONCE_KEY',        '_2J W~a%>-~I2R7M|K6$5(@P_+.$n_M1I(u{rHrOq!bA[{;@Q7dZ|uK1dPi6v2!E' );
define( 'AUTH_SALT',        'XsyAX%j6/-&`sG1x9pvp 71qiyHRV~>/SiXe.oyKv0-3ib-o{Vi7B[ SYODR-Z3#' );
define( 'SECURE_AUTH_SALT', ',%bC1)8@y-YEdSg$c4[-c50n-:7E:&Rl=u4hi+ZRENItgo1(9F7Y/;jzl/VN#f *' );
define( 'LOGGED_IN_SALT',   '4[A6#5H]Gi=2+}m~UWZ<;:yx0o+{A4v^Cnoqthd7mfoktUpBcV5NIk@HR!]Ct::9' );
define( 'NONCE_SALT',       ',cxA&TYVD$MG*?MY.h^wY&[5Qma[N:Wa$A=O+E{ P:e4&1fkI^!C3vFH3A6}JD!]' );

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
