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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'UcTaHFn3M$H|E C]B!a#Uu)~7fE-&%A;?ZZ)%qzhktFGoD91@x`w)wnC`B>OM-5Q' );
define( 'SECURE_AUTH_KEY',   'd+#](dA2Sd#=(37u xRq(0!7@+y*}TTtMAw!dgBr<r//$FQ>Fo}!:BnoGLpB/$vq' );
define( 'LOGGED_IN_KEY',     '4vIV{9,rX0e{gs6Er:pO4x%+AC(Y7*C+IciVAYg Atwa{<ybrQWOyl-j)YyT}eTd' );
define( 'NONCE_KEY',         'HQbg=$l(fFWcH[Q`*@Ja_)OCzm,:e6L^L{8%< {7|^8MYEK(C=#9[k?a!T7^9}~p' );
define( 'AUTH_SALT',         ' <#>y]RX3QC1a% $Y&*j$NA720$%^A(m_vxyrf[TW/Tpf<g:v3NiGKp!3/+-hP@$' );
define( 'SECURE_AUTH_SALT',  'wvUwE9dr(paEg!kbxzNL}#IgEdjqa.$IBxX.bqPl]TU RD8by6Zuf.4b^_71xr/C' );
define( 'LOGGED_IN_SALT',    '44;de<dLNYH+DIgSz=0z~)bb~EO_83?}Q[9DLRG%N pFm07C~{lJh?9f,Yd,O[5%' );
define( 'NONCE_SALT',        '$$?#ZH:g=F6@B3RWM9PZ479lv$r,}1VVit[n?y}H.Y{,+SJ;aMVn65vZTTzB?X W' );
define( 'WP_CACHE_KEY_SALT', '{d-x(vx4;3uZ@pkk7e8ukS9^B#(X+T*:3pZnD-Y*uR8z@7|vEpB,X1Wo;:@8phX_' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
