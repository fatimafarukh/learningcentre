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
define( 'DB_NAME', 'library' );

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
define( 'AUTH_KEY',         '@lEqNNN23[A9ch>C96VEm<YhvRY9*ah5$C=UVeh;qlVCmCc*u{Qhae<a/bWlOQV?' );
define( 'SECURE_AUTH_KEY',  '|2zl=&4X^%u@jsbdO.#J)_eL=/m-xv3(sK`-4J|V#?1zMV8]+qT|8m<TiW4|hLB%' );
define( 'LOGGED_IN_KEY',    'z(ccmttqCE.*%wLS0GJw4Jq)[`+v0~+bV J|~bsUK2uB2]C0P?hcEHP7W0B#SfF)' );
define( 'NONCE_KEY',        'Us,d@8p|Us:y_G1*[i.TWwIg|~h,^ZV6_,-@+3~pg#-Miprw)2 n!gyce@+99YM,' );
define( 'AUTH_SALT',        '4*r)Wp^/2:U:EA7UMXBwhy) 3n&+EkUzHPFRxfsPGTZRH5ajgV.,fu^iQU6gx_lS' );
define( 'SECURE_AUTH_SALT', 'A>vkSWDM)Y.!vt-$:Z *xpH5hI9Bb2^>}<ET}<7Xu(~XK@ZO%9c6S8](~PALk^j1' );
define( 'LOGGED_IN_SALT',   '7n)e9Qz5[}aVsz%_Nk:|wsC&f25N&*kiK^^[tsM? RERQxz~W0<g:xOcSs@}^ p=' );
define( 'NONCE_SALT',       'JYY0W,3h%n<UyCje6~.SuzsuVK$r5W=0(0}+a`h5EfVm^m.awZMlN0b9>$1j<]}+' );

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
