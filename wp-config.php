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
define( 'DB_NAME', 'undangan-pernikahan-' );

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
define( 'AUTH_KEY',         'jEqmoonkKzFsOIBeX6wgbGPVgGoHOFgViUqZEH7siutHudbLBbSQootsB5a4uVjY' );
define( 'SECURE_AUTH_KEY',  '9Mp8qdhtL14RfdfzAnZaldfs04KpcDOHlkF1LEloYTPdA9or5S8kBhY2zzg7n6Tw' );
define( 'LOGGED_IN_KEY',    '3LCloRN3OoTR5m0SiR1GTvUnwIvgrKh2YAY27fD7r5LCWV8Xly3E2rqCHQJEqZxE' );
define( 'NONCE_KEY',        'QfNm0yLYHOy6zQmkF7l6Z0OJoYVnjgLbnoEuf2lrTa8i2qc9OH1wHxOa7QlQpK2S' );
define( 'AUTH_SALT',        'Ke1A8cgwKco6oZhDozmBxquFLDGfxnev1FXwACC9ll3HncVE6oWQ7HgMf9OosEFZ' );
define( 'SECURE_AUTH_SALT', 'seanGXIPsESwzPMcoB4TcsCs9uLC4gHta22ryAK8NnQFdpotJYXi4HBgUPzdoeZl' );
define( 'LOGGED_IN_SALT',   'lcnBEBdov4JwoYHv855pJKhnv0wthobONhksTb3PgxL4yc8ZZFTCsR4S383Lr0Ds' );
define( 'NONCE_SALT',       'lFB3OcfAIpKkwMjGbLK2IDISneC5R7EjG1e3pAUTJNfa0htS6TKlB8zyUHnHyers' );

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
