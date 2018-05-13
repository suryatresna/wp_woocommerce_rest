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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '172.17.0.1:3306' );

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
define( 'AUTH_KEY',         'BG?ZQ?.@l34ZEXd7BU( XB+dg}h->v]LmCv<a~O?|[-^t3Lu)b`9j$]dSPTL:GU=' );
define( 'SECURE_AUTH_KEY',  'D=JjEm+-?a/KV.C!-+!#CT5N1];W!t.*E$1r4F0H$_gElNe?SMk4P0aQ)42Sn5To' );
define( 'LOGGED_IN_KEY',    '^]E|T?2TIZPr0^*E0NawQE$WMQ+cp^tsvx[~-s,h!chLbC`:(x/s:Es!R`?B@,GC' );
define( 'NONCE_KEY',        'a0yHv|>l$hpoPiO2xo!Ma|wIyPEWLQfUYZ.d8$=C,yH0%KW9rx}~Qg=lv%q&I%?/' );
define( 'AUTH_SALT',        'nDiP:MzzXE55z}Q8uqWKc/yS8n>xa }ETdEb&r]S=.j/l:&%2xl{+@,ex9&%_zZ3' );
define( 'SECURE_AUTH_SALT', ')x`-[uD1ghK64E1MZ0M[ceWvL/x~7)?J|dsP&JcOZ6A!^)3+fQ!kAX97RVl3_0%b' );
define( 'LOGGED_IN_SALT',   'Q83UV4.?rQ&QOxEQ:7~6L)yq3yK.PN*pI@1UiX4ndHYPl:DBHnN =9**|K$[rXMV' );
define( 'NONCE_SALT',       'ERg2k$;Bda?Y6[%6?9Zq0llMR>vrZ:7iC|MG4Q,ZkI (^rivJI8vnJy0 k5%qQ7d' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', false);
define('COOKIE_DOMAIN','');



define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'www.mywordpress.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy blogging. */
    // If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
    // see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
    if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
    }

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
