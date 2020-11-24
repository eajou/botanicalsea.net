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
define('AUTH_KEY',         '7n0J7f2YmeKBkjFxgsd61f8RllLhyLYoII/Y0NtjbJNdU6X9ecHshXZXgnrwYGTqGM1CBn9OXvhX0WioaFzZyQ==');
define('SECURE_AUTH_KEY',  'KgjdGnmow+IzJDu95AXUKF6ozz4ypelfVxFPyKxl4npeNvhHqkaZEFohQnyNJfSnfNGS867MjjvOTuKAxaLrSQ==');
define('LOGGED_IN_KEY',    'NSQ2Yf59ygv8h+gVDtiEvYK6l1cCqH0eSEmgosGLwzY5iowmuTObna+FfJVX47KwTf8S+0qRr0Hm0EdqcY+PdA==');
define('NONCE_KEY',        'v23fUD3r8X30jzPZ2cZ3YZgz8ELtxPYQ9KCs5WB7vcNsbkw15zH+IMXVu+z/tfkfvV+uYdtJEaxGmLDYdKF6sQ==');
define('AUTH_SALT',        'cwAqjPWObkGgJTWuiunBMoa+XsFgaWdOzwXO3WNwFzkMCL9KKQNU18lpEImRLdvuLSzipxQaI28AbYVaFd6NNQ==');
define('SECURE_AUTH_SALT', 'ZhN2dm0/l1Tim8lpORl+LZRA+xCWPg95qeMCcWql9a2z9Rsc4Y8yXelMrquVKS6OnP/taeWiJIIgD1xPcJ3mWw==');
define('LOGGED_IN_SALT',   'mpqEb8v+ipClRX3xLir3LOH7Qc8nC3i4nLO0syTy5W4dZgdCw3bKOJzsh9wCmFBrLGkZwG4HVfUMOke6JZ4U/g==');
define('NONCE_SALT',       'xHkiNbFY/uG6+0cZV3MQn5evUnVeuVl8HsStEHXbkRNUxxoU8jkq3lCDfHamQohzJd65xpUuVrRuO/1c1CKA3w==');

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
