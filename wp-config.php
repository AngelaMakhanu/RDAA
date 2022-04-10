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
define( 'DB_NAME', 'rdaassor_rdaa' );

/** Database username */
define( 'DB_USER', 'rdaassor_root' );

/** Database password */
define( 'DB_PASSWORD', 'rdaa@2022' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct'); 
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
define( 'AUTH_KEY',         'XRS1XTbj,,k!>=$!DnWTCoWL$rSfl~X[{;C(jk= z_i.ii}[rgsfWQ!QV*U|*N7*' );
define( 'SECURE_AUTH_KEY',  '])2g.vWo98Uqxf,0!Ws<r8F#;3@~v^G,H31:5fv(ug gW&pZAeDV{J1a7+;1DUW[' );
define( 'LOGGED_IN_KEY',    '>2:[0$wJQS2x7;:=`Prmx?_5s__&|o:]*k|Qo7Rw,]]~)Qw5A$dti,WP.h9Kqgb$' );
define( 'NONCE_KEY',        'qR@SHpeT{.h5*k^M>^I;)]!$<z`h5Tk>}WU}Hy~iFjYZ`f,B8O#J@t RTb7zf55M' );
define( 'AUTH_SALT',        'mmTs~~mjsT?zJGZp@a%F-&W0IXf1g!;t(vX)1HBoINlX$pRFE#PkF;-Y(Igi)=C5' );
define( 'SECURE_AUTH_SALT', 't_HR&lZcrUu|f0,4S>RF+M[,3EE%A=# TeGkrzIB,[RFR+26;|SZoUY .mj6{I`n' );
define( 'LOGGED_IN_SALT',   'D,Y[Ip;afbF:aq4~k}Uz;bx7H_fu!&Kks-WlYOO[f.(4}ZKLzbiqHT1rV,S 9A:_' );
define( 'NONCE_SALT',       'bR[jf+A04]nBT*SC?Kki%[p!W6kURgsUuB3V54NZI>5<`<yjxO51ma.yb%Ls/ia,' );

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
