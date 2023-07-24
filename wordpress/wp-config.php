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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'YGkcg;zd<P~WjHN:w<v:|;mh!>bZW0BorXJ`5_q[5[71>w@Of[=jF;_#na}$G?_z' );
define( 'SECURE_AUTH_KEY',  'LgxuBAq(e<jYrexUjj$P}/MU_-%i{m/@$EIg7D&$R_[|8mQ+Vl[QcK,G2P=%ud@R' );
define( 'LOGGED_IN_KEY',    '1I|8y>3nALJ!Lraczpq1a:h(i o53* OR@VYtGC;G,`+XlHX%sWv[6lVl<-/8/M,' );
define( 'NONCE_KEY',        ':>pbN*ae/N*@U.iD{|d$$>O-W2vyhggQBzKjd{^Y5l)?@P+/0+w%Yeg]a[)v>Gne' );
define( 'AUTH_SALT',        '&@rGa-Ry}m2(|J;[(8qRtq4.yBw>KeS8W47}NU][e[@xt=mENGxtzi>X*ML`>>>X' );
define( 'SECURE_AUTH_SALT', 'C$gU1&x F (L*tm$rRnJ0(Un>7V19 L~UCtBB-4lEII,s$sGKdhwSbdN%0rs8Dbz' );
define( 'LOGGED_IN_SALT',   'jNs-T`W~!|5%D|LU<!)od,}g2,JT^PvA/5Bc@m}my{pU<-#[dkhbucS@~.|o]SMb' );
define( 'NONCE_SALT',       'x<_)=Orab&ak$I$;ZzKQvFQ:R{P8@O&,HS*M  hK|Fq+pH[E+W LUJx%F8x4Cv.q' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
