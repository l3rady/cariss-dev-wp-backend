<?php
$root_dir = dirname(__DIR__);
$web_root_dir = $root_dir . '/web';

require_once $root_dir . '/vendor/autoload.php';

load_env($root_dir);

define('WP_SITEURL', env('WP_SITEURL'));
define('WP_HOME', env('WP_HOME'));

$table_prefix = env('DB_TABLE_PREFIX', 'wp_');
define('DB_HOST', env('DB_HOST'));
define('DB_NAME', env('DB_NAME'));
define('DB_USER', env('DB_USER'));
define('DB_PASSWORD', env('DB_PASSWORD'));
define('DB_CHARSET', env('DB_CHARSET', 'utf8'));
define('DB_COLLATE', env('DB_COLLATE', 'utf8_general_ci'));


define('CAN_UPDATE', env('CAN_UPDATE', false));
define('DISALLOW_FILE_EDIT', env('DISALLOW_FILE_EDIT', true));
define('AUTOMATIC_UPDATER_DISABLED', env('AUTOMATIC_UPDATER_DISABLED', true));
define('FS_METHOD', 'direct');

define('CONTENT_DIR', '/app');
define('WP_CONTENT_DIR', $web_root_dir . CONTENT_DIR);
define('WP_CONTENT_URL', WP_HOME . CONTENT_DIR);
define('COOKIE_DOMAIN', env('COOKIE_DOMAIN', '.' . preg_replace('/^www\./', '', parse_url(WP_HOME, PHP_URL_HOST))));

define('WP_DEBUG', env('WP_DEBUG', false));

define('AUTH_KEY', env('AUTH_KEY'));
define('SECURE_AUTH_KEY', env('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY', env('LOGGED_IN_KEY'));
define('NONCE_KEY', env('NONCE_KEY'));
define('AUTH_SALT', env('AUTH_SALT'));
define('SECURE_AUTH_SALT', env('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT', env('LOGGED_IN_SALT'));
define('NONCE_SALT', env('NONCE_SALT'));

define('WP_DEFAULT_THEME', env('WP_DEFAULT_THEME', 'twentytwentythree'));
define('WPLANG', env('WPLANG', 'en_GB'));

define('DISABLE_WP_CRON', env('DISABLE_WP_CRON', false));

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/wp/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
