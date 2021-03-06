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

/** The name of the database for WordPress */
define('DB_NAME', 'dev_wordpress');

/** MySQL database username */
define('DB_USER', 'dev_user');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'mariadb:3306');

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
define('AUTH_KEY',         'euCTHAuVciKGzDbWrbHaSBYdgM4Kb70v');
define('SECURE_AUTH_KEY',  '4y8KjQhRAHDr9wSeoLdvrGTPYTan1dGG');
define('LOGGED_IN_KEY',    'ERZ1cBVKaIJy0zJmccImDeJaZWZaBYis');
define('NONCE_KEY',        'PEpcrxfvgbQZfy5ALMD2dtpINrQZQi1M');
define('AUTH_SALT',        'TDnNywwzFXpJRni3xvh4uBKy2KGkDVEW');
define('SECURE_AUTH_SALT', 'LyiFFXWB1PLrkbAJdr9Do39Y4dBTlzP9');
define('LOGGED_IN_SALT',   '1Glvg86d1UiFO3pMMqPl7gZNBOzs072n');
define('NONCE_SALT',       'taWG0SR4tc8UD2XDjEIy0PJjFJukGHpv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define('WP_DEBUG', true);

define('WP_PLUGIN_DIR', '/bitnami/wordpress' . '/wp-content/plugins');
/* That's all, stop editing! Happy blogging. */


define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/');
/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )
	define('ABSPATH', '/opt/bitnami/wordpress' . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct');

define('WP_TEMP_DIR', '/opt/bitnami/wordpress/tmp/');
