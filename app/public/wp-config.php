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
define('AUTH_KEY',         'tTdfYPLb3FU/p0HPowN1LOvHQI9IEG0E780Xdeq8H1FvS+CNphG4vaD1HvVsbYBOqSo66HmUfw66uLX/WVoEqg==');
define('SECURE_AUTH_KEY',  '0O/KQef2yZTWwQ0TP/rVKvSB1rGG5bs4sSMVDkc5aiBhX/KNLy4zj0t27bgeGAQtIu9imxqkIFuYTNNgITknbQ==');
define('LOGGED_IN_KEY',    'hBLTbIj+0KpaZHcIlOUu1S3fE8+redYbYeK9YCDK5jfmqLYO2tNSXqDAotPXMwXIYOArqpAi2Q4LI9ONE6nATA==');
define('NONCE_KEY',        'PVCmXfgzq+cL1tGoRAmMePzPALpgL8/AT5xLJIlMSm5PKXg6+BMrQknAVqfoGqE/K12SgkClwG5rOe6QIAwaFA==');
define('AUTH_SALT',        'fHBNa9l4KtD6uX4uXP2vZKNSbZ6rtu1/zra/c/fP2KnZI1jgdAtlR3NKL2kiyJvQ1/u9aq+yfC9+DpScM0HxTw==');
define('SECURE_AUTH_SALT', '9HeDNBm1fKgavBMXwdS65hIq6tTSZMB0HaQo3t4pYZgyjcQCkk7nK17A81rFa4J6c45qZLCI1SmshrLoFXhOKg==');
define('LOGGED_IN_SALT',   'iZGmiPPi1XJbeOqOZ4s0YV7Ahd44FVhyrAk1mJumPk8eGwq7/36aCQ4d/Qeruu6Sbt4XN2T6Wfc5ej/lwXr0nA==');
define('NONCE_SALT',       '5oW1Ez0r/B9FwYAkuwPcOdAQJyHN3KlxHdHCuYK/f+XjoE/zbJBUP9/R+fLuCQj20N4TeNbIjueaMKh/GQ3Xfg==');

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
