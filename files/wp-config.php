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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         'i9=@WwgGmqPLIZY9)x$nBGHE_cII|(Ak,d4YU.t@bK:0E,gDv#RFl^5r`-n)UK#G' );
define( 'SECURE_AUTH_KEY',  '(7Ln3rKRQMlKWNJ8]z?_guR2V&`o<Bw,0M8~(]AsGhcdM6SQQTI7E64|B@kB1z-M' );
define( 'LOGGED_IN_KEY',    '%z*pqf(#.[S:n/-h#A-N)Er3LSR>}>gH1WuqJeo<b!H-d9y~z5a[&SVVY=EV`[7l' );
define( 'NONCE_KEY',        'FXQo2oe^JH}aXn=sUd!9KE:mkZOqm(9xkYXX9P|/QpLe%WdhpZ~>^1Ohr>$[?7!J' );
define( 'AUTH_SALT',        'PkhW/x>a)oj1GF%hlA[~Fqkf|z)(D)^9qeguqmc/j>!HK>}A@@JUcrU?b8UNDk2:' );
define( 'SECURE_AUTH_SALT', 'P@7k5Z{f^_sMaW)=+j+@5:! 4R;G5=,:O<xw.kPHb6q:N&8B!L:E5g[WQ2kg%I4=' );
define( 'LOGGED_IN_SALT',   ']GRtx31z&O&@}9730PM5(D[Kxxvz7;O/3=U$889dVGXM_E{jn``Nz-oEC/-Y$2^B' );
define( 'NONCE_SALT',       'dK<FH0a[%9q9o?bzbyIgt/{fs@b`(Ss[6)}Ta&?_EEn,)JcWoS!HJx%LE3h(!,-Y' );

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
