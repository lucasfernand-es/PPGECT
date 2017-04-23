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
define('DB_NAME', 'ppgect');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '9b$`2 )1?/)%Mi]L`3?}oZ!IuGy$yyWFaSF&b xvB9;tGtzfYowNTa0;$a_EpM4z');
define('SECURE_AUTH_KEY',  'j..hac)p(Tv7?|[5qV}}5g!7q2iow)Y:1`Z2ynA Pf|T?/`*~jvx}Wud|6bCq4~J');
define('LOGGED_IN_KEY',    '<A|aJC$iZ_0*n[UR!$xx!aW2R(yv#V7#x*!w9@Z7v0k mLRfLp#)7p.wTO(2OOKO');
define('NONCE_KEY',        ' |,uns~,x?N_n&CW<-MHy6s~|4k1us8%nfSL *DZ;b|r<$K2[BQWs`}{|~RQs 0d');
define('AUTH_SALT',        '(,]d^QDh $DUYX^LOXmQuUmfv>H#Yiq|aS)zrY65K.4^(>SXU9wc?vqq+}:MP!hA');
define('SECURE_AUTH_SALT', 'v`r5y52;$KE|4S@Uk| u?Q/!+M+8uzt:C04)9WkOC[fPbnv9Cf+E;n3_p|6C~(a+');
define('LOGGED_IN_SALT',   'X+-F+Mhu)$m2Vz][C;#Mt(oc*EP&!}Os/3GmPi1)ZtQ`ER;2%WObW0ZwTCE<iVYp');
define('NONCE_SALT',       '<v15p1rd#ORZ|t}A8Yi%5nt]=7NBdl4c?_d&QQh^7$*:3BWb N_l]od56~4m}h(o');

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
