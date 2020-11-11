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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'sesco' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define( 'AUTH_KEY',         'r58VOfH|YUM1N_3DYEBu9wvCBS/:EVG#Oc-E>=Rg~F{(SOL*k2|y*;ID]-vOe*LI' );
define( 'SECURE_AUTH_KEY',  '%|.E_qOaFQ<uQwggvX-l%Z|U`&DxRGv2qvV[|v8Bhwmr13lUubliUKo`0YbVjxvf' );
define( 'LOGGED_IN_KEY',    'G{O[4.]p&[uSH@eq0vQgHfao#6[r D|&2l{AaMl|1[$H.l:kwBt&jo W+/F.ZKhQ' );
define( 'NONCE_KEY',        'De/{71^ZEMkc^DInR?/c~)aK<V6?E)`lNMoX25}Ge@s^ch82~k7y*l$bD]k)HG+q' );
define( 'AUTH_SALT',        'f*`Pi(S3cAv;7U.5[1n0w)O/U7jh`_oYY-:4EL7BOTck[K>Z5 U)Nr:rRRO]jV/-' );
define( 'SECURE_AUTH_SALT', '&3WIobf-%T;e#~hD1=2xRqjCNdGzS:A[WMez*/(Nl2)tXoI!#}<h-<LpkP/+&99x' );
define( 'LOGGED_IN_SALT',   'pJRY%f)]<M=rIcq_x_qBlJ_]LYJW7:;0(b6{?MM m_PrZ|Q9G|7MMe8ryji*Xv50' );
define( 'NONCE_SALT',       '3Tfe2hz/G5eR)i`-f~1p4rvdK]7T4y ,:to]>[:q-(jcx,Gd)~nvC{?4z>:K!ACj' );

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

