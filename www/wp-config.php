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
define('DB_NAME', 'florianssf968');

/** MySQL database username */
define('DB_USER', 'florianssf968');

/** MySQL database password */
define('DB_PASSWORD', '$$$$$$');

/** MySQL hostname */
define('DB_HOST', 'mysql724.sql001:3306');

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
define('AUTH_KEY',         'K3VWjuHoEWpMMQq5ceQnMqJliGk+PdVcTD2QkNq4fxv16lTH2vnTFwY/Gs7d');
define('SECURE_AUTH_KEY',  'mzzDq9w0J9Mk3fxllB+arNtIEgyo5v2dYtVeIjcakrCIclWZPuOTtF+BgNRw');
define('LOGGED_IN_KEY',    'mXoe/cP32e3TP/iDiOOvvpiJ+osTDaiGNPjl9Rc1bQc2PcK5ramzQ6hNpMcd');
define('NONCE_KEY',        'I6QGrmFsx/501uAjyW9hCVM6eaINS4+srOtF+7DeuhP6GYuPnpdAnei7Il9N');
define('AUTH_SALT',        'eHfu9PPByeEjR1/iZbN9zTJF4pVb6Vk89b0xxZesajsvBr7to9uFAvLdzhYg');
define('SECURE_AUTH_SALT', 'NWsn/nojFnkwm8gZETILQvm1QerVBE5hHvaIc0S2SquH0HJN0oK5toXFVeMM');
define('LOGGED_IN_SALT',   '7/3U2B77GUcYmJ6XYL84/heobLQx6LdR1ZUaPjuwesMsP5cHZ5FI3OgSz6BF');
define('NONCE_SALT',       'D9qZphjQU8nPq4iKfQO2yxChrf+Elq6aFr/BU/oAXdOW029Wg4NLAo6+aLoV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod562_';

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
