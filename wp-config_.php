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
define('AUTH_KEY',         '`NP1.]p%Dzg*+c=Etr^]IT%zyW^@ju*+4.Gx&fQgV^gyVq=W-{<;H+o/Kl$U}f L');
define('SECURE_AUTH_KEY',  'sgrG2,P[?+3.-;].knrH-]]zTu$@ aR4WP|$/A$&m>C:Olz%Y[*D/M /AkZqI(12');
define('LOGGED_IN_KEY',    '9Fy4~b)@^DGo|,i{o6S$Al]up&9(W `LCa,Ej{itIQoIg&#9n>@(zRVzDK]c_$7$');
define('NONCE_KEY',        '>[||53[+A+FEg.kfx~4fFlYOB~lLJf@Ad;p2ac4U`Z#;wv+LJS5^oi+S7se7;y]5');
define('AUTH_SALT',        'Nn$/F|.Nd?9kzj-1.&-_|/*8<Nap.?(`n]CR!BOct%-X;[=U6T^,n5-AqUB$.6d}');
define('SECURE_AUTH_SALT', '|!XTf1YnZkT2|)s$7.qBIHe3}<B|rUN75s>ck5R[*q6bw|.X_d]Si1#v5>,<3aH|');
define('LOGGED_IN_SALT',   '*kG`i~?B>,<ra9<+e+;&w>tlpU) ?flQ>`Zjzec .B$  wU6p+N8-fV8-)BvN&Ks');
define('NONCE_SALT',       't11Q|E|L1x?1-6yKYSH8Rn#a7mS<|8y}AZ5ViM6l+{J |K:u[_k<+1`VYE`ng4Il');

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
