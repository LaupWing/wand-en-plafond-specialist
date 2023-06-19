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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('AUTH_KEY',         'e/U2OxevYnLisSevr6t1U9P8O6B90biEqDDQ7sCUAoidQN+7gMIuHpuXZArBPi28rHZNpNAehhHkZXBV4uOqKw==');
define('SECURE_AUTH_KEY',  '3PBjkwoSa8xZm5Nj4N+w7Ef/wBi8ESkHIlwQ06f4N6pdaXWxYFS8Eh7YHzjl/yVyWhkpjMxz+PduxUtnLosaxw==');
define('LOGGED_IN_KEY',    'rQAx5nng/WGFqVI6m8a5WGCFdT4IsN+kuCejmCzT8F6JOjmjy3noCHiilhdBD13dldP9Vo5sHBZ5LOUEbHgwew==');
define('NONCE_KEY',        '8y9eSSFdEZRDuy/MDwaIBrzAPlZsT3ZG8e2JUmsWqskvYy33BoOOXA3yaDqB5mS8IrsI5d6S6dvjdAc90UPrVg==');
define('AUTH_SALT',        'DSdiAExTWEFhKkv41j1Uyu2RMf31tKBUDUBL2x2rbJxaLitXS9Lu9c+zMXlj56AFgTFgd2y3FaRWjdfsIan/jw==');
define('SECURE_AUTH_SALT', 'z0dS59l1dOd5WuOLV7trBjTSSxFhPmRtZoWSgCw3Bah6uTVtEM1kvYaBdNZ0z7I/4pdbWNN3J81bRzKEJlkyog==');
define('LOGGED_IN_SALT',   'f9UAbEYSmeoxQ45YYSZ0/SsCCYTCHsCbi7ZMQBO4kXg6puKjnjkZmTz8xH8Pg3isPXiPXgDEWPGUIslZLw6JJw==');
define('NONCE_SALT',       'jZvJur2DRmxF0MKurnhJkkC+ZzN+1UR2xdXz/QxjqU/6LnAz4izAuZBq3Cz3P968Uif0Gx2+kKrF32wLmj5Yuw==');