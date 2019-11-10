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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myproddb' );

/** MySQL database username */
define( 'DB_USER', 'dse' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sojudev1234!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
#define( 'AUTH_KEY',         'put your unique phrase here' );
#define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
#define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
#define( 'NONCE_KEY',        'put your unique phrase here' );
#define( 'AUTH_SALT',        'put your unique phrase here' );
#define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
#define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
#define( 'NONCE_SALT',       'put your unique phrase here' );
define('AUTH_KEY',         'Y>>O-i!N!-{_r|,f&*Joe--2o)!]E<x;4# y1lr_cawJhN:WoMwn8-s;:fW==Sf ');
define('SECURE_AUTH_KEY',  'T+=$w =c?Zo1$W4Hi-kVm0-Gb9hXkl=F2Q5G =3LDz$F@/!b@8hts/4iuqz0xA>v');
define('LOGGED_IN_KEY',    'S_5 t*rW_63w=:7<CD3;1WiWI0L7`jLI 46|+ktq|t k*N`A,wOa@n3k%>CNNH<l');
define('NONCE_KEY',        'ts7frA.tJ%AA5l)}6sGv85)XL~enWnM}pN{gW4Vxq|oc9.w(t,]yPX(3!Z(Ofl+/');
define('AUTH_SALT',        'r2<& &oV-q<i#_F?QVgxeWyqto9;@9%>o^kQ+F4D. /5oE{ONqi+,ThmehqDZdzo');
define('SECURE_AUTH_SALT', '&</X<]HIO9)2S]>hym/hPxf(6xxx7}M&a!w?^[B0-d+tUXxS]BNbyW@|jVgu^xh9');
define('LOGGED_IN_SALT',   'g?fHRmy`f)NKFo/!_+Zi$Z+tr:+VpNc%$@w>bODt}+bC%.X!(>va:3vL|-.JG*Z0');
define('NONCE_SALT',       'wMapc|OSZtB08.E@bC/{@vw;y|GeSQ~t==67,dqK~cVu{(y$aj{/^9+RF5!RLJ-m');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
