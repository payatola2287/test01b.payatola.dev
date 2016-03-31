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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'Vc%X2 _iRh%J[X0-~0+e%-#$t-LS@yNs.NaG+4`0jXn#Z1#+dlnvbcu?h@|cwfC5');
define('SECURE_AUTH_KEY',  'v}>csMNd>SY`05=dB]#|MIN 6Dn{MAzVjJ-N_z<5]xf5<LM4ki_>4c~EH(HivoD5');
define('LOGGED_IN_KEY',    '[L.C-,iC6.u{IlkhUrgtBsW4:bx:-)WJ_5twU(7:dgC$> -vkHZVT^tnqHQQ`i<E');
define('NONCE_KEY',        'p?VP&@V*80+0@8I/9!.iYES<<[ca|l{!(b+k,=m:f*ERZ~(^Z(uZwK,-{[i^+lon');
define('AUTH_SALT',        '0HJW.M>d O^|#O]/b`l~;=>hS<d^exRCe+j Jj---tBY%QMZ,E+3(+d^.5q_r}dA');
define('SECURE_AUTH_SALT', 't-fA(I;1{#~BMtZjIs)t Bw_Lzw/zF|m-qLunaJb(aCEMR`Vr431RoFdRWy!CO&6');
define('LOGGED_IN_SALT',   'wEUO:t#M0C5QW$ts|u]~!Q;e|9hAhFV+z[HoSuEk{T^|y;>wUdNxg+-$Uszn3B_]');
define('NONCE_SALT',       'HXxFuG?Mx8>E1t8Mkj{ro$=$6k)Ahhrv#@|)iUon9umn7+Cg||Oz}K|bYNPAO?CC');

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
