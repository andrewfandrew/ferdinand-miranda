<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define('DB_NAME', 'andrewfa_a2wp625');

/** MySQL database username */
define('DB_USER', 'andrewfa_a2wp625');

/** MySQL database password */
define('DB_PASSWORD', 'v98z.4]4PS');

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
define('AUTH_KEY',         '7qzcryynofv7ue3mktiyugyiiibmee3axfpvymsty6xqfispmgte1ihpjoqqp6f3');
define('SECURE_AUTH_KEY',  '5dzur2pbepa8crkdwd1l2kpylfpdyzom8um2y0npmkbvntghyweyj3o09bv6mdcv');
define('LOGGED_IN_KEY',    'aapxnsg49u6cjoyzxddchidehbjdmdxpqhxnk9n1ngdubsdfw2ohns7xb44tzd9r');
define('NONCE_KEY',        'mkcooaxtw8zypzyul6d1uipzj7lq4kamzewdecyhwphtp9p6yrfcfctawzrte42r');
define('AUTH_SALT',        'lzephirxgtgsfdbsupddzeaniolewunidrq5fjja6tywkcrsxooq3bjxbmmej2wy');
define('SECURE_AUTH_SALT', 'jcpfls5iocrtgol8r57v34tdcyoniekxycqshhfckpbsmnchcqvdc1glxxemdb3d');
define('LOGGED_IN_SALT',   '1ifbvig6wrefxs2ju0beszgpgvsezhm3lkythahlvzyemy5rkc2rs3k1oonows3o');
define('NONCE_SALT',       'akwu06jnk9yz6izqkfiy3zrenqjqwuokjrsy1frwbicn3rkosvicxqaztozh8i90');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'r2q_';

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
