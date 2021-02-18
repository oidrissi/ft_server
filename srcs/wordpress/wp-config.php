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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Q)FSoYT8e$iaYa|::+C_^l&VNf/J!1v;>*9`O0<VkL*Q5Q;QR)rjx$rBG%pY1rz#' );
define( 'SECURE_AUTH_KEY',  'm{2dG8U)a[~ibL=gb$KiXXnBrSj%8B*?H}o7309~X01!z4qEHj_|m>}!1J@o+%aV' );
define( 'LOGGED_IN_KEY',    'i|baI.$>w0gZ:ZIiXKIp|*VAmB}l5D}5vBr]~@i2i6k|Cf!`^0&,/_ c[lpDwAC7' );
define( 'NONCE_KEY',        'OxlHkCjt^1(ghwB~ci7]uvsD1|^4LP[MrN#[KAK&@f2A{[ALuWqI<{$(.[;UQYTE' );
define( 'AUTH_SALT',        '+>X>#dE&:jg:oXQVHnfpJZBTuYNX[X,_U5SZcilGz8Kjn]#^bj-3gP=FAv)sPV(R' );
define( 'SECURE_AUTH_SALT', '@/GD=?Q(<J*3J=i=3du!&@QKM%!Vt_|WPyd< fg/kl-l$KDHQ5hoTz+yA{I4C_RL' );
define( 'LOGGED_IN_SALT',   '9!wGqcr|D8nlTjxY|]4>oE]H.2d=56YL] TQ=P?@]X*LJnbmCD@G39`{E`+ToqfK' );
define( 'NONCE_SALT',       'yF,9T7*( h9V81mf.-,]J~+q2Bg-iy4F8%|?9mPO;bp=Kem,3(CYz6+_tU9JQ!rH' );

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

