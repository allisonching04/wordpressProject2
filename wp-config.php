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
define('DB_NAME', 'web_project2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'J#9aAoYTaYh@#q/F,:Z?mDhH|do6My!Un =:C~^c<g.wKO?v(9OVi@t4Cfh/=c#9');
define('SECURE_AUTH_KEY',  '|>67Aj~ G`^_X $P^D:@C25}`5o_GTo.tRPfT$Yy=R$]g6kp2<pW]3P<|)UHWI{P');
define('LOGGED_IN_KEY',    'jElRtIGNzP<=<vFTc))N5`BV03d/F]3~6NWWfRw#JC`lZ]%QCVq%5!qM$jos1/^n');
define('NONCE_KEY',        '>Nz1BveI7#f}=6v@1s_)`oy~wl@ZF7Y^(6+6X&:{@?E7b.m46_?@A;w$I-q;0C++');
define('AUTH_SALT',        'uvb>.FJL,Q8|+P+2640V-rAc|?2F?b:5CRq<cdW49vgJ1z{msl/Rm/H&rm>M/hzo');
define('SECURE_AUTH_SALT', 'Flc{FJn:I3=]h;FOK-pK?-#BYwU6KC{8r@1#gp!BHxnxM8Xg:GJiAADgHmeqFB9w');
define('LOGGED_IN_SALT',   'VA@~}74UYf6i=B~S Ir/wO#KB7?0((}}iyZq@e^JTxq)l?oL;2yOL8!sN3]hfv4P');
define('NONCE_SALT',       'Z*IRL1~.},etc&>r8Xk-8&ORK#+[@7y:}e}nD&uh&r(uO)36$5fR,/Hgkhu`<j}C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
