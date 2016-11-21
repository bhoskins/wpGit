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
define('DB_NAME', 'bhosky_wpgitdb');

/** MySQL database username */
define('DB_USER', 'bhosky_1');

/** MySQL database password */
define('DB_PASSWORD', 'WiseMen1:1');

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
define('AUTH_KEY',         'wT-A^9ItyEAy8j%<L!HQ3WX||TO,}8N<+4m#`;B)=CD3fM!?I.ehzPMTz5RjT;{p');
define('SECURE_AUTH_KEY',  'sC?vkx7V+-87WEP9GV^=Ez[/LiTX:$;u!}fo-H/zJF*se/N W5Lj3wnu@B+p<cKg');
define('LOGGED_IN_KEY',    'G$m?=h_3x{537GTU/j`IZNxE]vYFQZIu^?yZs/ZB`%hVO~}To%*ITXyO1&`9`x-F');
define('NONCE_KEY',        'bHI6zga99|i,9_eFOcWd(G%ichd{c:,%QoKEg o039))pfdhPZKI@r&H%N-8-:?z');
define('AUTH_SALT',        'OiZ*-hm^]F/T5bK#.$*)Z*vO{w9yEZ];owdMeo8hI-nlBI9XQ2@(Knp<mJb3y)gb');
define('SECURE_AUTH_SALT', 'zN^dK]^ .HtP-(G1m;i4fn`^~nR|+iF*bX%|/(7YUV*9x8:*w+/|:um_UF;pMQ1d');
define('LOGGED_IN_SALT',   'F&B(q_5.XYqXr/L6&}+wypq3*W)(yaanA2zvo7Jz5,H1eK%c!|r_nQ[ISf?VwPO>');
define('NONCE_SALT',       'DT-v9JC[w:_>fCQb{!s_G{835oHF4Y`H*xi6@5v?I=|C9v0/jT!n9XEsWDNlc2Hf');

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
