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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'treatment_study_dutchland' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '~rY-()ATw=o|z+JO7Sv8%Bo%?vug6eK[:Brg[4oX2HJp>J*1H)_<ENp?}2U4R 8e' );
define( 'SECURE_AUTH_KEY',  '#t,#L|>QrqPaG$EoezWF${U]Ni86Ld*}bx*?Q ~WBl/Wc5>`d2?5y]6pW6fV QxS' );
define( 'LOGGED_IN_KEY',    'OUs<BQfXjnd.;+YSZuJma+(HZ_tsS$JjN$Oar*xSIK(Qyitl8N><sxVd!AvaGs|;' );
define( 'NONCE_KEY',        'M<AGkcom8MIo`e)Nz2-Yzjo;qHL@L)#xwUEV@@N}l[TGm()?8aiF`|QR!J$4l$R|' );
define( 'AUTH_SALT',        '<MuWMZ12/9Cy_ItdxTKs~!~W~tAfjAuW#-0Y%qo%)$n`V(jpaX/*AjD3rs5u-2a;' );
define( 'SECURE_AUTH_SALT', 't@g#2VJNR@ _MCOpMeDo_W`y5fjT6L+.!-|xRi=^H`:L]+@A4qK5S0V-h7:96?yp' );
define( 'LOGGED_IN_SALT',   'Z{O]Da_*1wDP;+o5RP0:QPQ%JI>pgzD((zS d(a:<(2@fY[*Wsyc]Tdm{_V.P^Zr' );
define( 'NONCE_SALT',       ',gERD^tnOdg=g(yNZ=`C@hxcVu/^=Di>d]ZQ8SRb1iHz;$}+Xq$n<{4Zb-T)dx/`' );

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
