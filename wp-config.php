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
define('DB_NAME', 'heroku_1c29b9e52fc1021');

/** MySQL database username */
define('DB_USER', 'b8132a6af82172');

/** MySQL database password */
define('DB_PASSWORD', '405ed2b2');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-iron-east-03.cleardb.net');

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
define('AUTH_KEY',         '3I/L8Hl5L,QD@[=6SbL]U58~- yUf{zMmbj^h}sSNHBP$^6.4RjS05Y;k:]yj9yV');
define('SECURE_AUTH_KEY',  'O%n+^)bJRwgkDd_>MKkAa>,bw=`[jI#Px+f*]#I8:Uk7OtH60}kUZDtg:AE42L`?');
define('LOGGED_IN_KEY',    '$w(#T1cs*/k($As&Sie_z}E+uHqv&5tfqNa Ko2-e@;E(i(L=iL$HB| hC;@KSd*');
define('NONCE_KEY',        'i&z0rA8B?J^8<?G0xY<E82jz28?G[D~X#eVTb8Q*pt*466*n|R6bOIp2`>}.npjV');
define('AUTH_SALT',        'x0~DAEql!!A]wbp[W*O~-M>~xryA/)ZPa;%5#@rmP:&,1Mp<Rp?a E3G<$M a9~f');
define('SECURE_AUTH_SALT', 'sB<An f(Q_gYR2Z1gLdh&_izL|Cr=~8?~)/}[et0(W-:W27bDF}dbVH~P-<w.rX9');
define('LOGGED_IN_SALT',   'j)@)mM.Q]/besw)rh=N^#m>^losG*h,GEtC:)N6Ta-d@x{W[uR^R9Yjv!8Z{tvnZ');
define('NONCE_SALT',       '[>,SP`)!$HYW]ECGr#*<B>l+K8IQTt_U<~)e8]j}Js=O5gNgZ<[D{qKf7r];Q4V1');

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
