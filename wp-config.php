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
define( 'DB_NAME', 'eppiesdesign_db' );

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
define( 'AUTH_KEY',         '{=b/(B7poVqt4/,|Dl0-vMmczvp{]8`6Pmkn{lw)L{aWYG$u@@h>+)EnO^pK@$8i' );
define( 'SECURE_AUTH_KEY',  '/kxj}5(`Ih$.EQS}lw_5&>hMnPJ9Y*@2xwmj.$ZAG]DRUrhT<Q *}R^2-Iymy1(w' );
define( 'LOGGED_IN_KEY',    '5|9I?dKG_ 4@}@^|xq<6sADT(]eft;VBCzjpj5p[2~MJzBfIKYC!>zcT@|<}c;Mb' );
define( 'NONCE_KEY',        'SZw`iSALu7gU6[|d_6fM5QGkcp}9mpoj`Nd!*6Z9JENx5O{`2W))`d~lbANTa7.B' );
define( 'AUTH_SALT',        '$_vY9y5:vSiNq$F5dE8EBm^RnU#H]CiOQD%!~>,>YmCVrU9gm@(i{x_b-Z.&%Jma' );
define( 'SECURE_AUTH_SALT', 'l+VJ3[.n+67kGc/I)N6b 0>dB9KB!9tDL*XapPY2mq_t-CSwRPZ@MHdA}:yLxH00' );
define( 'LOGGED_IN_SALT',   'Uq`vW[s]f,PZ&WvveVcjndNLI,$R`Am6,M*w1f+mkl2m}kI?-Za5YVQ=^{,bsnTb' );
define( 'NONCE_SALT',       '[BvHaJg</jHE>J$$24v]`h}_Cq(?0sei|X.M|OJa.-uQlFjq|.4ogoxHhHd,UBAF' );

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
