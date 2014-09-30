<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'quetzal');

/** MySQL database username */
define('DB_USER', 'quetzal');

/** MySQL database password */
define('DB_PASSWORD', 'neptune12');

/** MySQL hostname */
define('DB_HOST', 'willow.safesecureweb.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',        '*,jLAmCV{;-p;2I-Gd|q)]K2/99H%80n9hV&Srj}%bAWYnBqm@FOrQ1e$8#Dn[k|');
define('SECURE_AUTH_KEY', '^k]d6~F{+CThwF`,[X|}iA%(d]i_2LRumIo<+#P|4SOB$XO_$tRQ&q*y(Jdb|gl:');
define('LOGGED_IN_KEY',   '<#/h_|^9Ji][6=><.BQ#OO|#MZJ)lV}p2X0k(/Br;MDVQ5+4h`YrU,i+8G:& Z0-');
define('NONCE_KEY',       'OeZ.s:L-/&Nt&)eI,7q+<c&H-j?Uz7n_FdMd7|X3~Cm:c)vG97UWs_|k3@y6g?Bt');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
?>
