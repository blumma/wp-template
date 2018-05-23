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



/** Load environment specific config file. */
if ( file_exists( dirname( __FILE__ ) . '/../wp-config-production.php' ) ) {
    define( 'WP_LOCAL_DEV', false );
    include( dirname( __FILE__ ) . '/../wp-config-production.php' );
}
else if ( file_exists( dirname( __FILE__ ) . '/../wp-config-staging.php' ) ) {
    define( 'WP_LOCAL_DEV', false );
    include( dirname( __FILE__ ) . '/../wp-config-staging.php' );
}
else {
    define( 'WP_LOCAL_DEV', true );
    include( dirname( __FILE__ ) . '/../wp-config-development.php' );
}


/** Set Custom Content Directory. */
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );


/** Set Home and Siteurl. */
define('WP_HOME','http://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL','http://' . $_SERVER['HTTP_HOST'] . '/wp');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/** Turn off DEBUG options by default */
if (!defined('WP_DEBUG')) {
  define('WP_DEBUG', false);
}

if (!defined('WP_DEBUG_DISPLAY')) {
  define('WP_DEBUG_DISPLAY', false);
}

if (!defined('AUTOMATIC_UPDATER_DISABLED')) {
  define('AUTOMATIC_UPDATER_DISABLED', false);
}


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
