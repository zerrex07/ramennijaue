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
define( 'DB_NAME', 'normal-website-db' );

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
define( 'AUTH_KEY',         '5=ia=w7-Nu|!o{/?s6AY[ y_f1o`i9zhx8Gy[K-`s%Y*D<R{,miw<c~u2x$2*/x^' );
define( 'SECURE_AUTH_KEY',  '<9IA+jQ`kDGXX}Qi4sv2f~~rU`jBr~nB!+kSU?kH/,HA2uw?5WqGnBL,P:yGq.54' );
define( 'LOGGED_IN_KEY',    '6D!sE.&t*p4#0$8Z/Z8yA2(p65aCk|#FiD:KT3(d#$`y$;6n&+i>Kpo#)_*oD3KD' );
define( 'NONCE_KEY',        '$cYxPY#@iB&NBry4r5HBpQIa@~FV^C=Hmtul*C; &s4Z>CS3-&|8mO?plzl<YQyL' );
define( 'AUTH_SALT',        '@%x$ 9b>V0|e#>$wgH{fVrp@=Ku[cAv8?hHE~^we(z+_ikXX:3ksy:U/Ep8x0+vt' );
define( 'SECURE_AUTH_SALT', 'i9gUy.eP):Z2)d3&%n<yei4 jHQF_x-i?{3bN?6dAi$.lw!WZO-e6:2BK;/z3;/G' );
define( 'LOGGED_IN_SALT',   'u|uUKK% e{7%KwQE>5su6*d4 ;yPe2sI^NG~ wr:q-:h/+|V~+T1p)Cnpzp?wwT!' );
define( 'NONCE_SALT',       '$Xjv]E!hhTj>uCP59<0mw`HD`{8MEMnAVOYA2k95#6Nz@L^u$<jyr-<~=nE9=yEh' );

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
