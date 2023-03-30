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
define( 'DB_NAME', 'liamportfolio_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '?$03j0k590ECtWW?E&/H$~#.M%NV$beu2[@ll2==7/0mr)SvaJ40LYP^[A{/LrLk' );
define( 'SECURE_AUTH_KEY',  ':ep>>G@>(lTB)|%N>#{#N>uzwN&n7LMe,H&WkNV au1h>[X9J,sda#PLGV?Ye5l=' );
define( 'LOGGED_IN_KEY',    'JdAwR_B*M`fpEE`.uuqtdS`+$upIw-Ml{?|MW_&|KN{GHnJ@>Dk:RTqoGID?Hygd' );
define( 'NONCE_KEY',        'bg:!n*z|VCq%aW^)b3`%/WhF&]H]3)x:@|^*zxm=u-103a )LH7;W,l:1U~ /H:J' );
define( 'AUTH_SALT',        '9.[7^(FXctI2R|bi@V~VgRt2;*-Bv!*N=tzd#6$h@FQ*`re4w2`y@uB_Z]9m<i2E' );
define( 'SECURE_AUTH_SALT', '4FDA{`3R@5rjD[y2eB7%2]3o_~oU$8MRYJ^D{%QJyZ%)RA&S,-&e7_~rvcq9W{rm' );
define( 'LOGGED_IN_SALT',   'X^|Fg>zI:@XJ?C1j=@@Jep8M{zWlQ3tidka+wCRSPj]XX( z1O28UYjVLlz/dh$^' );
define( 'NONCE_SALT',       '2NF/-@2LT:>]28dRxC#_sz[g!PvC$;MU+Uxy&l/NpdsNvH9-St=Hhh=B9G:+2W_[' );

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
