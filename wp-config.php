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
if (isset($_SERVER["DATABASE_URL"])) {
 $db = parse_url($_SERVER["DATABASE_URL"]);
 define("DB_NAME", trim($db["path"],"/"));
 define("DB_USER", $db["user"]);
 define("DB_PASSWORD", $db["pass"]);
 define("DB_HOST", $db["host"]);
}
else {
 die("Your heroku DATABASE_URL does not appear to be correctly specified.");
}

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] );

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
 define('AUTH_KEY',         '%CUuZN]g8mAhpu-Qq7GRIRul-oJ7#Zst,Vo,/gRhEVNKR^%Md YAT(|[9=2`6rFq');
 define('SECURE_AUTH_KEY',  '&s.N(*c79mJ4[ZaYR|3{q5a?)XSTH}?+.+h^pWrt%wHw+;; (-`y$i$ozCICRh/X');
 define('LOGGED_IN_KEY',    '}DZH#E=Kq>8er0g!X5WQT|y3`f2(&gAv&9q?9-@{4pr)*^y]/t~JuK+594P9B yE');
 define('NONCE_KEY',        '55;],,)T}@6EBa_wa>|#C5XZOny&FtK-|~C6CjS+ZV^*CaI-%FfPJ/g-7BLVFo:}');
 define('AUTH_SALT',        'GUW}-FhB&(lc `96Q(uIhUUHU(W10o..jb0H![yp,Ij&x.kdBt5GEQ,{|-(iK[lr');
 define('SECURE_AUTH_SALT', '5UOK0%U_fnU@.D@1>n:ikl9-~ Rm_bnU6fr[H|b&$[arK[lZ%Ea04?!h?S8SMS@g');
 define('LOGGED_IN_SALT',   ';1<qE;4s/Cf%HE*c6-FeQH6+|d -DHF|$pJF4+e7FP@1xs.88P+,+vp&(#NJU&=>');
 define('NONCE_SALT',       'Q#ACQLyK) eJ|g-gNe;X91(9-~|; |Z+5&u$p-n9-g?!~l(,LI|oY@!gD^B(e(WM');

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
