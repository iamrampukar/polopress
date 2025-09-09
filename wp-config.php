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
define( 'DB_NAME', 'polopress_dev_db' );

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
define( 'AUTH_KEY',         '6/.>b?D}W#UI>BPG*yern}g,G, ]f}N9SK(,?H7I%#/#<Cuf<?/Nw}_[2yafL_!V' );
define( 'SECURE_AUTH_KEY',  'D(&^?cl=&8y.($OW}KV=aW_2X;{N5[&j$}-bWJgqylEK2{2*OYM#n3H_ RN`+u^=' );
define( 'LOGGED_IN_KEY',    'ZJ}m3@ZH$-5M;$?$Ou5E(M?3U$9ioe{B45_2ADpfpAzo--+;iXX(IEy}nH{bh7a9' );
define( 'NONCE_KEY',        '/WoMR.>g?>$fOeQt/XgS=DTB~x0#%G$;Vda ]~Q2hziZrvO%0p Qd2i_Eu8dM9~C' );
define( 'AUTH_SALT',        '7TJ>z>.0|Q0;u1M:kMDUfF4npW9eO`j!&?644Cqy<^k.*pDDqP<^N^fRP%yjga;i' );
define( 'SECURE_AUTH_SALT', 't?$vED}}yjXjU=MSiUMB*hu(l(Y8WU{`)+8]7h^d4N/cH)>tNDx;+DVtVqfF8.8X' );
define( 'LOGGED_IN_SALT',   'v7mh[U^S.IK8My.O7s0P#?pPH0a%y](iGt [Rq MMf2%O&m|ogUTx0CI/U1e6?%t' );
define( 'NONCE_SALT',       'Rh5Sk~Iyk #EH,e }s95i(w)Btly}<v^?I=U]GXk5&mY;K:zGUw=4lmnr0f[3r=c' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
