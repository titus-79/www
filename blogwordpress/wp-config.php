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
define( 'DB_NAME', 'blogwordpress' );

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

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'PFsUSgJgq2mr2UuAVgzgcKqWyhusaZGnWXdAREttc5Bv8SAaEsMB6fi6u8RGxixm' );
define( 'SECURE_AUTH_KEY',  'xMDUSJ0XuQzRiy2eg23GUyvoOjB2M5HsCDLCjdZ7mETqyAvnoOWoIjfgAUphtnL2' );
define( 'LOGGED_IN_KEY',    'e4tPuxIrv2oGMZlgaoYJtvZ1UdW1XX4PTQ60mOkCvRFMAwzsclrJp1w5rgm6JIB4' );
define( 'NONCE_KEY',        'iipAS8ps04VEw3sMsDxcMVyS1KEWygpU8RSR0HYAGnGYBD9Yg4JK5530eNJodJ5D' );
define( 'AUTH_SALT',        'LkMgs75cuDzngWBoCaiu1IKSh4vo5dspHbih6N98SwtB4H64vOsXzPwPdY0XD0zn' );
define( 'SECURE_AUTH_SALT', 'zuUIpdZgqqxDugkTJa9QQ8rinRWdyoPSPRYnneqY8BZw5aGr5Ujn6AzoUTodAwj2' );
define( 'LOGGED_IN_SALT',   'Nqu6yJS54KBEJp6uHta1ASMPErwzWcSMkQhbNRdpnkhRvAFoO3BZt4AAMrHKth6Q' );
define( 'NONCE_SALT',       'oj0iu2SojXoPdcEA6DQB59bEVFuSLsWoME3bYMjiGlO4XbaMOnFiNRR2BaqLBJvd' );

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
