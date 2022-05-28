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
define( 'DB_NAME', 'sani3i' );

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
define( 'AUTH_KEY',         'ts<!H.s}`S lmyw2@0qa]?kfD:FTrrX/@3*U?ikgS4%&#_}jhO(N|8=mlmBD&Exy' );
define( 'SECURE_AUTH_KEY',  'gI1M)u!4)z90%k1 @/eqKU!v_q}(KtX@jiqcpC|sraSxiaENMd ~sP;8!w64P_;|' );
define( 'LOGGED_IN_KEY',    'b(lmz1)I$elFpL? %b:Y_)_3Z`3rp(}C<^=E>cvD7cIvU~F:*N5ArXF(s!f_xvSD' );
define( 'NONCE_KEY',        'WPH3;#;{@O)U<!<4FSGee=Dm$/b<EghfeG=^xT3U]tCd_?$I~Fu.(gK$l} %2^f=' );
define( 'AUTH_SALT',        'mv{[R{Iuae~a6H4{2xi/`z%}lkx$:g]X;X|Jp(FD0-YgoURqK;z02y1YwEt1f)K9' );
define( 'SECURE_AUTH_SALT', ')YknBmi<25x$M:fuMeLR )|LHo9Qp[p7=Ey??z7yPY@Wg,2=_g,.zTiEa^L-gXb7' );
define( 'LOGGED_IN_SALT',   '65Eo6n%m0kwiUW!^HH.CVA]e(K&cvKg7`A|,[O|WG@|T 71b36E)^/V?V<kwJlhY' );
define( 'NONCE_SALT',       'IQ9cJ[hh)oi.i$$bBk{kQv/D;ZZUURJ1<?`oCvs~f8^>)?3EkK|$]DX/1oFREo>>' );

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
