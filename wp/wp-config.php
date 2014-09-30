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
define('DB_NAME', 'db1056574_kapdb');

/** MySQL database username */
define('DB_USER', 'u1056574_quetzal');

/** MySQL database password */
define('DB_PASSWORD',"Quetzal2013");


/** MySQL hostname */
define('DB_HOST', "lin-mysql06.hostmanagement.net");

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
define('AUTH_KEY',        '`9Otv1!Db@CFP[W1 ^$`f8zT[9:l [ba)) H<iyzC96S2s](xpxN#S<Ur&+*7y>)');
define('SECURE_AUTH_KEY', 'iu]. aDNs2J7_0/n68X}m#?jm~lxBRwA`x<e7JBS&xTH^-8$O %Oj:Ep0A%jNA}x');
define('LOGGED_IN_KEY',   ']lI$K;4u|)VW/%|8y/j/!s:sAL:Y?5I)+j.qR}yXX36@01tse66=g}`KV`CT4./-');
define('NONCE_KEY',       'u,&Nylgs|2IK<n#_uZF+oDxvVfV`?Sh}B.>qpzr8jtDB>@y(o4Qr|UW8F$cZ!Xc/');

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
