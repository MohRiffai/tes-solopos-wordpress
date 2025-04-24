<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tes-solopos1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ' ;2,Y=)hXOc]ln~]iu8,J1@kf=G*x7Q>EGoJxn<QI.zOrJaN7(?m+^6KV!?Emn%A' );
define( 'SECURE_AUTH_KEY',  'G,$~8adI|<!m)y>tfageI q0(GMv!26hQe2r[7WAJ3 PU`bhS[*+M<xD;Yt<~ <+' );
define( 'LOGGED_IN_KEY',    'Pkp0>kUCeo?Ceg}:Uc$]Udlp?I<<^s;Lwljp1]*,8s`0<@:$ka]B>-Z0JV<{JI{Z' );
define( 'NONCE_KEY',        '=@N%<W[:?u+ClFgO  Z(5u4b7V8q3Y(2nU)>KREx-rs}i-sAFQQy4,;6&Tz73wy#' );
define( 'AUTH_SALT',        'zR#<Ukbe~(Hu3=6^`lMS50C7vHOr3=h`&g^F.JeG9e!m,4d0sGs6>1-f}Ege{P=z' );
define( 'SECURE_AUTH_SALT', ';I<I{uA;cu%b+oY)9MH-[p9pZgq0!n=J6YjM_uvF931I#*8b*C=?e.9TQg.!tVd%' );
define( 'LOGGED_IN_SALT',   '}?.;5.)Ndfu2kqY?!zKyMLHKY4DgeJiu~[EnzPK!Hb1rl[/Aq-|>;%3Gt-<X94.j' );
define( 'NONCE_SALT',       'jId^obT1]tENKTN$=vZDLcGL%:dT@&DX^!tdBa12#I#`-YoEr:[_w.vQ1P5qD0E5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
