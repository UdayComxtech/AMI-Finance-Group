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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'amifinancegroup_amifinance' );

/** Database username */
define( 'DB_USER', 'amifinancegroup_amifinance' );

/** Database password */
define( 'DB_PASSWORD', 'c.?H0&*IF=#V' );

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
define( 'AUTH_KEY',         'qgzWnUZZBsrB2SvGlq5PmADhfUdR1LZCque807gvEUrLqrgUrFjZNkx2cV4nuMw0' );
define( 'SECURE_AUTH_KEY',  'iwiAsjCO2c30nO8iswWD9Un98aacNEvD5lmEoSHOgAb92qbZMR6eEknXNsyIMevQ' );
define( 'LOGGED_IN_KEY',    'PDgt0BXjQJj9elb4B0IniCEzbWvaBjGFbQfwij3NRlbf3YsKOIJftmD1GefmwKfD' );
define( 'NONCE_KEY',        'DdiZqITI007t3QlqOqtrLceHJVTltNSe2JY2Kd6RtjSuNqDAhddxvE7dNTv8rLs5' );
define( 'AUTH_SALT',        'RBMqTfMR082zRbxUS1rj09sYrHp3gUJddVlelkFv7Vl0YObYVL91nEv46bO0hbHG' );
define( 'SECURE_AUTH_SALT', 'sVmG0wNwMXDOU0xTls2CizLwa7jHtsCUmW0DGHyAMP5G0mgOQvPac1b9kEzEngzP' );
define( 'LOGGED_IN_SALT',   'jTFwBZyRR3pP9SpRq04TBYLUeBrYkDPpOPBabBZEtAXMF4lBf3I9kgn4xAhuW9x1' );
define( 'NONCE_SALT',       '0RZm3sicV9aPlAhOuR5aUoLih7AgaN3TgJ4GHupHalQSbJqoEyB7rwyYKwZkw2vb' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
