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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'K7/d8#D@mJ.w]}XQ38$XK+SAgQ,xURzu8d0lVj7.u*4aa&LIAL%P>@k%U{&Ycshs' );
define( 'SECURE_AUTH_KEY',  'q55x7;j@e25*#FHcVWs*Q;WF<N_5+4=uw}*OX|-uDWM+!Nvw{ghBM$LE2@BFr3{W' );
define( 'LOGGED_IN_KEY',    'y=5m=sebeZ-PTNm|ibfIVoV;9P+-n#`uN@lqS<^>U]DtKY=Xh!ZRsrZ_h6;.{[$v' );
define( 'NONCE_KEY',        '9=z=/5?%,bIg)FJQ-.z}.!cwHPe?,?`|sU1FjZwWY_DttN<K7Wiu*&a7TNQc1H3&' );
define( 'AUTH_SALT',        '!DNC<1i9.eXGl1T(1gngsG2kQe,eSc/mRu|CUm@+b(sIetG6 &@&~qHTV~zoZfL0' );
define( 'SECURE_AUTH_SALT', 'Fe2^p9>|cU+71VzflSL-lxaG1dO{^UJ.My,}|p.d89z 5N,z<_ fT[AIVi`I|p!b' );
define( 'LOGGED_IN_SALT',   ':VjciosWl~;HI=0N~Z.n:-aa9;_fl8LsK?kqq0a,?A^8 Dt#ANU_q<b@`!@S6;> ' );
define( 'NONCE_SALT',       'pU]ucNF{&JX;{>b[ZyH+m>k!S9 DH!Iffa.pzK64yzZ-:}Ss3h.OR6i9qn?VuC4{' );

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
