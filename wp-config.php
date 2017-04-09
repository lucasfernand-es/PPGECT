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
define('DB_NAME', 'ppgct');

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
define('AUTH_KEY',         'iD8IKG@USca4c+@Y_A(S%yfwKp=p0mUWJk0,ht`Q}E{^?y(rq`1zzwcLnG6oeJ)P');
define('SECURE_AUTH_KEY',  '+(:Qm}Eq%A8^j Pgt[K0|4c[`=6Y|j#.8 *NOHCmtV5P*p`m*TROigY Ey>EJum{');
define('LOGGED_IN_KEY',    'J`j+,k<<Q9&q2bo,8]Y,YrUv2B<(!m9/&RlrU){mS!RF0kYFN9|~m_;(q[sm|}u*');
define('NONCE_KEY',        '_&y[#]i8nMFpQI7[(Y!Zz{GA/Yd(W ~TuRAW5l0BflhoGCC<jS1S^&4/oZ^1.S:,');
define('AUTH_SALT',        '^a(K4d-n&ANu{;gH~jg3MT)N1gZXdX*!sX^uC+@M^75lc+SC1p4YA?7PgkiClwhj');
define('SECURE_AUTH_SALT', 'MMkNY1;q}toS]R!5Lu#sq8fwE)g.}LTP9/p0&{w58nim]nuoG+ylCT{1T8{8h15g');
define('LOGGED_IN_SALT',   't 95h70hBP.6&FZoWW}X[7>yl0=<(Z)_d}:Hz31]58w-`mJw@{B|MNjNs+%qh#iD');
define('NONCE_SALT',       'hfH(u0@(DQj_|@4+# 7{q.{SA3+mm9wLB8n(Y0[1y<bRP7RxKk6QEx`Y696YM4tt');

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
