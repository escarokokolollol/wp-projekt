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
define('DB_NAME', 'wpdb');

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
define('AUTH_KEY',         '3CU`U(Kv@%o1,3xW).*yp|A#OEIx^ME2@>f;LI|^cq/4-Kjc{l&6  Ato+~=kohf');
define('SECURE_AUTH_KEY',  'HNvz <di-?FUEiVHE9L/Fd~)T:$m>/@w-gAhK`d3(GKh7Wjul.]pch;Ass#`Vlrt');
define('LOGGED_IN_KEY',    'o4gAT#s8Hrcmva8=&li_~Bm6G)P#**{O.2gqwZ%09*Y-7F+fL?$~QY 1|=C6v`(/');
define('NONCE_KEY',        'AduH8BT]lB9cTN=d)M+< i.X8vXx6Z>T0K*2w;;A:BaI&%=nkK>u;Q2Hg1$<Ry9H');
define('AUTH_SALT',        'TP1H4[:|>S]yy/uS;tc~G9sk|m X(-b%fW`g-8^+K}J-%iJwlq,~<yDR~z`PpkQ,');
define('SECURE_AUTH_SALT', 'GL q2tOO+6[ixLRpd6y@/^DA!&@qS/v-T<MBbO^U>lB;|lE0WR}86h6FfcCjPz -');
define('LOGGED_IN_SALT',   'C-D|QBfsXg*5s*vhs7)8QpdKdRL4a24+.TV<p*}a)p-LTh!~{dYV6CP-|8 ->UhR');
define('NONCE_SALT',       'o8<N1LEy{2*|/4wYMfY4~e9?(8ygUkFr|qy)o1o!0m$(I|j[A/qP$gIp|,jmF5kN');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
