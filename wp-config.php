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
define( 'AUTH_KEY',         'o[:R>Oz}`Tf+ON3A/h]Fp,:Z4YymPNC?%7%nyP2ka% :y4gN>krz##6wX}i%>w7g' );
define( 'SECURE_AUTH_KEY',  'uyl.y[N67ifE~DDm%l7^ASpH,2_ l).8lI[D!!$jKd#_qYM]l_DJ+I=(sIxa,K5@' );
define( 'LOGGED_IN_KEY',    '.14dC5(9|HBCHK8+#B7 mY-KHeX;]Qu`=QP?m`:>`L(5<4<hbFMiA]VA%&{+^%]T' );
define( 'NONCE_KEY',        'XhNgLQzwutnm}J2C(B7 `%gt$(p,sc[q*C#?)H(`N,EAjHM|#F*3-{<KZSh0TZj%' );
define( 'AUTH_SALT',        'v`rv6)R+X>JDr|JDd=P{7H`h%Ff$gqQ_-O[~z2`W#&@JK!1oXFAC,cbnjY?w6L,R' );
define( 'SECURE_AUTH_SALT', 'mAT!gf1, Ct $-i/.#_lyg;bu8_^F@D/Xb1Vg3q0B+qw:#-m:Ql^^YTT07p4P%TD' );
define( 'LOGGED_IN_SALT',   '+X1$8WpI89F;y^`R! }!l<O_!M3|N8Ab_m(&Dxe!4J&]soZ?npgt,N5@SkG}s{L-' );
define( 'NONCE_SALT',       '`b7qI>^k<4;m569x].,D_}[Am5;fm_G%$)lUJL%s!E,j~}2i#N1ZFV_q(*`gZ[Y`' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
