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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         './-PIJJFZ$oC!)JXb?++MUIl,51FNsX>Q1JN4ZQxjnA{s 6$o~;{DHlDqKd$$1Rx' );
define( 'SECURE_AUTH_KEY',  'w_bk}#%Ac)tt]a)ez.bGwc{`f3pdv?HUZ.G8-zPk25aDU!=_WM#Is3yhB`,>gpak' );
define( 'LOGGED_IN_KEY',    ';K_ 71Y<7;eGO:I?|@hB.2KV&@8jOZ.A/U*p^ZVOlT%nY6Hh+W@_I9WN)yR3%I(9' );
define( 'NONCE_KEY',        'Rm)<,iD/T4<Dkkp_0]vly9Iua/U+EYarNe+Y1H7V!]HTRT|>|%:P<vS9c`w9k%mU' );
define( 'AUTH_SALT',        ',p++Q*6sei5R&d0Wl9Uwpi#_H7&I##[NUrMv~3_#@*akPkFv4o^8?I6JgHjyKC,D' );
define( 'SECURE_AUTH_SALT', 'a5T[1-O{e<$Rn2` osA;8]!<ct;h4t-H81]UxwX:`hGysI%i5i@- 0qt_UWwi:n~' );
define( 'LOGGED_IN_SALT',   'N1~,%+^ypuXS<@dLr$`LRlN5a3 ~DwkzCW6wqCc.iWM,Jq*Q.zsAF4[=y&?r*<3&' );
define( 'NONCE_SALT',       '@jC5=!^ ZbH9FWkBNpOtVj4T8SGh08SFp8ND$XL:0Mi1ro :g@E:x0i&}ot;;cXo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
