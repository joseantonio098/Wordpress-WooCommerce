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
define( 'DB_NAME', 'Woocommerce' );

/** MySQL database username */
define( 'DB_USER', 'joseantonio098' );

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
define( 'AUTH_KEY',         '9OL1NtriBZZpF_--xqVIb3^{3#b*OL~=v6D4w)xy8kr+|whc?Zy,$?9amKrM#V.q' );
define( 'SECURE_AUTH_KEY',  'LPv%qM*9R&&#~fE_^i,NYL!Q&&|jYf(g(&`%la,!}P//,>con:1wic<x21di!Psr' );
define( 'LOGGED_IN_KEY',    'GS_PBrwbxi%RR>]6K#D$iP5zRu:P8[C38 guL[N=q`rQ&(l;52FZnuf3eSKUXWn.' );
define( 'NONCE_KEY',        '0,f)>[dxU<Emh^g@[vVdC=jP]`RN@U5gypHaEs!&C04Mb:HUT:F|Ho0NAmcnaz;!' );
define( 'AUTH_SALT',        'x,1;ZGN$efj^T1y?be?4#Jgir/=DCj<tNrO_l3nNrCl+^hQ05O0zo/0oh~?!,~9E' );
define( 'SECURE_AUTH_SALT', '/i;rgoKB&M@zh-~~kXsisppo!Lpnjwp:9<LWGM7)E1k-n0aS6tt[tMN1<e3acW,t' );
define( 'LOGGED_IN_SALT',   'V]oOlgxd)ST>~<7k%pXShiiBpG 7L0+>tcXrdP^.gCZ)||PZ%Ah4WDu*ve2N:)*b' );
define( 'NONCE_SALT',       'h`E:e^_=:N.ttLhGi*_l^KSDKa[/3rE0h(P3=jzdykOn~+-IO{5mW.X8P7(l0.]B' );

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
