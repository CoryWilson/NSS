<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sandbox');

/** MySQL database username */
define('DB_USER', 'sandbox');

/** MySQL database password */
define('DB_PASSWORD', 'sandbox');

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
define('AUTH_KEY',         'a=h+:b+kCNLv*hr0# !Ed,IX-3#,4Ey%?M;=7qJAdaP5xrMF*!n4Un<@hE>{5pO8');
define('SECURE_AUTH_KEY',  ';dSjq3kr!Eqe[RBCPLhhyN%=Ohu%.f67B|OLB-VI8|/+c,+0/,*fZr`D%(QzSC>8');
define('LOGGED_IN_KEY',    'Tag(!G;<0>2JNj +<3wwE&H3;@lR#)A73Q:TFDHX5l%(/<s]V;v)S@a8mFLs>hjh');
define('NONCE_KEY',        'bH|>+O]a:B|h-my2TMb:oty$?t:/:fMn{_Y]|1:XQ+?#55*-&s^}W6;;sRV+LRkF');
define('AUTH_SALT',        'wHDHh{hbD4Ci8zhn4&@.jEEz<n~!LM!0.dV):hldJ_1y1Wdjf;+P&t:<5O92BI6 ');
define('SECURE_AUTH_SALT', 'Bup1Ee0E1rBW44o)u`H}Z&d(G ^LA6p,bb_&a`;p%)8=n,*t^DH1PFylZ^O$,v3$');
define('LOGGED_IN_SALT',   'ysk>xD8QB.:>]gFPE2$XA~j-/Lt28`l e L^g6 K_|mZg89YUJEz>r;9AbFVWvJG');
define('NONCE_SALT',       'mAl!,Z{mBO|a~^j@.P0N<]nY2&w&@c?.xfWLc$/9X5OJ/d0||pjW]3Oatk0:@+k6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
