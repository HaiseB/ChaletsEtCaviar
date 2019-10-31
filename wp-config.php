<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/benjaminnh/www/Chalets_et_caviar/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'benjaminnhovh');

/** MySQL database username */
define('DB_USER', 'benjaminnhovh');

/** MySQL database password */
define('DB_PASSWORD', 'Dofus0404');

/** MySQL hostname */
define('DB_HOST', 'benjaminnhovh.mysql.db:3306');

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
define('AUTH_KEY',         'WfDQQQ1QRJIsBumf3Wm9VZIaBrN+wtnTl9u6RTWAoKtC1BQenZxNnkIh2IsV');
define('SECURE_AUTH_KEY',  'zRiwkv6rfrMiY0sy5+m1PJ9Z30/2hjyYCJxM40FHClOfTHRxPWvGf0TaQwxh');
define('LOGGED_IN_KEY',    'ruvy86vV1J2NypKeBovV0tnV8LG3Lhv5eL+LKrVBB4JZqnXXpSOLMAgXF1Kn');
define('NONCE_KEY',        '97IfTHVsAb0MXpXPn6ZoNT51k6QhHxFX6IZMMQEGhYHuLQIFiUmXvdC1m09a');
define('AUTH_SALT',        '7tSE8HolfRDXU4vWJtuNUD1gaTFitufYJooL370poWGA6YSziaFiv+7WOxmw');
define('SECURE_AUTH_SALT', 'Lg1s58SRJR/Kxm+LjT8/hKHp+MHuK6jdcxYvpb7xtGj3Ossm7KaDUCu7qqDm');
define('LOGGED_IN_SALT',   'iWSFik2hZddKN8pjE5i3WQ1cTbldOGvZT+6bTTNj4fLBNY7GBl4NPcg8c3o1');
define('NONCE_SALT',       'chFMsAdW1mkFItTOlxqJJrXskQIqGrG3lqZsl3eec7BHajF7l7x0XKv34Cdd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wor2866_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
