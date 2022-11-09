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
define( 'DB_NAME', 'mrdigital' );

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
define( 'AUTH_KEY',         'B8W9GE?Y:+bPo0XNnQiQlOeTB%5-$fU2vgA>g7NFB7a:0sz[xi:O|4K(>l*VN=>8' );
define( 'SECURE_AUTH_KEY',  'Asv~8r|6I Y21G_OOi@GE=([2W=eF9dY79{@8D42%U(`gS,Ix*@tV8M) |_3>C(3' );
define( 'LOGGED_IN_KEY',    'bf%_2RwGT>$XSN3f(GqMM%e77g(Uv8YAjP6bJh]2TLk^RB8S+8/V#K8Aod-gWMN^' );
define( 'NONCE_KEY',        '*DvJeF{l9 M1Z$xh*vk]jexJ}eb#`MbD^O%P[+T3OZkT4f/u`H(I/(en;=>fQ!G!' );
define( 'AUTH_SALT',        '`aV-g*?5iyWdBd+i$I!oNO~[[y$Y+$ 1C-QuGHbM^<FZ/mkS%`KkK**pf>loxw~/' );
define( 'SECURE_AUTH_SALT', 'R <&Q?pJH:n@`,9Z:2ky<q/;mGty?)8bT5L6R_]!w==dO}w@Kp`vW;_6qhV*l4}F' );
define( 'LOGGED_IN_SALT',   'jvCVYw9oX%2A[,~2Qs9vw5j[O50G u;+^G)&jzJ~+rNDFvq4a$dkMfs7lM*Mc9#)' );
define( 'NONCE_SALT',       '+iym.U[`V -(X-Kp,]1(;7z$f0nm^z^{<Nt_`GiRsh$0,F !<w;,Izii%0EQ_`,)' );

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
