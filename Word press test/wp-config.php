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
define( 'DB_NAME', '21adis' );

/** MySQL database username */
define( 'DB_USER', '21adis' );

/** MySQL database password */
define( 'DB_PASSWORD', 'solna-1023-taz' );

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
define( 'AUTH_KEY',         'B]S^s4`Jv1rB%SM10F?A.n/j1VD.Ab2OW$a<aTnkV|:?MW)cCb3(HltI[%@j<ca=' );
define( 'SECURE_AUTH_KEY',  '<8H@yi+m@n|ctR+LRp.A7Scm)U7iH!R5:C@WuiD/;yGEc !WFo.`@AV:4IPoiMRX' );
define( 'LOGGED_IN_KEY',    'M>E]xf/@~eN^>tvD:SL%$(v?juH(dKGV_xK$,Pjfk]=]Yb#<S_5Hc&H6B6hZSB+0' );
define( 'NONCE_KEY',        'oZ%S)vp,<dAE_<~KpHsy70)m*GBSd|Wy_GMvs(acE}TYIecsCP,x6;H.7%nolgF[' );
define( 'AUTH_SALT',        'n}9li tE|Bg-$%Ra{s2R{$0Jcb rP6Dvz-~% oh}+cWOt*>{^?%g1Arhqfxuy,:v' );
define( 'SECURE_AUTH_SALT', 'HEcNCJ1Os$f,9=( [Z=P/LtaDV8IfZis_!JfvNH8D`Oem/EzG~.D:Qf%w$l>Y52/' );
define( 'LOGGED_IN_SALT',   'oG36>nw|MmtZENxOqVQtae6xF#mI)-]|?b/zM;v*uoo,ArH:cVzDJ,(Lx8sb[*yh' );
define( 'NONCE_SALT',       '`%KoL(i8Y6ib5qYA/63)<WkZ`uV-qS1Ye:/Mf|J[(YFpMiA|iO6OU>g1X*U9(lp`' );

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
