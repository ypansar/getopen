<?php
define( 'WP_HOME', 'http://localhost/wp' );
define( 'WP_SITEURL', 'http://localhost/wp' );
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
define( 'DB_NAME', 'get_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3tuym70hflfdhlwbwp0g91k3ootakfxcorhl39ckgdolnrizt25z602q7uuf1jkk' );
define( 'SECURE_AUTH_KEY',  'ylxh8ranucwzoaos3phatbd1xokjlagiw0xiazvyr5onemxftuey9muiqd298lcs' );
define( 'LOGGED_IN_KEY',    'ipqxgcldtanpdruubme1uiwufxbklfl0l7izxmzojtz6gmzi22opyoqy88owresi' );
define( 'NONCE_KEY',        'psdofyzxsxojedeinzuiuoktliq5ffjoh6onibsxo3twxzavn3uprggx4w95rgnj' );
define( 'AUTH_SALT',        'eh9pwg9txraasfkd7lhwjnss2lzxzf91u5ne5fwwylztap8azhy4zorw5ohn5w34' );
define( 'SECURE_AUTH_SALT', 'lcks5cl1vfywerbr6i1ijhucinseoodlcaoxxgzplhuqyh0k0kvupau1s70yuoo4' );
define( 'LOGGED_IN_SALT',   'nf7c4htvjuldnabyrxdk2royxxmuq2oecy1wfg03clyzntgjv3rb7ngyqptzgo22' );
define( 'NONCE_SALT',       '0wbtjoepmmrfarkm6fo8yzozlzjwt622ezag0ti6zqcgbmjpwrmhew54gqde2g06' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpget_';

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
