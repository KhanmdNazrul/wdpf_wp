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
define( 'DB_NAME', 'wdpf60_wp2' );

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
define( 'AUTH_KEY',         '8Z?H~ZEtcx%L0M<$~PxTW6[8(6:lDg[|3WLeQ:eKbl;KqYlHB1a%|]oIg/i+>)+q' );
define( 'SECURE_AUTH_KEY',  '>B:3Gn$I}~uDu0>ml3!WceNRdwuFw-BE(s/azdu(r6m?0i{gN#3$r;hOnjmg8SgO' );
define( 'LOGGED_IN_KEY',    'UHcwoi+H&s+/0AGm4M-_thx5/hL/8vGnJ/r+WHI&S{J[<[B&3Di?4wdpPA>$WI=Z' );
define( 'NONCE_KEY',        '0KgAwA)zl*EdLzfW8RR+ip11m(6S1A2-(7f6FHp=b~*0[?]G}DGQa&+#cg)/ii_r' );
define( 'AUTH_SALT',        'UPeNW[M[$<`8r*lEvo[jtl$A{yh@Su|NhJ&(~q|CdF@ e:[$IS (1{bel@L]PAw|' );
define( 'SECURE_AUTH_SALT', 'WvyL~j&H12Y_d0mz]]E0~h;a]cY/r.iYKw&O 2*dENfx)piBY8_$E$ED{o%,Q`Z&' );
define( 'LOGGED_IN_SALT',   '_`;<Fw2rozj-5is)fL[r&ugyFK0h3o-G+L#yYEh$3qUfRafd_[!WWj02Z$C3Kml&' );
define( 'NONCE_SALT',       '+uX/Jv&rG^0Z>LYoQkaiz,9X<n[:.m!!,zj^(EFd?xgasi9dy*,fEzF`lU=r8tA?' );

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
