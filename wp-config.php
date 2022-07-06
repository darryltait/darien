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
define( 'DB_NAME', 'bogartstudio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'k=!3cV#W:Px]Y9Y|tm,!bCC;rZkL}|/F!wNKSBlK9$Aoy3CkyNZ@a<N{Rp#9%z=)' );
define( 'SECURE_AUTH_KEY',  'FUW9:i,{e(OAL(pd vPV0=y8tcDtRfwb4MzTxeQjcA)mr)cXp~K%P]qEK/B/!vg6' );
define( 'LOGGED_IN_KEY',    'Isg3cE=VfQkx:[m];Vlg5M_^bgb` l,7SX7OVB$wM/W;?a:pfv+,,h21V$-NX4sl' );
define( 'NONCE_KEY',        'yB}=`C(nvD=Df`dD#C2OCQP$)r[GS0s@}JI/Dwq4?XG5tzC|uuq>$fmcG_[tozQZ' );
define( 'AUTH_SALT',        ')^vU2euA KWkk=/[F&|k>6V2Moy{4IE[`lpR| &38te]83;?,>L/]zRc6 W66k1k' );
define( 'SECURE_AUTH_SALT', 'xezfn<f5i4O_LFOr}Bw*fg:<?D`X=}d#mE0>tb-#HDa`$h;Fg|sFv=d2HT~I.dIu' );
define( 'LOGGED_IN_SALT',   'nlfI3hp1MWdDY]^zc*j$#6PzltZs+Q^LzM5c-Ue%;*,R/hWTie(V7b!mN57R_oR(' );
define( 'NONCE_SALT',       'X6k9YNLIaq*D`+FG%sLbF<yy@Lp(4)BBN&Ep~pNOkK! >AqWF9$G,kq75E2z4itM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbs_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
