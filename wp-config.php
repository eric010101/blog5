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
define('DB_NAME', 'esbcwp_blog5');

/** MySQL database username */
define('DB_USER', 'esbcwp_blog5_admin');

/** MySQL database password */
define('DB_PASSWORD', 'esbcwp_blog5_happy');

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
define('AUTH_KEY',         'dgMQvkSYP3rlaEbCSLYpoji33XyyFD6vf1VI4hCheFmsaV4CFrn99pKGwFx6Rw8S');
define('SECURE_AUTH_KEY',  '2VLPOYkQ5ywajTmbFj4JTWI5GozgJq2fqPTxAZ9VhFI5670YRo6v03gLadkE7kxO');
define('LOGGED_IN_KEY',    'fYiIrmdPclYgOyUgaNnOTOeM7vHStgbQmWxhOTlAZYskMNB5LiCCYbmzdV3oK8KF');
define('NONCE_KEY',        'Si2bpndeJzwgDckvjLlIQh2p2zgpTL0HrXkJYHpwg0ga8gYrvANjLX75y3XLd7nt');
define('AUTH_SALT',        'nTL9KjyOswpRvJ6y4hFHUTmzoBjmiU2jHYtYzI85J0v356ph2gzGHsZw2nOFpnPd');
define('SECURE_AUTH_SALT', 'YiZk5Z4akGwmex1qkL4ZyTcLaWXikqbAWnTgLi19XfdggcqdrjrNuapnK9FkXvAe');
define('LOGGED_IN_SALT',   'PvUDbOW5sXcPwhfqLUT4nYsbf8YZbbHxfGgWKThQAro2zkBr2vLceKacFc9M9cL8');
define('NONCE_SALT',       'QhhndokQPNTMNwUCXVYNree34TDcgoUdQo3OFtGZoBJOf7FpO3QWZbP3fwUjPoMG');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
