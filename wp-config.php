<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wp_jobscout' );

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
define( 'AUTH_KEY',         '|]NVbW7Kus3(B15viDEU| NNLH$]B4B62bon:97T&}cB:VXEP{:l0+suc*mvHNhr' );
define( 'SECURE_AUTH_KEY',  ',Zx2t;@5fPL`2j#o~WNO.x{wf=OVzd<Z0RQ2Ka#5)d@|0S{uj?8e1Il*8j5<*FS.' );
define( 'LOGGED_IN_KEY',    '!t#8e*gW42lB~a(F({]S7?bbcglFkXHJ9?,/cQ49.GVP!nIST)Cc^o7q`{51b_{|' );
define( 'NONCE_KEY',        'zRTW6V.kw#X]U0t*No/#.D1b]r>(;dAahO<j7mjR-p2CQYc85,^}sm9jg_*D-TAR' );
define( 'AUTH_SALT',        ':0*NMp8ZNYZW5S-)qaCj}ypt6Lt/<jz[nv C+RXj8AmU./u!d:IPcw|Ayxf+pID7' );
define( 'SECURE_AUTH_SALT', 'JY.4Xu%Y(K@s@%hD)4lESp<|qP{N2SLb(|5O34=k(&{g{ejI*a]Ffm9AL1rN^O5O' );
define( 'LOGGED_IN_SALT',   '|Kb~P+DL-i }W[ I>5laJ%X$SsU,.:z5=D*mPhp(2xxZR|sTa^hufyvH*y(%e%5d' );
define( 'NONCE_SALT',       ']c8;7>yo0Q0)E&<r7{8Xs!_w^yBjIhdOJ}Wk~KMOOS-;T)CG`nH=$)-fC}{q06$m' );

/**#@-*/

/**
 * WordPress database table prefix.
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
