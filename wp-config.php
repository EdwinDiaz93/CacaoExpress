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
define( 'DB_NAME', 'cacaoexpress' );

/** MySQL database username */
define( 'DB_USER', 'cacaoexpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Cet115cacao' );

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
define( 'AUTH_KEY',         'g41?VqE?K`D>|+xJT4_HM&_JfX1fhq[bhWO&..LpP=gsxoQqovC}_A61wsUW9Pkj' );
define( 'SECURE_AUTH_KEY',  '<~EwN1Z`|9xs=0(PCly/I71N%wDRI_.9^];BoU(@?awv)f2.#d@DYFDmbx^[)CO:' );
define( 'LOGGED_IN_KEY',    'Xy]ytiCtIo>#jn,6XD+j: 0>5RA=Zn56=-O*.^c<1g/JI`jTg|[uF9QfE=,5s&!Q' );
define( 'NONCE_KEY',        'sPV1myu{T9HTYtjazm}~U]&QV|IG/8e ABX/zV,v08hXWDP%<<gXYF:Xiv`Bt0&f' );
define( 'AUTH_SALT',        '>h0%LI?&p5TD@#8O:_QvtP{cY>xzt-?H+p92 OoLb6&D@ 1AVn [1T2})eL-{dRE' );
define( 'SECURE_AUTH_SALT', '<4p5*mYbMezmp<a@Sl87>MLrRReqV{Eu#X7>jc}Jex<lUBexEhq@@)pL mN-tm#:' );
define( 'LOGGED_IN_SALT',   '{O5$?/6]J<vuP-fl#gzr[0wJ{_#U`j[<zk%sHWY{SR6A!D(X7$:;M5h|vQ%:<O/I' );
define( 'NONCE_SALT',       'eS8nqh~C}R;b]> -bju+uq8WG`qGnBy4w{;=o($lG%b< Uv&g_s<./0V9ffSz[(r' );

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
