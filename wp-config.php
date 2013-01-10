<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'heartdiseaseinwomen');

/** MySQL database username */
define('DB_USER', 'heartdisease');

/** MySQL database password */
define('DB_PASSWORD', 'ukArzxiKxd');

/** MySQL hostname */
define('DB_HOST', 'heartdiseaseinwomen.cpzn5ekwjr2u.us-east-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'WQ!KoeX/JKI^<&kp5{:S],DUlKz_EdJf_F~MIwey_aC!CxIlHsu|Nm~!] QUB:N`');
define('SECURE_AUTH_KEY',  'JS~,cw@eX@!C1I&45s3#t-jI_c+$]YN#_vA/f-TY>4~! ]Y%%`dW8,c)VP6+-lxc');
define('LOGGED_IN_KEY',    'VQ>;4Vv`M~w^bu26:OE-B]_J4AEAZ6u*JP2rp55uvz5W{xm2:x[hI$= =L%1%| +');
define('NONCE_KEY',        'VoWc0rObNTH7^5o?u8>!WSxXAFZ_>1Y#^jG|(N-[p#fCXZMo1`)FE-qU!zNmIy|w');
define('AUTH_SALT',        'F#WOQwLdi1S!**hrE?LJypsHp<#TY2Ct4wjL&}0QY|HJF={is{H( S6V5B7zfWsI');
define('SECURE_AUTH_SALT', 'yBWo1!Ax-or-<_8@:j**4Uf[|N|+bb(Z,Yd-Yz<|7XJ?zd$y_XHSZt--)|L,g{OQ');
define('LOGGED_IN_SALT',   'fE%Y!A @<S*W(9@4%~q%QVugC[AI~/x=ZJF$jZ(=T[*v}OH{k<+WL`bJWDi}IS`s');
define('NONCE_SALT',       'mjx~p4XmB.@QeZ09~;<-n&,E-de5R}kEqm2$pvXkO0wh,|0]=vi]|+gOR7IvI)Ui');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
