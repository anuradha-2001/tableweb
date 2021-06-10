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
define( 'DB_NAME', 'tablewebdb' );

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
define( 'AUTH_KEY',         'l#qlM&4QWl7Vv+d`O8iiwG3Us,6$6>^1t4<gfc>4LMu[^B4&YikigV~CO~X7-y-1' );
define( 'SECURE_AUTH_KEY',  'Ri#Z4.~1e?Z0Ndz^%.d1d({E3Jq0(AFFEYNyM1KZCBgRHcrJ$1&qut5[ykfeM) p' );
define( 'LOGGED_IN_KEY',    'uO.}j{KlJ?nziuJ&|E69i>d9l ]Qd3+BG1XF8]t482x)$~,+oZD$skMuzp*![IUe' );
define( 'NONCE_KEY',        'G;l#Kx`.Wep^`s=[duacl^grRa+C8A0Gw@Bgfi1PcA1de[02L6]Ms%P=7;OGQazW' );
define( 'AUTH_SALT',        'lvx]UZ9N?vhMcb4zWkejh;1Gg~A?699;-G>@?>2BQ1J%p^sjCdDB*~^O(NmN=~cU' );
define( 'SECURE_AUTH_SALT', '|*WeB#;AHc}5r!y%A}v6I)CzfUnz)y@)u`p$ oR)4Q+)GcyQDej]9/xF0w-k-OU}' );
define( 'LOGGED_IN_SALT',   '0]Kx/arCy(Z>mGxj ^-TnQ+:6-h8:`l&vdq#+,/sK^Fgyeo#LT)fGTfeq?*zLw^f' );
define( 'NONCE_SALT',       'f8i5~Mw&)Pe<7;LCSUK:*9,s|m[xrNNe<+6*<lC){,$NZ-XT@Nl6,UVp.GuE0*H0' );

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
