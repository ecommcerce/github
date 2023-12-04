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
define( 'AUTH_KEY',         'u}-lN5O/yvB,Q/<zu+>Q9#o]vwMHBS=YJJ10Y1`Y3rm*grxz>5~.;3oK=v_e-ddp' );
define( 'SECURE_AUTH_KEY',  '~QSIu1),PZ0Q9*|t90z+L/pPft*F?bPbwO6RYz{dk#F+xAc}o:PJ$aj.v}5m5_LU' );
define( 'LOGGED_IN_KEY',    '/~MVLtJjO&hjL+(;x `9/n^=pj+/1q6<9DEYeG&;6Qp|>O2WE1QZCc-Gt=s;uG+N' );
define( 'NONCE_KEY',        '7ChDR%i~lMgrqV{C$[*np4Qz86cJj0M4gt6|~RDT;uFa{HYxhQ.>_[=W>VtLnQx*' );
define( 'AUTH_SALT',        '6ISpnM5(Ve(05~eGA9xJ)g32glM#YYP?.$knL[r~4$cg}Xm<.s_v_anw){Xy?5xn' );
define( 'SECURE_AUTH_SALT', 'KycO/8xqPn{Ui&KbS9@|XA1sfOndp)5ovXY>OlEL#W(>l*RA~JX*xitOE#MaehMw' );
define( 'LOGGED_IN_SALT',   'Wt>4)v6[6KY>!~M}#YOKs.8m6;`frd~z0Tl%.HAB]LTaJ0-}+.6~r`@rU;Eo>JeB' );
define( 'NONCE_SALT',       '=ZrwA`/F<^e&TZu)^!{Un+QMJVV!,QC+T[%ekM}WO0Ja_dT!EJu@y#Y^!CdX,_/q' );

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
