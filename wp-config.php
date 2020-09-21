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
define( 'DB_NAME', 'pc4service' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3tW7xpXHUDHG4heQyCLCk0lcmv7Mj6bxhslqHtGx9ifQKIjoiNIiiqnnzqUN0jbu' );
define( 'SECURE_AUTH_KEY',  'qrcDft60tS1H5I8trcMvLuGmzByRQJ2XkxdHCe4VIgE6FrdyDo8WyDcDe3vusdZ9' );
define( 'LOGGED_IN_KEY',    'etjTLS4P5ifYddOSetQKy7p8MdWvdIRjVTqGq4V8fNF47ply7IQ2pjCwuRWXp7Pt' );
define( 'NONCE_KEY',        '7b7j6zGUL3gsU0XxVy1IDtkzk8Ujv828nc3H1MczM4KamUeNqJS56Jq8eyC2Kqs5' );
define( 'AUTH_SALT',        'puGH1l9WdYMgo0nVUkVRL5u2cVNd9mx6AjvW9EbIli7gs8nITEZKxdSGqjX9GSus' );
define( 'SECURE_AUTH_SALT', 'Oihi737BPRtRbNvbgku9lip2A02R9c3d4TzJskJdVC36NC01b73RHNniklaCGuGJ' );
define( 'LOGGED_IN_SALT',   'e6TTcJ5grLatXsDrBj4oUvk3Ynfw84ylvsEwM1hIvWXT98Whsz6YSmTUfon7G7S1' );
define( 'NONCE_SALT',       '1QAl6casHxAdZJycmcg6fdkkmeQ8yk5bVQavPY0E8y9zuNe1ZdVN1iFM8C25UoHP' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
