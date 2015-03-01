<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sanctuarysite_db');

/** MySQL database username */
define('DB_USER', 'sanctuary');

/** MySQL database password */
define('DB_PASSWORD', 'change2011');

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
define('AUTH_KEY',         '5PPJck+O>+^+_3m*B(2BL3YW-ZN$Xg7kD}lUoxo@opN^Ki%suB[_1)?>yO3=+Tjk');
define('SECURE_AUTH_KEY',  '[!k/~4Tmbp`|c:E?,O|eGQwBIx#fY!MOGk13EB,++1!/Pl!/!vM-L=WySc?/nfvx');
define('LOGGED_IN_KEY',    'miW&_`HzJU8n :kf#op^lewh|6mvd(hdQ~GgXt?-d/&$G8;D=tfCWnP~b4Zt[dcB');
define('NONCE_KEY',        'rx&qsdKVZ(C=0OM^-g$4JWLg.?^vSPYcZ.|%4d`<-9%*Fo!3sh6gqU+;V;NcZ4r$');
define('AUTH_SALT',        'L(+:zmK|q>|*]*%%|HH_<gD=VkX6[Q|f8zCP{|&UjjOdOL@Pp6/p%9J?;H/{8!m>');
define('SECURE_AUTH_SALT', 'z4- db{>;,~_/ao3e0J-IE&zzO?thG~K|oc#89)WDGqL0;Q`WT~9~G($m{~7=+t>');
define('LOGGED_IN_SALT',   '}W(~wI Om(%yhsH=54R~wX>>QW-x]vX}ab }qo]Tu30x|+y:*rciN,_cB0dtKG5W');
define('NONCE_SALT',       'P6)9a5-NF#l#dY[Yd-u<n{Vz79]kV#K3dpiqM9EcJ3+pCG(_|4HURxP2I`>z(Er.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
