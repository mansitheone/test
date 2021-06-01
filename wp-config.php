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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wptest' );

/** MySQL database username */
define( 'DB_USER', 'mansi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Mansi@123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'N.|Dh=ZZ |d_|imwL+?E3)35`.?V(r#/[vavG|.w~oX]8]w<ZaxqEB(7PiCx.mKi' );
define( 'SECURE_AUTH_KEY',  'p6#37w}hT8TD]Xy27e{9oExydgwFJ;~pn0pk<Dix[WLi_c>29~5kK_/[;Iul%!$(' );
define( 'LOGGED_IN_KEY',    '_s*BKC]5E ,IQRE=M#SaC6ojwCihdSaoA@Va !MA~0o_C/74cvx #^RG*;.PN89{' );
define( 'NONCE_KEY',        'Nn~|E@&UvgoT]$Ck@s?0_^07 i*~h.!~&s{I$v%EUkm$P[!U*) %Zs5>OZrSXY~7' );
define( 'AUTH_SALT',        '3~MNfNK$bq`luN3>!O/{5G) E=|Y/h 7JxOfq!nXx7$HAT|?Q4Lq^4dE`v@Ov-fA' );
define( 'SECURE_AUTH_SALT', 'v, rK}0op-E5{3lR8!U3M|c@]Gal|i]ZtA+sb;^FH{ }F7ehGR8Z?8y,EhF/&;On' );
define( 'LOGGED_IN_SALT',   ']V^~UUPAk&M$nMG_hdM|H,L}Uct(4voO3gbU)dJrb%v,AI*=PHx/By];9Xq~Wx5!' );
define( 'NONCE_SALT',       'D~53l_]bv%=ac4Omh.xnb6.:VMnr#i=fS4QY-B /?CLlnGE9>37kxxr,lOFs;Tl>' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
