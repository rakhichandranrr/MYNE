<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myne' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':tZSz9jhw++/a(7%QQK-J0_mJ/=fn YtoV9f,dEeD,{kGTyZH-kNjR/Kz]sp-(xn' );
define( 'SECURE_AUTH_KEY',  'woc-mgc~.>CzkfUmr?Z:!xsjD]IaG%N^St9@MUW74.JsH,I~,+!g?}`2Pp1X[|EZ' );
define( 'LOGGED_IN_KEY',    'yaB2p<gCmsz`DByUrY)-k4F;9nOaqekA3ko-w*0EQjW4!/##-Lfic7j[>SOv%Tvz' );
define( 'NONCE_KEY',        '#efcq 9YH:M_o!D0-/C^!&*~.N&V0EnYf!s+a2)hg(3pi>NlQg`)56Y>P-*MUg1I' );
define( 'AUTH_SALT',        '%Tzmf?e%trSvL c=XdJ:s}:Z86/rV4&!&G>GZ/:dRkHUodK2cx7$NcqQ D&qsC#Y' );
define( 'SECURE_AUTH_SALT', 'bsok>d_%/[ +0mKcd179BqFsbTV`+D)2U@k4D/v@8dBnk${:ISs.b4n#Ze2Ag9VY' );
define( 'LOGGED_IN_SALT',   ';!5+%ZdpDJMUWBTJDcX):%rvbI~=@m6lw`1(_xnzbLN}i+k%6{(`RsfUy_F7lb*%' );
define( 'NONCE_SALT',       'i}[Toa@nZ($UO|ySxz0k!uAR!>A}cjz<lYqT8vB~2^E}8YwAn3X74,dpH }x4aO5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'myne_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
