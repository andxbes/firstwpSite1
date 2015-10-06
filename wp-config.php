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
define('DB_NAME', 'first_wp_site');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8mb4_unicode_ci	');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7-;a&Jsi]YI#QW|<k*](FG-KOu*Z<|Q0n.Izwj|;-- +r--uM~M=}JI^7C$F%:v]');
define('SECURE_AUTH_KEY',  '6Cs&_kpqfDVc{BS966=aAs]t28!{yje`++~8L))@[GD`|f+vI+<Z`#$Wi|E@io+_');
define('LOGGED_IN_KEY',    'FL1RO?v-~R6,yVm+$].([H.r)|l;-| }dU?yvIV$+,zuB}-xXJ%|L9D2x-qHcP}-');
define('NONCE_KEY',        ' @FFj&jXe~O/^zKli5{0~:>$qZ;v^9$kQxG~H?fsL`{XSJvXGb}VICp@F7&w#w4/');
define('AUTH_SALT',        'W<]Cm|FU~+TLw1{6Wjvl&-|e-[5O)[>k{@|!+k((oIBBmL/nV+n#cOz+h;he!+@c');
define('SECURE_AUTH_SALT', 'uZ^!|jrav6y%q<(qh/g02Y0-2nkkr6W~=a~:TF+*+#u}|P_CYgTa)$jh4I?8wCF5');
define('LOGGED_IN_SALT',   'v]m8-i!;<KX9),NVy JGh4iW RAu.FmgXInMt}h~98S-`?r%Z9k,StG6A#{(zL1k');
define('NONCE_SALT',       '0_~|wD]lNn3T>mzL&qnNO:R%0~w+X1[|:W,R%UT_UF,/e<s,BOG]uzu77F&7::Ny');

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
