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
define( 'DB_NAME', 'texturas' );

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
define( 'AUTH_KEY',         'I#%i3[Sb[9P])h+Rb!g8QU~YdG{?se2%,btv~-9(HXbh.?3e1G-C6F)x%C3n]a@4' );
define( 'SECURE_AUTH_KEY',  'm>%ZT%fOBD$s;{o|M~FB%+SeR6I?*A>Gr?^,7SBB(G>FU]G`zqA`1pf< Gj6[<+N' );
define( 'LOGGED_IN_KEY',    '`[]7f 8[;EmIgrz*B.`0;njNe>]$ib1bE$.Rdq9V@sZlXTnFZAT4[L9H1-S= rkq' );
define( 'NONCE_KEY',        'StY[FlKkSyUJ:9BkD)PI[;+.n~X<k#P{rQK]S({~0!wMeK~IhcrRl0*u{i>}8?~y' );
define( 'AUTH_SALT',        'M.JPkSn4u=RV)!=+UjzieM(kcFML*C[,f75W4zryT9t,uwx{@Z@ZSZNdrgg=Z7o(' );
define( 'SECURE_AUTH_SALT', 'O`:)],[lMB+v]2MpL7&/|cpweBVWB3>%u1^1=;Jx!A$(<[o=X{>6TS,v7/5]bo/(' );
define( 'LOGGED_IN_SALT',   ',AIqacUf?QQH>PV4TH^yM*}X!]=C7P1k*xH=<Ef:LK|62M5/~KGd5gq#|;:z`svk' );
define( 'NONCE_SALT',       '&lGYgu@nhJq8=pt~ti23-I,34`X|Q.)@=pRc:FrgRKgj1rOTsC|@^s{W)9V#?n`%' );

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
