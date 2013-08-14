<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'scxserv_allsportsshow-live');

/** MySQL database username */
define('DB_USER', 'scxserv_aike');

/** MySQL database password */
define('DB_PASSWORD', 'qwerty321!@#');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '`7)onZY.PI;)JhwCm7rCg_Kg<RW7]bg|lJM1*$h,}HRR_;U)[ny;1N{ T=F3]eb&');
define('SECURE_AUTH_KEY',  '0|W{Y%1SNt~V8@EuPZ~f_Hd0a)/b%3W+D?*m$p2}Dd(isLV[u@T]~r:deOUdH|B:');
define('LOGGED_IN_KEY',    '/4=w>2)0m% lfZ2N> 5>?T5Zgf*_=37)mM*Dlj;5K8P#M&MfPF_!<vQA|$5u8m_c');
define('NONCE_KEY',        'LGw>6]1:x=Cq<@@=Y6ukEqbg3D(5mx>3yQG9D5WI4)`yo{I2pM^Ly~%&sFP{HE*t');
define('AUTH_SALT',        'J@:D, m^0lj:=@lHow6Fyv?yOV(yIjzN}B0Qa;!?AmL(+kK)umJ07(yjo7U$kk$D');
define('SECURE_AUTH_SALT', '27mGJ^/+W<ZA?9t[Xog/s._f:Q)IG.kL}R--ZL(#{hpd(K_0:w7=$x#-8w|_aO5t');
define('LOGGED_IN_SALT',   ':=H%<Mn$&|T&sV+-QPPc<8u0CsGd_sP~?`yMh?>[_7@AT]mZ@(/}3uHJ0ncWsCX=');
define('NONCE_SALT',       '4pdi/S=_a<.]}zOo3Vb-R%_N~v?|*9yz{r9J{mTp|qtN]@A6advL-Wy?.|Eu{!#j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
