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
define('DB_NAME', 'hr-manager');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'F<XHW<L`ix$}_*/[Bu 6LBB1m=j``)46j+y+Fi]E[hveHlDVXC0K:~ sbqf/Juii');
define('SECURE_AUTH_KEY',  'YH<+r,@>{Gm1GMy5Cw0@7[>7yw!bkT>S),,Xou9f!uF|z3Qcx{Wry,{Xuk}c]g:v');
define('LOGGED_IN_KEY',    '`0wVt)CQl$I<@!NDi1P[89wz/v_ml O=*B~&2$ZgTx`1il0#@>t1mo$D`I`n-xgt');
define('NONCE_KEY',        'x+{>v{)NKK0M^fo3EvDie0v0Ci-=lX -[Ed>{w3:<.qn?1`jQi]xGKTq,NrcgE!h');
define('AUTH_SALT',        'Ox2P0ViL)Q{d0Fs!_A8S4DHZzX,=s;URL5aWy1_ZPbw`N,QW}O8*__uX!YL6GDrQ');
define('SECURE_AUTH_SALT', 'X6;Z>1AzV[v^i$Ws.A42K^tjq`|5v+lAF>FCA>dwRduj wT[#xuC.+HQ]b[Ku;&.');
define('LOGGED_IN_SALT',   '7m&uBT}$</(/J*Pg=k)}XCIy+sNDe[c/|?ePqiW6lX2-xM>J4dU.3F;$A]kO@SQI');
define('NONCE_SALT',       '.9+K|#M%,|-s!KOU]B`n.Ac/)]1zE!Jz0V|?%5_<Ufx:<tW9h6oo3DxL!>GtX`~a');

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
