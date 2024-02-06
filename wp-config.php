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
define( 'DB_NAME', 'wp602' );

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
define( 'AUTH_KEY',         '~lPRnrXlARo#Vzf-}Z,dZUp]u=u{n#_=bTsCA=KCEw8(>])G$>G|DL[DvE[DE@}w' );
define( 'SECURE_AUTH_KEY',  'e}BHy-H,<*-c!icY=Y<kK/$5~OA5jE_U+g>)1rD/k}@&+@ qj<,Kcie1{lp(cmcj' );
define( 'LOGGED_IN_KEY',    '8%p~ptkoO_t~!.sOc]&Hn/!i%UL^0 4=:ud.sr66WzGNIV?KN#2FZ2s^;jsid:._' );
define( 'NONCE_KEY',        'o7z$$_^BzL]HwC/&z|z?so!ZyCaxH{Gy~sFzg3{~#`6v^mpKO)HH(H)@8Ls?2m6I' );
define( 'AUTH_SALT',        'MZ4?W5:lQN2+/8W1Qbv+oCPRt;0SX,`VIPy$ubkl6SyDA%T2ttBcV&LjgP[f,hFb' );
define( 'SECURE_AUTH_SALT', 'X]QHG%H&Mk ~=pbo;*:%QK2iSu2(1wiC$Uz7X{dVkUY+D58KDT%q!0S~d8)|T1Ec' );
define( 'LOGGED_IN_SALT',   'trQ9b`pKLt1x_(3=`A?c<JFRBzN-;<EXC)a&@(=(~[)0_1PnTiGhAZAKPE}?n^]N' );
define( 'NONCE_SALT',       '^ L0exNNzdA!Xl#>4:].[cj#9:m,p**_=hM?5UCgSc+}>W9H:;3e62<0L{D&qSSL' );

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
