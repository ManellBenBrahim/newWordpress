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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'k7WwyzO_j29p+)d|A%[RPFrt<{<fJl=bkDu+FZZ&S,kg9CNd/);C_o:jHU@?tuh,' );
define( 'SECURE_AUTH_KEY',  '11UHpv3l~[zXa5N}`[^PgN#>`wu$pTu~{paz nBjYfGHX21C/%a[hRV}pC.*=XAq' );
define( 'LOGGED_IN_KEY',    'Fg}0lUK|hv0#F0szo@0wRU,hG0/cFt=QC6< ZtcZ{^IpLbEQ6<~ >CX`-;nq{iVx' );
define( 'NONCE_KEY',        '.;b~@Mfezk)>*da2hm<+-abit0vy,A7(k3@+e GlD?d+$B;8_CmI9%G~>*_wOCPl' );
define( 'AUTH_SALT',        'H[jwPF2_>%,.Dc_=+1.gXa/&ln]Vt/Ow.3HX`?!78 <99>0F>ZtjF3#)UhR]QeED' );
define( 'SECURE_AUTH_SALT', 'RtLKvm!;v:8)^x0vX#mpxa5dAW&q@@ 6t%yT!f@x1vJ]j;Bt@S?RFfkezk).9~Li' );
define( 'LOGGED_IN_SALT',   '.zaA_gy{Lq7zJ5Ma^N2{^LDbh/9lnC3V`qZ_&w=i$IsdJnVOt^4/raX<{~DsTFY>' );
define( 'NONCE_SALT',       '7_RYkXI7%~]{r~</PSD-l4zJQd)337Fz?pnsv0W8qw^y3-HR.c2YZYb+7YH~~v~$' );

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
