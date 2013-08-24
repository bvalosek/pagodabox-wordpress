<?php

// ---------------------------------------------------------------------------------
// enviroment settings

// Ensure that if we're on pagoda, we use our auto-populated info
if (isset($_SERVER['PLATFORM']) && $_SERVER['PLATFORM'] == 'PAGODABOX') {
    define('DB_NAME', $_SERVER['DB1_NAME']);
    define('DB_USER', $_SERVER['DB1_USER']);
    define('DB_PASSWORD', $_SERVER['DB1_PASS']);
    define ('DB_HOST', $_SERVER['DB1_HOST'] . ':' . $_SERVER['DB1_PORT']);

// otherwise, local testing stuff
} else {
    define('DB_NAME', 'database_name_here');
    define('DB_USER', 'username_here');
    define('DB_PASSWORD', 'password_here');
    define('DB_HOST', 'localhost');
}

// Common settings
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// error output
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', true);

// ---------------------------------------------------------------------------------
// general setup, not environment dependent

// lock that shit down
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);

// Change content to root directry, hashtag hacks
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT']);
define('WP_CONTENT_URL', '');

define('WP_DEFAULT_THEME', 'twentytwelve');

// salt -- https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

// in-db prefix
$table_prefix  = 'wp_';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

