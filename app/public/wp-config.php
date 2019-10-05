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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ffjNVoHRLGM4PncujNmrTgcknmdU8vwMCR5PBJKZW+SHgP5+0+BVi3wewlcm9d19janSAAlIu6nfshXabEqeLw==');
define('SECURE_AUTH_KEY',  'ehY7HhSVnOee2D/glS0GKDoBVZvHl2q3ytZ025JnopATlLkOetdijD7g1DZ+T2ezavqbc5DTSnn//pMgMBmXsg==');
define('LOGGED_IN_KEY',    '5SFXoKV+/oGuGoa2zkMo5eajIA5ft5BxcQWsBwcx1w6cBh8UUte2b2Z2fz4PeqzsaAn5v83kXmCuGd5NPxPTwA==');
define('NONCE_KEY',        'TXzLDyUNR6Q38cHn8qlbA5z5rK7kzifqIEgNymUxTtIRXhtpzTmDNqYFFrr1gQi1HcbkEdchGsqz1U5bIdUFRg==');
define('AUTH_SALT',        'Be8jUtH8szas2XDPCl5mKoLRvDLEvjE2SHtO07UHu2re8khq1+Xw+TEdhWfZcCjIpuo5wTwxjuknaqZ/IcrdIQ==');
define('SECURE_AUTH_SALT', 'gFJSKiuvhDR4o2JBUIoAAIVRkZXqUVnYG0v0qrzVvzIzIur8BW08JOxRARXjQZ+KtIVG5jEyHUNQ6tBlasjhGQ==');
define('LOGGED_IN_SALT',   'YWDbaEa3znLAP3cnsM1nbhSaEnRkaJt97RMEGjqoqKKC0yMVBzrfXha/fziA0xo6NzlKvnd9p3kzAg7orLVkgA==');
define('NONCE_SALT',       '7LlRGHfQ8HuI9mXvGQyL52u3iDK+7EogW+51+JxLanj7B2af78vkZiszJxZz43sMtafpxRy/DCxSnTf4IlEbNg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
