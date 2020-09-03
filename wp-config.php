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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_noithat' );

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
define( 'AUTH_KEY',         '4;02Z1$DHX~!Llxsqsl3^XG`g+5fozk,o3BC7i73{AvvRk`xNL>K-LkqE-nXq!fi' );
define( 'SECURE_AUTH_KEY',  '.PH]^cC$|c3@|L/3wY^_2*,P}5s zP*MnVQZcCl@6:vE@c+W2/ppYiB^.6cUP-Qv' );
define( 'LOGGED_IN_KEY',    '=G`?q$+7A>F+).LO3F,(KyU_`23t|3F>J[3oGY j9DnKi)GS<! Li-E0i:?de9mA' );
define( 'NONCE_KEY',        '`?.>{Tr)IAT~0_YH?C[MMxevXPKLUX V=QVH&uCowpSGrX53vYIl]v<8NL;V7IHA' );
define( 'AUTH_SALT',        'oS1%c%#;6z~K{c;F,MnWfVsi;Jr;U Gj)-?#@RQeo@zF$6^d},jvI;&[qs#0OJU%' );
define( 'SECURE_AUTH_SALT', '`?R5XGlKuD NpTDgIFHFzV@~0$y`2Gh)SF,wRp%&4Fno9MX}V|Xux^PLpk#k)BvT' );
define( 'LOGGED_IN_SALT',   ',.8*90@*[W&Cu$*bqoEt4-z.@Xm9m6~5@i%WdsNzZ_2cTZYD_mXVf[@/15/0+!;l' );
define( 'NONCE_SALT',       '#-VOV#uU|vB!2-+=`}944lTw|RQ~y;]nrTNV4atD9czC-%[AMAw;jIef?D#q>254' );
define('FS_METHOD','direct');
//define('FS_CHMOD_DIR', (0755 & ~ umask()));
//define('FS_CHMOD_FILE', (0644 & ~ umask()));
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

