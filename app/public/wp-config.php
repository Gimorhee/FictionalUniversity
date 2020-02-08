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
define('AUTH_KEY',         'Sf5++Rt06NXIvakLDyD/IdMFqEGvwTUtLpy4RXgDr8KzBPe0B8du4dVWibrQAo783sQowmaRilD1jgT0N2XIQg==');
define('SECURE_AUTH_KEY',  '0eqgyJq3ORErf44D4KgMjtxygU7tdloUomd1Xz8LTCG/MkpdQauESHK3a12zCXAZdR4Cav7dpUAgGPtbUlWJ3Q==');
define('LOGGED_IN_KEY',    '6QAxaMS7QkuBUDa3YRbebCtduwJk/hzKdFSXN8Sa8B+CK59jo4cEV92CA5S96HUnJR6v/If0RuysZhh+Knn5WA==');
define('NONCE_KEY',        'o4P56cxO2Cb8NC2k+JvcL7kJhkiY6JOiWONNhaWX2LxrTUfWi/bOlcyR2MYlo4Nkm4fGdzHAz5sGItGxra1woQ==');
define('AUTH_SALT',        'uyCZkQT1OlFoN88gVGw6VJ9KLEFKCVImjvgNLx22T4jdjGxncxBxOyjXNqvcHSnxnmZVPyevjlgzajzcQyrttg==');
define('SECURE_AUTH_SALT', 'MCx6EphEuSbPumS9eKHnoVUCKgD908emrCFwDPCQ1a9t3DzK13h3l3tdwKiyGNcl84un6/fh0t9z6zsqedJTxg==');
define('LOGGED_IN_SALT',   '9faZSowGgmhZYqxs9HdhfkD88MdBIcdDDwMd2KUjnCCIB80REyrhErcbtaw1Jgvg4iPq83sostBE+W8Q8NSFVw==');
define('NONCE_SALT',       'QshQb+92oFDFKx85427An4d8VcC3xxGg0DGQ8gPBC6lHuUNnt5InmpdT6RicDjLjKHGeq7cLeEkN0HPUjWoYDA==');

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
