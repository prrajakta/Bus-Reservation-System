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
define( 'DB_NAME', 'bus reservation system' );

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
define( 'AUTH_KEY',         ';V&D?;}cmbXa<Gt~H]g|qhD??=P$K:UgwCx?CfIKBvG^C]]@Z,ah)7pK%U/kpkbu' );
define( 'SECURE_AUTH_KEY',  '[E!eVOJArAs;sa*,kXBPuaQ51@MW*N(u:Oz6-}DY3,*$VnG}H}i5j9 Xp_:!V[tm' );
define( 'LOGGED_IN_KEY',    '4[,>)pf4tZjs#$$ `T9@:eB]`:jQJd@.2oO.KM}tSB~`ar&ilz2b?%)u(9^[hY!o' );
define( 'NONCE_KEY',        '`1ZEWF!6Y}QAi%qs4E(s+b1DG,Fh2;:u%xO;8PbyueY:2m%]![_Bh++vyQxfj!t1' );
define( 'AUTH_SALT',        'xyguRic9c$+GIrc6JyC-(uZ).Kg/ yv}|wi93Kh/|FjX2]>mJmkGXW;?dc9[;C_}' );
define( 'SECURE_AUTH_SALT', 'L1;q&6naoJ(-OiECGdmm4;5=S19|J:,#si^zVPlX^CA$3U{O?aq152^@!H~EP35l' );
define( 'LOGGED_IN_SALT',   ' R{7|fc#N*6zGp)Rl?xUt6k#bJd{,h7e>kaHJ6]A%j1.DJEOyy7SK`Z# l/3Pn@_' );
define( 'NONCE_SALT',       'F7*UG63>g[<Ed,ao{,V*g?6TfariKcLMDTY&m:y6 VS$ea:^c>PSaX,)P>=(^^OT' );

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
