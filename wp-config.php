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
define('DB_NAME', 'fmp-wordpress');

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
define('AUTH_KEY',         '7`lG]0dVgXbdtyttwp.:|ghb1}/7tS<vMo?1[J}l$U!Rq`$_yyiegLiCxT<6ow7i');
define('SECURE_AUTH_KEY',  '`=bKN<E-em5H$#SN&~bM-%uE!-;<fQZnQ@,RuMyFj|lb5s+Wd6LL1L#=di<#^Qyf');
define('LOGGED_IN_KEY',    '(K}(lB<?~aEr;+T>InW&}dCW_IdmaYGI!l=x:#xe(W( U0=M{O]Cf*Xdc];7%,]$');
define('NONCE_KEY',        '5IU~D,>iU]1 4}BEN|:I74KB*O.Sdg37ep4Yad_BC4x2]~5`_f=Y(@#ldBx4c~oC');
define('AUTH_SALT',        'Kf9:&.O5L[M}H!J51Ui&`O[NO3r-Z3K4!:(3DeTG(BkWl ;1/|zqJ><f?K*dF)d ');
define('SECURE_AUTH_SALT', '*<%;4wrMyl)W^CJVs?,jVlCIwX=m>+?n]NN: xR:^6`,8iY0g!QzP4ShYN;Sie/!');
define('LOGGED_IN_SALT',   '6,j][$gKq-LwN;[rtH-X{qY0:PN!iQ9IKzb|b(OX.DQ;uJ8471FN=Efc}dj{w|!t');
define('NONCE_SALT',       'YiCs<vd1DmvVGB<N;o>SB&CH9)dC&1p[B?p0]{Z2L;D?zP|MNbry$*ydB#IG7K{^');

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
