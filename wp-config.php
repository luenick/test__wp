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
define('DB_NAME', 'test_wp');

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
define('AUTH_KEY',         'UNRg_py{hkxCex_#eiG7W!w-Q_i]8R{4)+ QOfO,He,t:1rq^2Q:C9DW})l9@}/S');
define('SECURE_AUTH_KEY',  'I#ox$]Dn_A_|q#Fa]Twb*]L$1tRE)v6/5 SxjB}x!xpaa+d-l]YEVl?RX+R73BDu');
define('LOGGED_IN_KEY',    'oT3w>uPWXJu[--[$q7euPvzQPu)T*Z7 3_c6Ix]Y6|{K[X+WRa2q_+A,1gB)]I[2');
define('NONCE_KEY',        'jrD~qZg%n:l:3H]/v)W5()&CqK05;HPY@F+[~3_/8v;sOl|(>4;+xqw83><|I}[$');
define('AUTH_SALT',        'I=m5GBb*YrD$7[:>;@)O7dPjCnMk9Yo.CTIZX|$|A[a5(yKGAVB]2o@DLKLL3hDN');
define('SECURE_AUTH_SALT', 'kz5WLozg>-v^Bt%Z^Z^[)KSi vrF]&(1~sP?b3.OU<*[ggVLGPK1`VS_GB~gnd]9');
define('LOGGED_IN_SALT',   'Xu5wy!DAgYReF~rY.2/OgUo@vNpM&$5g1?,4]1E[CbofUQ=%a%!p7^S1H nHmAmf');
define('NONCE_SALT',       '=MAp1f}Pl6jsZ3i[bvw[e{OIiRe% NX~{LCg;k]pWB.]FsuZbJ cr:z3]T>SX@vz');

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

