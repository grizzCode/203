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
define('AUTH_KEY',         'LgH6uglkJQXcuedNcQu0cw0hFJSADZiXWACyeIRwJS6IRbQX8hPGE+H9pcEhZ4af3eIKpt/gklwTL4Xc/Hh/DA==');
define('SECURE_AUTH_KEY',  'WpNtttwJiCs23O0pKXxi0PxFxI681FjUChput5ff/hnaSzi2nke2vFSWNPwIOv7z8FrRe3R1lIJRBiet8K2wYA==');
define('LOGGED_IN_KEY',    'kbD1RZjJpUkLcNmvA1Dvp68rIhfCmPPvOY/vtc6Gpd4+6HAInnNY9kmvuzzVLM0Q3V4O0b63zf6gF4DOcIb66w==');
define('NONCE_KEY',        'm78P54lGFr1tCMqUWax827Le1DA+3XA9R/bkBeRTwEOrkcbaqbXgk/ypED103w8ZINtn8st1VtOt65QYAXjLtA==');
define('AUTH_SALT',        'RDpeD10gayOCcRf8hsAQ5R4MSSwofhWHNj76EbeEhmrZvizJx2515FMnGBo4b3J4jnl9AETNxwj6SfhzU9muvw==');
define('SECURE_AUTH_SALT', 'imbiZ4GkftkqAsmF+VgBUz6zWHh54h6OJBrdGSo7C+UAId/efB66sQsTSxQMxXK8gUt0shLlLFTvVEU1Czb9lQ==');
define('LOGGED_IN_SALT',   'rRJkoL6Lm/XLvmE73WmlnVu0cF3a3C8DmjxbZXu6OB2bFGpF2BTe6uzygGcOJvrmlGPD9yNNhs5PxYMBX5gadA==');
define('NONCE_SALT',       'Fa+TczA+ReJEgtQy5a3Fbz9xilZuXwtwHAVua99fyEyc+zHGCAlkT810vzVSx3gukJmrnwZhJZmXcQwhI6merw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define('DISALLOW_FILE_EDIT', true);



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
