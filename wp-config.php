<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'di_wp');

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
define('AUTH_KEY',         '5Kw[i 42mWm=|FuEB+;xc4/=,v@HoZ!-~}4{sQC: lA-O_> |cRqPi:(2N29bRme');
define('SECURE_AUTH_KEY',  'H[A,D{%0[EczN70:W|f8(++Pw;j6R@nR*NB!eCRvNlP+W9|za*S+h 8B~Hy 6$D%');
define('LOGGED_IN_KEY',    '/guWi5{sB;<7xYi0yjGeVZZKpR]Cy{s$r0$|3{1T[S0qj9a;zCTLin=_-XoLomj+');
define('NONCE_KEY',        '$b[KYxVYgif-zrVowlNxLD_*Y#=i-K[-j:|X]lP_%S1H54-JSl@r,|G1n<zc:`m*');
define('AUTH_SALT',        'IVU-:n)uk3DroylSWj=|^&vJ$+2&gf>x9C*GB5gP,NDNU#j,YW+^+1O|ihH,m -*');
define('SECURE_AUTH_SALT', '9WZLH0o @7Kav0!Lcg;{xVz+|,-@}=,Y7~<-teXMGVncM7y,-U4v#ir>R:70v2}q');
define('LOGGED_IN_SALT',   'wv 2S5r$tD+*acpR<`{n{T6:~kp,8w|p%$`B9cQjyQk^k0mCoI2U8HK|&]|E#IaW');
define('NONCE_SALT',       'H-UO5`:aVBk16t-YuWb$]z:_p|*5fk@`)@VPRK {,KiDPG1zU~$^+Ch |^U}H,ia');

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
