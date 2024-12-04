<?php
define( 'WP_CACHE', true );

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

$server_host = filter_input( INPUT_SERVER, 'HTTP_HOST', FILTER_SANITIZE_ENCODED );
$local       = false;

// ** Database settings - You can get this info from your web host ** //
if ( 'sadikmultani.local' === $server_host || true === $local || ( defined( 'WP_CLI' ) && WP_CLI ) ) {
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'local' );

	/** Database username */
	define( 'DB_USER', 'root' );

	/** Database password */
	define( 'DB_PASSWORD', 'root' );

	/** Database hostname */
	define( 'DB_HOST', 'localhost' );
} else {
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'u658075956_v7JoN' );

	/** Database username */
	define( 'DB_USER', 'u658075956_dViLx' );

	/** Database password */
	define( 'DB_PASSWORD', 'SxB0THelYf' );

	/** Database hostname */
	define( 'DB_HOST', '127.0.0.1' );
}

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
define( 'AUTH_KEY',          'CX|/Yg@W#/@9m8qWp`W_BBv);1nk{QAWcL 9E$4DcJ=y|&6K)KW9UqB`GvFu!d89' );
define( 'SECURE_AUTH_KEY',   'Gx5/c,_!Sl+ub ;2 #l4$k2Q&?WJR1~MjO.c]^ZM;f!>leKU709KVeB?X(<GNuh_' );
define( 'LOGGED_IN_KEY',     ',YCJ1q,X>=`?=l?ovW<m4H+h]e6gZT /9#GVOhn5qs8mu^~7Jmf`>s1-VEOR>r7e' );
define( 'NONCE_KEY',         '$R]EH9_*CIwDJDy&mj&5wJlIS@IL0If-On1K+ER93n(JeE/gq)S6yQ* j,S{owM=' );
define( 'AUTH_SALT',         ';:Dmh>kj]DVw-hqrriw[%@=OSk<9|fNC6_|ZBTd@Q&@O(3LqTH+4wSLiqXj.ZnB4' );
define( 'SECURE_AUTH_SALT',  '{o$VJw$Y]cQJA]5@#GI~<GY=HF#>.7GlfcE!v6Yh:z;>18_|5}yZ~8<WA!0gtyV7' );
define( 'LOGGED_IN_SALT',    ')0;wqCKRvR28kT/MF :^)6N%7KWoyjk@CvKQrsqZcPl/o<uLxh`E6v6W.4I5zg*C' );
define( 'NONCE_SALT',        '1dG7d+Md*>(O3,d)dcqT3F+?3T~WUOKqW:}Haam>^DSda=(6)}p$a>5oQ=!su$QH' );
define( 'WP_CACHE_KEY_SALT', ';a/Q>3~%rT C,|{sdT}/!&2sAPh0Sbk6+-2$#cl]:dNa/5jQE:a*KHR4#g{?Z&83' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '1c5b834d9beab1b483ad965dbd2c7d55' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
