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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'dg8svFJFrPTWtDkcw2rnaAl/9Gp3Vt957sxvlCLt9JAUJBfUzt/UR9g8tt4NVP0JPeQW/2Muh5WSeF91ytU/4w==');
define('SECURE_AUTH_KEY',  'NlC0GuCyH2n2hSZdQ0en5ZTDwjDczYfTlzqrq454hEj7Qea1yqcW1W5uJea6K35m15XRIIAvZ3dO8ADBRb893Q==');
define('LOGGED_IN_KEY',    'HOEpRokM1tfZQkSu9QO7d9+BJWkzSVk6UPOw/jx4y4pE7fxzqaoZOT2CieGmZtGH3q3Wm+OmSnhUBvutTojtMQ==');
define('NONCE_KEY',        'bX9No4w7qZs+n97mezEqJ8w48CjmINptp3+YNkCVZFlxojGp9+OjqZqbW1hYkKxv71iyxnTLDqnzrp4ROdZ3hw==');
define('AUTH_SALT',        'XKPOBbrsKVV56luTi/eySx0OXGnB0aUz7NZXEWihGOW+A6rfG0LXy2jeAnlfHzHg9InBzL06OSk5ltyqR0ZSzg==');
define('SECURE_AUTH_SALT', 'IIluSdxVDdI/ncLBJvQBvbZcJiQvBZjO6ntmqILX1CYOsdKdzlU47CMGTKdQ/POE4NDlfu9XLybnddoc3MEVFQ==');
define('LOGGED_IN_SALT',   '9vR9iHBSIENfCTB5P3iwKaREQRRtwwp/cRt5esL4CDTbpOdFdokXKW+A+CYH466F7YlQKSZ7oBPhYzdN3qNN4A==');
define('NONCE_SALT',       '5XD5uN8XeUVNANU7YtFCj18ihEinPZ2jfGkmZ8PCGnG0vFfb9g22C670rFyAQsfh7XZtfU7u7FID8Q1AGJqu5Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
