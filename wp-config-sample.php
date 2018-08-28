<?php

/*
 * Options
 */
define('WP_SITEURL', 'http://localhost:8080');
define('WP_HOME', 'http://localhost:8080');
define('WP_DEBUG', true);

/*
 * Database
 */
define('DB_HOST', '127.0.0.1');
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASSWORD', '');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = 'wp_';

/*
 * Salt & Key
 */
define('AUTH_KEY', 'put your unique phrase here');
define('SECURE_AUTH_KEY', 'put your unique phrase here');
define('LOGGED_IN_KEY', 'put your unique phrase here');
define('NONCE_KEY', 'put your unique phrase here');
define('AUTH_SALT', 'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT', 'put your unique phrase here');
define('NONCE_SALT', 'put your unique phrase here');

/* Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__);
}

/* Sets up WordPress vars and included files. */
require_once ABSPATH.'wp-settings.php';
