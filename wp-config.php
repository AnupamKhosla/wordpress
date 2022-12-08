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

define( 'DB_NAME', 'wp2' );

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
define( 'AUTH_KEY',          '_R`@5:&]ulZkK0>*:$XSl5`A7CR+1q1R[6$35~Uk,$|v#j[fo~~((/C,vzS?GngS' );
define( 'SECURE_AUTH_KEY',   'I 2y<WqXvPoGN,2[a]fi#c10<:x_O6~3xA=V)j:QHnGRsUyDZe!Wfj20Kha@]hi2' );
define( 'LOGGED_IN_KEY',     '$z)j9fG|3IJh}}k2^o|XrCg _oJtK6O<@{X}`-Wfpf,:Wb[Z}Vs1cgd}$AN>a:`O' );
define( 'NONCE_KEY',         '8i&r][UlUstVw-2~I!nHStX0E<=W:L$lfo2bU+:;}emHw2+{B_1Ku|cIBZ`J|Udy' );
define( 'AUTH_SALT',         '6DKoJg,d/0=+TQIMA`j/q.gQt.F7X!9larGRZpcU,P|* v$jIA&q8=7o{zVL,eFg' );
define( 'SECURE_AUTH_SALT',  'i5} XnPpz/f@s}+vF7^{%J2*;7irr-dj$x|5;VjY]o<0@/V%oDf)8kz=>LRI=Co_' );
define( 'LOGGED_IN_SALT',    's&NGt725QV-(P4Eqs-ri5|g5HDzo0oe_(_>FT$_V&a3KU[wj`YPEAK.|UO!/A(!,' );
define( 'NONCE_SALT',        '$`2{r+U~r3Yc32o-$opq}Mb%b_OH%jrT6d+{e:xU]c:m_hLcQh1jopcBG21?r ej' );
define( 'WP_CACHE_KEY_SALT', '~,)XQuk.bbU3bs(NLOqLz9RRs*?z2B}eqn& a6YF4eBHLk6Hf]RUs3;-n7E/|]6!' );

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
