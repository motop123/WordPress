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
define( 'DB_NAME', 'wp_db' );

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
define( 'AUTH_KEY',         'bjgWS%kmb3{H10U}7#x3#UUqitIh|X,I&^SwMdc~R++4,*y#fB0rU%!kMaf|[@TK' );
define( 'SECURE_AUTH_KEY',  'PCk!q2kVw]gC@&] 4YZ[ N&`haa:aDt11;u%nOH0@eP?Ap8U4?E]e.4rvfW1f.1^' );
define( 'LOGGED_IN_KEY',    'nz[j<VJ2f$jsiD}!<VTpr?m{*N+cfw2EEh2h~I5ZMVWW`jTZZ2?R6=7=n){r3aZD' );
define( 'NONCE_KEY',        'VV&F^3(T3.Y!mUxi+;kTNhaUD>7ma* ~AwP6p%A($oe7M*^/X8o<1))uf~xYr*}+' );
define( 'AUTH_SALT',        '9lNL=DZ43)& _Oy|X*h&4Vod@m9~u3T0Wq%}F@M&l&s|~Yz|*}{KZW[9u>6/O8DR' );
define( 'SECURE_AUTH_SALT', 'jtA2x0|lZg0qG_G5i^1XF3PZa+aivH2Fo$>4M0m;)N0sMK&7+sw{atbrALdeN5tr' );
define( 'LOGGED_IN_SALT',   '=ITVC_2 9=axSN7TtZenllX,/[Sfr>Fyi.g[fRI!q!en;&3AA$XJKa}Vk*R4-JTl' );
define( 'NONCE_SALT',       'Q60p(|Vu`0pLyf+m08T;Ic^4rndTn!>ney%: !pqQ}r|7Tq*5zzro6q.7?DG7^ZQ' );

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
