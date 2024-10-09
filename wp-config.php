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
define( 'DB_NAME', 'dlg' );

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
define( 'AUTH_KEY',         'NfYmb3KLzr06W61EU4fnFdDhEfSyNDlnBLJYrYXII8k5Qa1RcIR6xtxglbp9mshZ' );
define( 'SECURE_AUTH_KEY',  'KrMYHGUuq0llWGRaWm6scckjHya7rEvmhxXxdvOwfrYTlXwsmiPxWYpUPaWyLX4s' );
define( 'LOGGED_IN_KEY',    'mksbCYVOHl9vqspgkxK4HsJ9YM9pgTzXJlIxopUpysv6Ny2RmCTQhNGlETFzSotP' );
define( 'NONCE_KEY',        'nC3GbcNdXmxTjug5QDY4OdKt2Z1zjOIb2yPCjLYA24vMNpfRnHp4kpTnLVChFcEs' );
define( 'AUTH_SALT',        'vpDpWncfnl95waOKIWR0oCxoyBeuIlRAxdyfpWC9uJ6a4y7edlSH88atCeqnwb1Y' );
define( 'SECURE_AUTH_SALT', 'SPXGSIlYdAS2TBepcwbd813aqkH2JvmNnLU2GDNEZgO9EOXyyLw9dJXor1bMSWrv' );
define( 'LOGGED_IN_SALT',   'op1jOjIKl7zW88OcV8g8BKtc9I5s3GbDgKhmV1WLvAaXkTdtzrpWR0b6uW40EjOc' );
define( 'NONCE_SALT',       'VY3WKT6wsCgRkEoZEJk25vUfQ8rTkQ1saIEHao6T1TvM1YspB8jKvzpNxSUvqGbS' );

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
