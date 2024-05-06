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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_sekolah' );

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
define( 'AUTH_KEY',         'wDmw6kBzc3MqPqB.=+i=A>nYamMVYCkVg0LCL%]e!f*,c#DgE$&8Ev5X}*)cR2pO' );
define( 'SECURE_AUTH_KEY',  'H^<TMj3*{Y zN.XkES!Cn|o^d)lW6JW>SjMYu;}ja,:a$.Im^B,c_/Tf{|U?-,!y' );
define( 'LOGGED_IN_KEY',    'CC+[!t7OL-U2zH{c5z&Ok~ym(JeEOPLR]2c4>RCo/Q{_{c).yr&df#QAvv7:3%ca' );
define( 'NONCE_KEY',        'P&faTZ}kv]_V3ZoBI$K]Hj&iXaxbP7139qm2IePfhoxV&!avbg(ISp#XWW}&&.Qv' );
define( 'AUTH_SALT',        'z5gSH{<KF-:$00QNF#&K]D0~2$x`pA<D9cvkS2-fG<m 9iLA:Ju5$ZyGS_ud$-NK' );
define( 'SECURE_AUTH_SALT', '.1xr34arr+CHp[B_jM#.|O{5D`bCT:5wMe6$r~]6Oe(>nDL_W8GRkao==7pxFV[N' );
define( 'LOGGED_IN_SALT',   'A;NB7B(<]#Acm|S^c:SO9h0okQMW~@OJu|biD5@Vv-FLv-Ff2cZ}.0n=,JIcnt]a' );
define( 'NONCE_SALT',       'kS$?&rPoB^5FeKs[oe9d?[$ta3fMnIL{OOqrQPN8.,t#gQ0^0yCnYc77uIh v4P,' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
