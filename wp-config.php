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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'dRk;Z$tTEc}4cSjN5Qge=e8S,Y:0?m`=B`^3LSF4[3%8ih&^Ej,@lH;Yj=cNgLQg' );
define( 'SECURE_AUTH_KEY',  '*Z/(6#CFXK8i)kr3tsU?}`SIaEd6_@3WD|vhYctUE7;iKK<]3T7O(Few>RLyW3B(' );
define( 'LOGGED_IN_KEY',    't6`APfEB6Bv.{0>:SVXB(+qzY$R#&h-j=1acl*> HbGgNhMo!aXvg?/A1ZxHVfl[' );
define( 'NONCE_KEY',        '67ajYb<E;W`X[*|4;!uKo$3-3Xeua:8(k{eiNu5AoESBM%G,C$$$v_gL,Pu&?rbB' );
define( 'AUTH_SALT',        'W[e|S/=U2:mB+}aYV>YX5Pa8fia|}5g0(@5m2`+`qt+:J!|3ZvN6V&LR_I6UElc7' );
define( 'SECURE_AUTH_SALT', '6eXz-4|bbI4c:6Gi6AVh{B`+zKF@ob%f=_:JLJdOH,KKw<:pX#yD5ag>xG HmjX+' );
define( 'LOGGED_IN_SALT',   'rB9DBSoh55<BVNIegW;5lD=K_rj?aLq8uj4g_k_Xs_v)lE~.g:3/;? ?rCe-mR?#' );
define( 'NONCE_SALT',       'C<L2IL${28y/}J74s2E~*:r!jpJa!hF<iP Z>DVT))fPrrvFvbYo$aK|;smjDMa(' );

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
