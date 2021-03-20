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
define('DB_NAME', 'jacobson_staging_dreamho');

/** MySQL database username */
define('DB_USER', 'jacobsonstagingd');

/** MySQL database password */
define('DB_PASSWORD', 'aZFspPJg');

/** MySQL hostname */
define('DB_HOST', 'mysql.jacobson-staging.dreamhosters.com');

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
define('AUTH_KEY',         'iODnmy_S5b8`s1O~Yb+1*i9tzty3g6QBB&d8;3lUXd?77iqI$leuSypmAY&x!(2j');
define('SECURE_AUTH_KEY',  'G26*ri)L|9U/G)qN_Ubjlc^pO;36E@3@L"KBU0Cw$#9kSm~O(9H2nX(5YCkkU59o');
define('LOGGED_IN_KEY',    'm:xZW(V@rCc|""k/ixm7hrLXvD88@:d:t7j0LMuGqGGa9w3*wjyZ7:#sO2@DzDjx');
define('NONCE_KEY',        'M?T__JrG2*okIs;#ty7Kl#*I^JSzsLghJK`_QG^:T%yo`Og^_G8p?`TY4M+Q+*^L');
define('AUTH_SALT',        'pg0a~IQAQJUsFn^0`Lz?74W*iQDhEMl&;W)T6dRnlf@?y$gwQbKp%0N4PW^SsPgM');
define('SECURE_AUTH_SALT', '7oISEiG@XtB6ZA&b|%NvcT~EzJA834AzvCdCLdkQAaUnr?pXb08AxQco8ose~w:l');
define('LOGGED_IN_SALT',   'Nkgl^^AdIPGt3v3yDiV@M)2_A7zOjYV$VXKpo38WIZK_`RsGPA78uoP9rLKVU7Mt');
define('NONCE_SALT',       'L#2:hS$:!$!N0_GP"BtHjIMdYqH!!02?"xSw:5iP@|FYpw|T:o5KC94Ih|(M!#jk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_williamjacobson_se_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

