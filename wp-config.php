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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sneakerhead' );

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
define( 'AUTH_KEY',         '~.nrWt<Nqi%aPhyj/C(-F4oF @yb[ofnBpAJN]m^GobI6Q$nGjv/4bkgoyhqNzAs' );
define( 'SECURE_AUTH_KEY',  'b!u,3}?o!8HBE!e~oL8}53v6;cdbWrQBK|KP0:p(6:67&O.0A,Cv;2W2Qw)x7 UD' );
define( 'LOGGED_IN_KEY',    'w [L9A+`rg2>qfTK-76l!1V&>V:~DoE0/P7OTDt[(OliS}QqX&VP))(j<+?D&&<t' );
define( 'NONCE_KEY',        '#UF>4?]?oY+vP}J)m_8rF!vQx 0P>uds.4Hz*p-:g:Jh(Bm32OL5z_iWH4v=rJ) ' );
define( 'AUTH_SALT',        'y&`[7u/<^y5P4Ze}hey*|kX`U=BT<rm0_m?dMW-ufZ5~fOKax@9UNQd=kPo SN{e' );
define( 'SECURE_AUTH_SALT', 'Q v!UJkL=a@ZvP=%[t5?P-#p<r7V~P,+n,O2BNe=qP(WQ<_~Z~Z}R[,<-%X{9aOe' );
define( 'LOGGED_IN_SALT',   '.!4EZQ;jGW5zURKIh!&MpmB?n%JF| [/w>}EXzuq(A<OCgp@NwWZ>jA}afyMaK6L' );
define( 'NONCE_SALT',       't7)q[AI@5E:~&g~f:WT`%gA|S52S$0|0{e{VD&gzzdtT:Ub.9Rw.[b1vie^Dx>b|' );

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
