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
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', '' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define('AUTH_KEY',         'Pb8XWY4nZGRbjTf5q6TXoOPfNDxj5bkPeLZLxi/b/ua9T2YWAqY84CrKZzlaZ1ofPa7CqR3CXgucj2hx1zt4Tg==');
define('SECURE_AUTH_KEY',  '22f8wU+vh2uG4q12YoJ4/UycV0ccuzcw3UkV8WdaTt2K/FEHAKOa5TmXBSQv5ZW/u6s1J29UtkxCuEpnubjrjQ==');
define('LOGGED_IN_KEY',    'hVCAvT05qxBeP/M6RJvmkw7dbTmOf+cWVJ3Q1xVLGARqo+gSSq8CUxqD7TDbz/caGhlimCxfc0irQ8emaU3nRw==');
define('NONCE_KEY',        'A1hCuvyCBHf11J1JMoTWywOYHPgQcGHa9rT0qTmFKTbKgvR3nhdUWIBVoV0bSMTONK2SZszsmd8BJB7NXXut+Q==');
define('AUTH_SALT',        'hzPEFSC5W6b52tvvjpphj7gQfGk+arcSwdmXsIpCMG+rVAO4dsJfrqOiDJfW6+Os/Ywv9hNcwx861L6PYDf02g==');
define('SECURE_AUTH_SALT', 'TadPyFQYDAUQjkY107Y9Am4BB607rti91qkDaR5vcJ2Z2Le2qOfZF7Xm+kdSp6n/eUHpIn3Acn+XZUsE9/8upQ==');
define('LOGGED_IN_SALT',   '5SiQ/qk2nbOHJUo/O0xN/uWqF78YLJm39AFlNdZHXhnPh67KxR7n/9dwCx6AA4IHcP2kwdou0JPdeJ7lwv7yMg==');
define('NONCE_SALT',       'wPe9BI8WtjqkgM71eldDJOTecN4A4UIdVu6dhvPqO8mYHHOaCv4JKPpT0baQmCe5KVuHpQdpxlH54x+tQJfgnw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
