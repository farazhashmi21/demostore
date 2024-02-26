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
define( 'DB_NAME', 'demostore' );

/** Database username */
define( 'DB_USER', 'developerfarazhashmi' );

/** Database password */
define( 'DB_PASSWORD', 'pJ&%43Qp' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
// define( 'AUTH_KEY',         'put your unique phrase here' );
// define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
// define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
// define( 'NONCE_KEY',        'put your unique phrase here' );
// define( 'AUTH_SALT',        'put your unique phrase here' );
// define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
// define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
// define( 'NONCE_SALT',       'put your unique phrase here' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
define('AUTH_KEY',         'Fo1t_nOAy1M]ze0PrPq3_0<hfpG0[+%5gxD@WLv)(jlk?s{=msxd@vNrX8 /+La-');
define('SECURE_AUTH_KEY',  'yVB>]ZMC4fKk:?f,b{`CSV]vEnL@+(|4|U/8R):<@w+lUtyqYCgK=sOHZ3)d- @B');
define('LOGGED_IN_KEY',    'e)(Gj2_|Uk-WvAt-j7Ion[;cr-N|8$%Bio*CzZZ=a/Q(wJd*zzAv%M|TH{m*FUc7');
define('NONCE_KEY',        'aOk*JOAs?#aC=^}3{*_f91BWSfqbNS+|F7e-nEVcJe`O[-K9?!qxwi[qD?}<mSlY');
define('AUTH_SALT',        'NPN8MWSD.1G[l+}OkL>.T]z3Y{P`uw*&`@1-bL8e-mCTjek{j&fA7lzD{(e-8T:f');
define('SECURE_AUTH_SALT', 'r7`sJ6+~sW~ogipMyR6YUs]3XO8j;mpXzfXd!91(d>T.L tDRzVOo|+Eq_}Z=?7y');
define('LOGGED_IN_SALT',   'u%d+S1}(C)wO}3`&DhvM|M>g3^CF-mDLs-vr9Jr}rAho-`@*#GCBVbIZ3QgD9@?@');
define('NONCE_SALT',       '4s|]pY)}qHT&F/SKU`ot!gJ^h:&/IM;urD~m:]~cb0Mg!4e?~3FFT ]%9u2A~9_!');

$table_prefix = 'wp_store_';

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
