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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'PFZ3jK74o4AwMaSLUYTzh2FtnrAWphUwhDV6X92lhd2XxIndNvoNYj6RMUubWLJKGkWfy9bwFCW50SR0319tCg==');
define('SECURE_AUTH_KEY',  'KXlsBw6KWba6HcPBD+h3AwXcd0x5/xXxSzM5fTtQRhsb+FHqUbwpecCQp3oE5PSfuNQOFeLL2KzPaTB7gOFRDQ==');
define('LOGGED_IN_KEY',    '7MTTnInO0LEjIFK4ssrUuQYKKR4ld0sstf73CBvdlZoFZTvRl5ql4ZmGUBYni8vBCesrwswvvmpAmHAykyEBgA==');
define('NONCE_KEY',        'S0lbri2osWsHHDireIPTDh0ZShJRmA31Ww4Vb0EAGY9a+0IlYhc7+15ln4ZYcOifZ7iOWrpzuiV2nW5RLJsFvQ==');
define('AUTH_SALT',        'fI2S9Wc5A70bMf5yjgpRHaVSyhxjaiUAZIG3wSfTDwe68OPqmv5xQCgu1pUj6eJgpmcLYUZyST29BKGvzmF+Cg==');
define('SECURE_AUTH_SALT', 'HLJWVNNWY2Fsy9DIXAjSkt6qQoRCh9MX5RH80C4M0TxE6SaXT3AkId6F8AV15puu3tYwrr4sZ/mtH7u/onil4A==');
define('LOGGED_IN_SALT',   'FODaMvWynkxRUldn1+NI9ztMYhIOWucFP4iA+baAhOkh/2CcJFIBsiX9f0HL4j0+k9jWqLvGFmOiuTblHYMBuA==');
define('NONCE_SALT',       '9T49RiXMmri7k2XpNB1uEEOVf8RvM/EOHbP6bsKbzghkhvijUBaY4LuDc9ykXGalbLAVmGkfrU+UgOMx4+qh2w==');

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
