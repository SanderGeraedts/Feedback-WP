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
require __DIR__ . '/wp-content/vendor/autoload.php';


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'feedback' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_CONTENT_DIR', __DIR__ . '/wp-content' );

define( 'WP_HOME', 'http://feedback.test' );

define( 'WP_SITEURL', 'http://feedback.test' );


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'q>V=tg+ }pAP!|{DjvV;$r4J_;+ |[]PC>>(=NoDh29Z=04~{1ot?D(walZck,l-');
define('SECURE_AUTH_KEY',  'C3px#QI4`(3vj vv?)k+lNhFg~s-6Qt9+(@;OSqJu8c2%.U7N]-3Sfx`@XD~ ?wu');
define('LOGGED_IN_KEY',    'Au(xdXj-dWJsE<5Kja6J{/6Y%Mv|[]{#CJE#n>`5<YthZ|AKQw]f`-2efjHf^{V|');
define('NONCE_KEY',        'eSp%gP~EYh)#i#6,q@=6<6%U.>f0-%nBEZ+V{9BU$^*<-8BgI,k[s&_m8/2Vp6+U');
define('AUTH_SALT',        'Rqqg *R_05_zkIN(R1iXMuqVTa6Ha&@_Z?+R(F`^x%6 Q}On_dxW=9L4tnbVaw:9');
define('SECURE_AUTH_SALT', 'Iy{q]F+)zsdlr?(_Ew##jnPVn;{,9R9vm5**|1K?){Jhajp&?9{+G.l&+fa+Gei>');
define('LOGGED_IN_SALT',   'a(lo}_-CD_?EUdPy|r#Dsc-es[]5-O6}}uHCTSMQxNregoB?P<pH4@x$dS%sA0@A');
define('NONCE_SALT',       'gFwtp2[B`7-APoog./&9q=%zKSQRtRzc/Y_y9AElC23NH0QF [lizB]:aZcKcI_=');

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
