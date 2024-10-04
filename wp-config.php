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
define( 'DB_NAME', 'production' );

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
define( 'AUTH_KEY',         '[42`dh_z2yq&b)+B/^F+c+w@^vm<2BwyKHhvLz&NZ,iWAnH/s6^i&ku}j;QyfMs<' );
define( 'SECURE_AUTH_KEY',  ' p2/sxBoL#(J>~L74%r1_vvv5)Yl(]b@1f_.18c2.4D>nh:+5?t(-sEU!IY0;BLw' );
define( 'LOGGED_IN_KEY',    'O^)!`G&71jE!HOP)s?mIAO^f>kGq@;2z AA ?+<jI<-I/^pXU`@zkvIu|dG6u%+M' );
define( 'NONCE_KEY',        'cs]:t@nY!v^pf(<Xp(W~mP+C!A[u{fcJ0lts5$j{s:U7/]I.>=boIJ#>2m.l<*[I' );
define( 'AUTH_SALT',        '}EhP_aB)}2THerhssMiP*Nn]}@|]@<]ecJ}fKvHLk5iCSn~^h1_#MyzRZ%S,(1~d' );
define( 'SECURE_AUTH_SALT', '_el +,3A(<Y-uftq^);jd1YOzo5{E=;/d1~M%+n8HK:rIuYE)Th|S-q}JYw!p&Mz' );
define( 'LOGGED_IN_SALT',   '|2vnT~Y9rn68g>&*uZE-lO[g7^a(}]Y~SMrKoK0d@69M8`-8PND/G_+vdCx[/+e2' );
define( 'NONCE_SALT',       'U<e/F^ui#,B.+iaa>g-PN*pfW:>-].:xv~h|pA]^o_p]f2E6u:-XDh[ICc,jzwUg' );

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
