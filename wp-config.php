<?php
define( 'WP_CACHE', true ); // Added by WP Rocket


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
define( 'DB_NAME', 'funbahasa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kebersamaan@' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oqfxlkifcuybbqtroildzc0dq2vhdjvkpc8agh8pyo7enavqxarwqrxuz9yo2azr' );
define( 'SECURE_AUTH_KEY',  'qtxwl8hioqju1ecyq9onyygonumovotu228db1z6jjewm4dicgjszsdytedf8zbn' );
define( 'LOGGED_IN_KEY',    'cmxvmtjrspu6gpu13rwijczsu9bljsmqsgnfmvk4vlxkcyek0uj5mjaua1anymzv' );
define( 'NONCE_KEY',        'ycsxm5x0mrgakpxjthpvgqcovrzuvb6wsf73xuoqo5avk0xjqknrjeiukr6v1unr' );
define( 'AUTH_SALT',        'whatb1fjo3kcybvccu4lilh93ncsynxey2sfsrph3d2wbxrz83x0las0avfqsukr' );
define( 'SECURE_AUTH_SALT', 'qk4sx8p6nfc4zkh0ivzxynwsgkwcpyuaaa3dksthdxc6g2blecp6zrauxwnszos7' );
define( 'LOGGED_IN_SALT',   'jxvmzksbjpg8rcnolfu4lqd0kmmqs9wyipciodpvjstiqjuukhypycvto12ylmss' );
define( 'NONCE_SALT',       'lm2srkxies8m7xbgquwwupdtntgfmmcarfz1ekjkjospeatyrzmgxoy6zqd2forg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpnc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
