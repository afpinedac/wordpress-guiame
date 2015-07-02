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
define('DB_NAME', 'blog');

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
define('AUTH_KEY',         '/@V4ThI}[L8k{-Mo!5)5761<mFoD0A>Tr5qauTtK`y)X^a/Gmf&Y %<DT?q7!]9W');
define('SECURE_AUTH_KEY',  '#`c!ddvT 6Jbry}qV,OW*NU!F5$J`f$]T1#*i+iCDcLMQQ;*]>`B~3A,R`yNBbK-');
define('LOGGED_IN_KEY',    ']Ud{2VjYyoMz|EJO6O=D$17h6pIHByfjZDfYCD2S|j5fKY<#@|JBvpPav)XNZxn`');
define('NONCE_KEY',        ';%ki@:Zb #RJ@kU*KO_IZE_`@1U!4xCg@|K3lLiMNq-yTG|;SpVWeIoy,7c1|O/%');
define('AUTH_SALT',        'H v,:1 @xSVV_w+Vh7Sjbn|*8li0_$L^oRPS>i8nnPTgG5Z[7Iz(cCFMmNFBl-K1');
define('SECURE_AUTH_SALT', 'P+m1C5=>#4wahxHipdgfdF)]w;[rOH7ByOU:0Pl(L|%,`~cW-~0=iy*t!m+|pZ?A');
define('LOGGED_IN_SALT',   ']=yFiA$<(<qN83{pM@F%/b&7 _AJG;8jZ+b4f=2s-DquG<E+mf]2/4+Twqoug, {');
define('NONCE_SALT',       'YYS<xpBtJL[^U]5jz|qvB K2>[y9C;C]y)RkbY/T8x!9gY,7Z8MxBW$$7:o6vjDe');

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
