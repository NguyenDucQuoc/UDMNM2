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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ducquoc2' );

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
define( 'AUTH_KEY',         '9*I>*)AZwhg9i?x(i=S!Doj0Kbf9pC$hBm }sdN2aMi^T>hywSAfHa}^e7K-j<%@' );
define( 'SECURE_AUTH_KEY',  'U~T5t[2<Slzn MmeP}QW0vDGJO:K!nyLYYnEkTq@5tAgLj<_/L8u_U7.tsEqxt;P' );
define( 'LOGGED_IN_KEY',    '|kU0o|]<<F^v<hU`Dp:.yb7~xsa0<xJ3(O+tFt<$KR:>-XhioX_E9Ja//I9B<fzQ' );
define( 'NONCE_KEY',        '(?YrQ^90_pPCE*:>F =QguQ*.T@M: [ZaKrZFdor*LF+848A7y)5CH#sU)R<C|}m' );
define( 'AUTH_SALT',        'uB%exmJ1*&4{ b@pM6?M3#XR!D1J5BFJm7@NR/n#XFrI k93rKQlElSfd6OfuwV:' );
define( 'SECURE_AUTH_SALT', 'f}jE3<@[3lv#0qA1@,={j9}oo8ER+@, `C*Qq1>UTiU{j-@d1Ke{kYp70XC>kb<h' );
define( 'LOGGED_IN_SALT',   'OK65*bMZwA#apEH,dz?X>;^(akN+$Gc[I#]@_b@tH]s$:l*/BhUiYJ3l#BeGM07B' );
define( 'NONCE_SALT',       '7V{jJ4D0-U1$x 4C !Jc+G/@2ffDGRn!4INH5TqK:hyHGg+qy!P2;Yh(p0c!g:r2' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
