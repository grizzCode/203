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
define('AUTH_KEY',         'o/sTPsETMQjqS8zvFfqiK2C4AeShCITEzkfQ3L6vYew0bZcN/kRgTqKVgfj4/oe/5A1QsW3b7wLBfKvnMLiidw==');
define('SECURE_AUTH_KEY',  'S1ZUK+EosBLdCS5owKAIpFUF/MvwBJDIig1/IhzqbSGWY6R7eFOQNZ23EQXqa39CAxqsxaZNS8XUd6Lk5UDpnA==');
define('LOGGED_IN_KEY',    '7sbnFy88gmFLGTCjHhEYGXv9v6dDdjVEKTue0EJuRN1Mqv+st5CrsLjTkNdu0oANGnFDpWjOMZ21cQEmiU49rw==');
define('NONCE_KEY',        'uhIPa0UXcrTC5NkN4K7NYy7uGHn1g1clXmImKEVIdTBckIyRYHWhcNm2925PRBIe6eg2tj/5Um25KRQcMPKmyA==');
define('AUTH_SALT',        'N28lMxlootZ+LVCOrG1rDeqKmSPhRZ80N0toilxt7Y5l8CyMSLdlASCZ/ZStqyrlfm1vvJQS45M8A0hFyWG1WA==');
define('SECURE_AUTH_SALT', 'H+6K3VxCP1i5V/b6lcTOfJ9RIQrfz2BuNl1e2SvbJBYBvjyZiMNc5jW5tdrIYIZEoh9cR5h2ooc+N5iMcdZgbQ==');
define('LOGGED_IN_SALT',   'YIJhJA7BqmnHDqVPpoZbu4mruL8rgXKTeYhE9GTc/wOfu6UP4uqw/E0DHyt71tnF2FFadS6KZG8f0P0wHGI/YA==');
define('NONCE_SALT',       'F/4PJt/0JnpsSbxcTaGH7lD8Z/pZukHqEyrLlj9CjGu5tuBnZjxLGkVWNXI4tNVE4ykpGKo3KDQBXzRPQjg3Yw==');

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
