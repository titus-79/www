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
define( 'DB_NAME', 'bbqlover' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'kQ$|s7+R%QH?F+*Ww`I6n(rGlyYnhz~Hr-LZ|&`U!tbn^X^8%iM-a33+>~S9XPIN');
define('SECURE_AUTH_KEY',  'nL2m{<#a~|djpG1Im+0yfg6z<>E2oB*0/eN;(*D*Nh-#9c&av^G .`9v;*$nd!]i');
define('LOGGED_IN_KEY',    'Kg]CC:o>gz{ItHj=uGi;#I%VsEs/Yn#g7Ie?D|f2?97FyqyiTHk 1K`!F-.CR,D}');
define('NONCE_KEY',        'b{<ZFn&(5Oy;lRxw0fVf ]mVEC+KxJ==<#0D8G5>_|;jZLvMo/l%N x]5DlxKSw]');
define('AUTH_SALT',        '=>tAuCT`XJyFwVTjkbPFB4,<g,v,E(Nla:waqHmnA=VtN=]p5C=+wGb 3d3-:|Rl');
define('SECURE_AUTH_SALT', 'aA<OI3q?-IXh|gW07NW-e=Fm]R`+Q,%2!>hF[Wz8v<O}]:SR~]b.y;13qcY-h2=J');
define('LOGGED_IN_SALT',   '/J3%zM630$g@V[n9*r8SDA$d6+{-6B-t[#x/iF)ctYV1]#Qz%HY0f5+,sT6!Jj_j');
define('NONCE_SALT',       '_E+Dg-7o^+nBi~+54|iMK{,K9zg/h1br^/EVw:7=-H>el/St0K*HL(Z_eY=K|2C;');

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
