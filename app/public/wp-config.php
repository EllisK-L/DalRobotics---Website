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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'btMEiw/LKyU2jfNYsSvVOIRv+M1D7MQw7Q11xN74AFJm76bWm4bS4To/SmkdKI05KAHudnoQhc7QzxuChJgZHg==');
define('SECURE_AUTH_KEY',  'Pi98oy5n+5LEUjyumdf//kdPPeV0/GN/LL7YsEZn8tfRtU88K4B/M1c7MtGW2yHghyOx9yQ8RqMw3+UZjDe85Q==');
define('LOGGED_IN_KEY',    'JVrdjC/WvBMU0IeqsOjDbv7yVLMLdzyatl9ID7o8zdK0m8TnUkHsalDkJs2ZxgKHitui8gR1Y77Z5p+iF5p31g==');
define('NONCE_KEY',        'YvcCaJHa1MVp3gvAqJwjqytUV3wPUJxmJQHFxNJPLrfUxLEpzhnM0+DhdqcpWbt6HZknh2fXymjK0tnDl3pRTQ==');
define('AUTH_SALT',        '8C3N28wqmaQWw3hm2rkFlnz6T3pm4K0K4fTau6KxMRVlpHcEkea/OcABzPVx2t7J6aC9aRLFZgtSNmKSx0hHEg==');
define('SECURE_AUTH_SALT', 'lvUGUHX6MrcBwkT0JqAkS8e1RldSRVX9Nh+yNTUCgQxaFhBVvjf/yxSVT4Rq1ZGx8Yr4IZRW5wm11zYtFPTYNA==');
define('LOGGED_IN_SALT',   'E06kZAjVD90elHyi0eqk6pWetbm75ynHAc8HJqQvcN7cdz4OHrlTkyddMnhwmXjFvrfX4D0RLJreLWaY5rm+mA==');
define('NONCE_SALT',       'P6wwj4tB+YOaNSDAmHqEY0y1gLK/5JRpZbXe26LgcT7meQ2GSX47bCYkLPQxChFv4mKfjTlcPLlNtiHVc6ecPA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
