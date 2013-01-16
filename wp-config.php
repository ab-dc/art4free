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
define('DB_NAME', 'art4free');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'QzM$6YpX4F-W`UDK3qU?V3$;YbpI1uMg3!;Dw+9|W3=JEwkr1~E;< -R@zHmzvWA');
define('SECURE_AUTH_KEY',  '-XKl~oR$+Y>*hSaT9<%1^equHHeqyLYVkpOi-HDaAeR}(vp+E#Z&B>BVWL1A-v+g');
define('LOGGED_IN_KEY',    'A`c2>*;4e`#|_8A@Ug{7^Ed`cN}a(aTNWu4-V_,-k:lj 4-o2$2oK-*Jc%p6*gU5');
define('NONCE_KEY',        '^%^vbABi3[8{P+d*o6(mLwkvp)!?J%T0*V._-(<-O*XZe${d*VQ^?mPUdp[Q|H~m');
define('AUTH_SALT',        'Jn@^r573FF:xK$|wR=gh~ynhEXqILDdqzMTK7D&%AHhNA1N438&sP+G19Ws[|j}9');
define('SECURE_AUTH_SALT', '@G3)K-]b1(tl[_:c6=uc8&SFG+wUm.: -G+WrB[|>9/|^6)P+i]k]5nw_-)Cx?3s');
define('LOGGED_IN_SALT',   'uA//y(9H|eo_+:5&8D8Te:2v)5-.AyIo(xJ4% thzR,kG-vB;7]}E-22~PS#?[+M');
define('NONCE_SALT',       'U#!S~uo4LnL+y9vJjF)(%*!19YZtRo|J(3KN7d@-%-;>D1;h9-(B_ZtbTI2G}7.*');

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
