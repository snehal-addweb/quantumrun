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
define('DB_NAME', 'quantumrunblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'DTN=#pXz,x8-7d]/hHB&Rq|;-Vi|Zkfi5b0d.9{D?5c7ZCeUI]iK< 9}mTGL-n+e');
define('SECURE_AUTH_KEY',  ' T?N;gL?yOjWk (?B W!K*,d+-}[1;5=-Q`?LJ>i^1k[XQ-Bj=$l~kqiAUW1-|)=');
define('LOGGED_IN_KEY',    'bi,*3@ErK_;1^I[T@F]aw`Z5Hj*{.d]J.T++5T,Zmi5E@xt;1):`OZ#5qVS-^uRT');
define('NONCE_KEY',        '2YCxrFb%(D?=p)E.luWvXMvaKIVb$IeOs~ML#uC<ixvcE/;)I0:CKY~: (NiRbVU');
define('AUTH_SALT',        '#Wn!|#w)X<<S#<=f~T*xe*N)U:5O+a}X2f&5HL-l71Y{EwPJ~CJ07{phC}7fJPQl');
define('SECURE_AUTH_SALT', '6SbqQ|8a?kOd 4*zMn:+Z*ZO)e4mS|-.-C<u{E?AI|J[)=KC@@KZ*F-*yi|ugZ2)');
define('LOGGED_IN_SALT',   'fiX^6/+mK:nS=-@jMJLGPbXpD--C,o6>u=jCtFd9pds|2k]A>HtW#w8Z<?#-v!H^');
define('NONCE_SALT',       '#9H|hV-r[hbjLwiK!<FbFW2IRJ !N:cY,c-{tr|FZ6K)*nDVKU}BWBI+2$&2[SsF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'qr_';

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
