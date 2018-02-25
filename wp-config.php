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
define('DB_NAME', 'starch');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '<dmj*Bd~ElLMu2&45T&RQ|t3X;t@$GwvH&2*?[nTUI2(?j+[l&MUJy|)2_0i5w;e');
define('SECURE_AUTH_KEY',  's~e6NUs*=cwT;|)v{Gcm?c,!)W83od?4w%Wzi?1(1Lks.$0?(7%1W2sE@ae>+G@v');
define('LOGGED_IN_KEY',    'OGSs]z;Pb$SY+:By,Id(9 SBaVrqxu$Nm-nqPvK^a@tpjpTLXpk8cl]@{q_G;bP#');
define('NONCE_KEY',        'S?L.0;6aoK;s6 kn$j8+*r/[GNt.5V/SIc=CZE5VS-mrPxci}fiX`)wRBV gC2mU');
define('AUTH_SALT',        'K]QFTnp-e?U]bs#}&,Ni3Tx`tu*+Duf,7f!0~u.RU%]Bg#.f0D WcK3N.I@Qago7');
define('SECURE_AUTH_SALT', '7gxKJhoR[lN>D@.NE}gb+o=StsuuD%S(M[iQrFBoM>ovR%T4q=R5:sr;1T pg/49');
define('LOGGED_IN_SALT',   '42NUJ*S6MDe*B%Dr`t[Xg(Z}i8x2T;a_h:@>+PyY?1]2@<*_OsV~/)]BkPajuX&t');
define('NONCE_SALT',       '~Ckf$<bWZN!u/xBo)z-,2_cEsdhfQ#h{z#[Z=JVyv:8E^+H:?PMN@V.C=55U;SD4');

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
