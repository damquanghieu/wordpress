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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BXAm{`877z7v2xwCR*]}%n?t1JF[^|05!*O,91Y8gZ dg^1 a%_#~;iFcuJ;VZyv' );
define( 'SECURE_AUTH_KEY',  '7#Sl>Pps5bhE|Uc@g-_~u7.DLyP0|j?UVWZz7GdH$;kR&j`#LVEY,4t+&LSI6<}3' );
define( 'LOGGED_IN_KEY',    'Ix!]f#**VtEd[pQ6!0h/>&X[`hkvP_C&M?aKaKvK+VaO;1Ce+%_!~0=J6eG?>_Vv' );
define( 'NONCE_KEY',        'YbA_dl371)=>@%Bl~GdTLNG:DqWc(#jXIjLG~|! TAho7U>JhB-r+tJi</4>}70[' );
define( 'AUTH_SALT',        '_2hdmoG?`+dikr3*&;84vko*{bdubp<LuI{qGX`0NA*X*r*CH|iqxd$mhVbo>fNp' );
define( 'SECURE_AUTH_SALT', 'HfXC_Yp]/s3!b94DE,]c_&nQ$/m)@:g{iZ7f z}hT`#td_MD;Pj*W($J`V)0,/*1' );
define( 'LOGGED_IN_SALT',   'A!RS@]pfsvbV~N_S+8<x2scWZ0Z^56027u|QcR)o0vj}j4cRR0Z{cva9zS9AIP`}' );
define( 'NONCE_SALT',       '+Ag-6^(F3Di8A6^(Y3V#mebjG=*~:ScObI3y[4.e|#-!3Tr%*$KN~/DF9Ap=3!+|' );

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
