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
define( 'DB_NAME', 'waneezah' );

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
define( 'AUTH_KEY',         'X|q<>TFIRF&RwAxhW) !I/i=o,~lh?{e(;BI:xxc4{57f-_y<aC`5*$$W/V8NM-*' );
define( 'SECURE_AUTH_KEY',  'L2%KQbtQ>:ENyl<`0#mZc0[eF+vY]y7q/w&E`lp)WmtwQoGINa@>}DaV >O^9 )%' );
define( 'LOGGED_IN_KEY',    'rk8=tqyZ8ts-zLV=[C829^-cq;n=M?J@BPUEvk#/u0}S)0gC}BPwInQ.U}w}PHG:' );
define( 'NONCE_KEY',        'sIp4F*UF@8X|u0mbCprKPnMK[s -7((S,l>n?So$ZVibC_yCu35CNA~P-nmd:<Av' );
define( 'AUTH_SALT',        'Zp[F6%n!o baldh1~$ct%6>!a8M/MbQ:KznfP_IElVXOtmZ&uRf#w5Ldyg9SMyQf' );
define( 'SECURE_AUTH_SALT', 'W{@~P3%avpVXg,;IxfXxz}},T&?$_?%n&a}rZmS!B)%mRFd*0CD;l9v@#ZsWD;=]' );
define( 'LOGGED_IN_SALT',   'f$Su:3Hy%-$A0BTXi&> {HXcWZpSkCYRe|;[`@+)O*{0Qc1;c`;te4LRUMXUknUZ' );
define( 'NONCE_SALT',       '#%?fQwN-Bm0&Pv*QBa3R*:n 6PH{evU;:u-q@DF8=F(KTa/*x).ko|td4[*0{Hs&' );

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
