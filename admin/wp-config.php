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
define('DB_NAME', 'gwinnett_brawl');

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
define('AUTH_KEY',         'qO2[i]-P8?[:hb@kl/5v,,^(y)8EP%K0,l! hwN]y1`Q){xN#IcBM54Vf)d}{hMN');
define('SECURE_AUTH_KEY',  ']mW7*A78>R]5a+U sp_`J`]QmeSU2m):,t0z0ovg}eGqchHv<hkykl^s5KZ=VP0g');
define('LOGGED_IN_KEY',    'f8u.85n:hm>S|HQfDffl8UWO6Rl*rmnSrS(p76KRFw~)Q{APd8Iq`jv=Z9~>?^w,');
define('NONCE_KEY',        'HwwIvA3HU&~1rm:y*pmG36paZ>/uqY:9Qdq+Ny77&z:,u(1Y2L@%|cb~IZ<j&daf');
define('AUTH_SALT',        '%02okCvf1]Zn4SMI@vsP+QI)e*?45Yax.~y7K.dD !HH)Fo3^uHp^Lt7D txs%Vj');
define('SECURE_AUTH_SALT', ')+}&Oi39b1OfO=A5e/a0^xY*Uq%d-HP 4AdV9{9,o3!>0N<=8K6uwd3Qtg5I8`^}');
define('LOGGED_IN_SALT',   '>@[CcAw?y)UQ|q21y- Z+p?c(, pRnqwo_@ SEB3YJmxl=#hLXQMLtEHecafHPLJ');
define('NONCE_SALT',       '#]@cZ`[|}] de~)G|$`[IAQ0aK?Sh9B&DUGX>qxa5Xx*RC3p9> F}VnF>S_4N$? ');

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
