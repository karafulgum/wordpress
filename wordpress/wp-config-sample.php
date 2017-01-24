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
define('DB_NAME', 'startwordpress');
/** MySQL database username */
define('DB_USER', 'root');
/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         'WgEajx3-9)*aRF!GE<C*Ucw0.6k.D-$]Id#MDN:q(M%;;/*(Ae05pH)l]u{T?DFK');
 define('SECURE_AUTH_KEY',  '<=SwNOVYuvcYp8nI4!9>1M<%[5%6kf<c+hj) [c,.x5~cqp9L9L#8*ql2Oq^/mCV');
 define('LOGGED_IN_KEY',    '?+ ~yl5%F#f|PXMxzjL|c=(ltFQh$1n6vh*M-zk[D|iu-b/Tpa*8]{]HQ^-I;-Wb');
 define('NONCE_KEY',        'WJ!l5Nn!&eUgb5x}Sg4Nw2u`c~HZZTSK+=IG[B-M^n$WQn;DcL6nO7$I4w<!/5h^');
 define('AUTH_SALT',        'jD6U[$>YN*?(1x-V+<}^1:!4V=Qgw3eM{-T1A+#=MR~^C9/a+z<d8{Z|%6Q|~p1>');
 define('SECURE_AUTH_SALT', 'RI4&1a}h3H}N/N1u*?Zplx^u0>-][oY[7@r>[I=gw@sxA|^x_5z7r8=Ik`E42]Vc');
 define('LOGGED_IN_SALT',   'z5>8QmM*U|;Jq(^nDZ~iGyM1XNytTi}_nL%{(>@90:+,HS-<)klCWAOn2`frfFaY');
 define('NONCE_SALT',       'MUcR gV2t~-vk6.8,8!J+`.,h<:]X[Z+(,CQYQ(WA*f&|mI/iM~|EYjx_boMbFfP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz77_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
