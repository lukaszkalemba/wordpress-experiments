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
define( 'AUTH_KEY',         'z:8F:Y>JI(VQ<!|>QYjEreXDUbX F8cdx5JL$CEoN4W4L2=mYgmTY2s?1Nri?Svg' );
define( 'SECURE_AUTH_KEY',  'lsC|eB55evq:n9/f1m+%ym,I_N;:Hgl3N?-{T~u={nf*hz{ aOQe=o.H7M 3$E4P' );
define( 'LOGGED_IN_KEY',    'E3T!@ h3GvZ-j_j+2px>ls5[$Cs)~}`apQbiMt9Q&nB1aH^J=|.hm5-Pzk&-|0hU' );
define( 'NONCE_KEY',        'bY)@MJr}~_q~8[f[fj>?)sSEcAI%cx!(HTQbSXz&7>.]_W06>C5F?kFQNXn{+51l' );
define( 'AUTH_SALT',        'aSo2X_~ZYOSMRf)F]3M2%3X>-n%yFHd;9pE*tu3|2eC8w$GK~9^b~qX}0#7%,hl~' );
define( 'SECURE_AUTH_SALT', 'B:jL_(Z@47f]3GpjV@+tB5a)$$zMd4@F3k3%ZF!l7EMB<LQ]wg*w1~EFsl5O~Y&1' );
define( 'LOGGED_IN_SALT',   '`]r*yr{`uHkG2r!,uRzRbl6X/,SvC0KhZb0<O |i[82Gr<Ro<je2}2=^!^MKIB$,' );
define( 'NONCE_SALT',       'jyw)+_3&F~.b=5,`6@f]S$Z*2Ezft/[Q#VNX3[-Jm,[wL]^c):1N|>B/1Yq.Igzg' );

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
