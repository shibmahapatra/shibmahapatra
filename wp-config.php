<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'AUTH_KEY',         'Z9ieOcpL,H/WoUfI#6%}Z-dZrc|?Enze)&z%%WdPg{/#0 vvrL>0q+Az$=ehp!m|' );
define( 'SECURE_AUTH_KEY',  '_7I;qzPj-fqP88E.cD>y{bDKcBvZRPu<Hd~-semt:+@j| uQkp843eQ%^!/7SCbN' );
define( 'LOGGED_IN_KEY',    '985Q$|Np$&Z2|D31Gs/KhQ:MQWu%5+E,T,[*C{fy6WmGEnl@N:J z.XQvgoYKR,!' );
define( 'NONCE_KEY',        '@FP5T:o}VIrt9AMsI.gp@u|.|54%k;H<}RPr 9O 9}6I#Omn$<D{.|uz<(9h@Xk_' );
define( 'AUTH_SALT',        't~I.-=}osY8v:m}puYxA1SL,s]_k~lk+4d!5DDMU|Y+kUc$Ep&w/-[1FFb[FFe/<' );
define( 'SECURE_AUTH_SALT', 'M +BY&`3&7 I>!^0ky$#nsR[in|+[Jau}zdD-k_5bzlYSk_&9g0<Z*2B(5HXVV)a' );
define( 'LOGGED_IN_SALT',   'd_)nB569ad<K4W+I cu,Q/t]8f0A0=?2NsS29U#a(VdT=gV(6a(7R)}NAiSv2E,8' );
define( 'NONCE_SALT',       'D0=UZewJzK]GC@ X#h`*4A4$66=Xh[tWw/$W^{f,RX7>x7V}%%O#-{hJ&?tPQf+.' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
