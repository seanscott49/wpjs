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
define('DB_NAME', 'wp_js_course');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '}uf@d:kV-;EFOkB#ko)x92dTyKbNtSJm&J1}*VUTPI-p(5}FklsJxG(92GB6O?pp');
define('SECURE_AUTH_KEY',  'jaQ8Lw?_8C>t7_]8S |FRL5COb^_e#o,ao(GSf,Rx|vgw%;@S~${3>hg*ST|WcWL');
define('LOGGED_IN_KEY',    'b_l`M.P!VV0#7?XP2z[-[*OnJ!eZ-aBuS1@L!g$.l^M,Q9PTg-|--RC1pb|H-a?;');
define('NONCE_KEY',        '&VD)+`wAlGg)sUK|tyc,AO$[Ku*m Qo3|ct9rh;`{E.<md!x+}Cd[E9N,+&]pcwy');
define('AUTH_SALT',        '<)+gG3{wIk(p:%<~Y7N6X/]owI`bY@!PTvV1n0?$=#VE8Z]aMCopexk=1UsPgjap');
define('SECURE_AUTH_SALT', '-6S$SfL.X);o|/2,+TLi!BH]>$s 1P@INXR[G7/HikyExMH}Vt]LXi%2<fKq%9Vm');
define('LOGGED_IN_SALT',   'JwV_=n<hr}mG&,3auJf J0g17;%c8WrUw~s)ET~^+T;36kA H#q/W|ix`|z!5P[@');
define('NONCE_SALT',       'zNLm5M]T:squS)mJHPOlsG[T|C$V#%y#!eja6Pz)f(6(iubs*p#-okt@~i-H96lk');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://localhost/wpjs/wp-content' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
