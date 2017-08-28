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
define('DB_NAME', 'ammiiorg_mba1');

/** MySQL database username */
define('DB_USER', 'ammiiorg_mba1');

/** MySQL database password */
define('DB_PASSWORD', 'ammiiorgmba1');

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
define('AUTH_KEY',         '49YYd5BrJVvS6n~UL8wP!I3mGM~>;;T>0%Gh!GI9 @VD[qS-{Tlg3fl@svj}Z$Bu');
define('SECURE_AUTH_KEY',  ':uX$M_E7U)Y|O|cLQaG8Y~Pna@^p)+{Ybbp<fY5M[w/eaQiWXLrhbnLLKs&:zihM');
define('LOGGED_IN_KEY',    '=ir^psj^h#VusB-j)6JQaly$wi9!Uw>,gJ$^}AHLHv=7TVi`_i8T{M5}j~E9(>)r');
define('NONCE_KEY',        'S%VA,.M2Vqa}RdJ,h]|n/b6-oH4{knTNfN`W:%TDLW7+A<#dAbCC5A,d4c861TtB');
define('AUTH_SALT',        '[v`QAcAE/u_!g{~bPdZjK5Ak@MYx?:gjsIZvnYebHgfX{JHd]~EK]gWv~H/cuIcP');
define('SECURE_AUTH_SALT', '/_^<O]9?jkEq6W$FC?%12,8QJJ5]pv6_/;#bo6P-l J.2eomh gMO2Jm#x}I=S/v');
define('LOGGED_IN_SALT',   '%[|WP7JL9Q{>H|~$.58~Ow%O`2nm13I=_%xN7tA[Gb(.LCOcP(nVY5Y_ID+Qz/s2');
define('NONCE_SALT',       'KK?21b50HE>iAa6)Lpy&KQ1S]^[]|pUTEPm0014H5D}l v$W_u9!|nm-R%i9q98D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dj_';

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
