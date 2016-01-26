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
define('DB_NAME', 'wpabril');

/** MySQL database username */
define('DB_USER', 'wpabril');

/** MySQL database password */
define('DB_PASSWORD', 'abril*');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ':UB{#$k5>VBd:yGAd=a|0||(%lz;[x+54a,1I+lL?$HHD(s^V1 UQ<zR:4<w-ER+');
define('SECURE_AUTH_KEY',  ').cBe9!M-a7p6ga{IHQv-s:2wg}wm@gl(9+*x!`3pY4>t9`kQ-,E`~cpodkgoT-N');
define('LOGGED_IN_KEY',    ';D uP-Xn[|rsin760j;|zoI3bT^J|)3+5s)Q-)OpeojMmWH%}+6V`d-qQ+.Tb9`O');
define('NONCE_KEY',        '/uFIXWz.}#~4U={0u`2KJX^f($b0WRsA){GK4aP+9B+w0e2dtS)OxTxtHQw7V0Z}');
define('AUTH_SALT',        'eF:Ed$$%#nU[?j#m59@o_7-9BpC5]Oc+QK8!%||$yVi]G;;/c@}BJN--H+dYVSE#');
define('SECURE_AUTH_SALT', 'XK,9>Gm_XO|Rm|+^0F5)Bi<|h_`8{C=xk/Fl*qM#QPRmNHB`P.V|h#T;qUWlv5 s');
define('LOGGED_IN_SALT',   'y(euln@%n19HRLu-^&|Fi.0lKHQRa%Kf&ZOL*Q5z?wC}`@LtjpC( 5Kcwlc49]Nt');
define('NONCE_SALT',       '~D.$MdkjE=H|B?Wc0CryaQ~fanZ|M/1brD.&D{wc+P1e?y-FL@Om]|y=N:.#9i!e');

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
