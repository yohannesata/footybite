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
define( 'DB_NAME', 'footybite' );

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
define( 'AUTH_KEY',         '^&_9UXq8m}lo_buqp_AF?eVzd3E?,((6}0VlsbR/ U[KB`zOT7@XW@-2Hf_gj&nX' );
define( 'SECURE_AUTH_KEY',  'egb+i*BtktB}k@RGE3qTGoTO>._Y+Cm^ 9Y29T-s_aO9F&2Z9N2a1R|`58SUS,*k' );
define( 'LOGGED_IN_KEY',    '~.J|[1VB#BjPB}u;o}vevQnb| 2mdF<C,q@9,%p{C!FmgN$R5qm&?3Gp3WM*sc(.' );
define( 'NONCE_KEY',        '?~{Ivnuj>fE%>~YkLnFLK_XF6o[7wIe}V(t[`wDj!&-(MU6^ye(TtCc*iCE5L@=B' );
define( 'AUTH_SALT',        '6$JG}TlYg]l_cgQmig$=8U_r*>3Hf7]R/Xo2#-CJkt0c+BxqZF#x6A#;D>2fxLGO' );
define( 'SECURE_AUTH_SALT', 'jR4Gl5#RZz)Re??Vmd[i-+yGO;4D~[F`||Emr%Uh4eGAg+*TRMPChWARpM!21j%`' );
define( 'LOGGED_IN_SALT',   '{+t:FG>u#Ce3X.DEGC1PyD@Qeo(5<=gk!Tvj?8VFRv2a^EeYOxc@Z>Y1[cqa:n>(' );
define( 'NONCE_SALT',       'Om[q3$kk6EXBZ[2Q-1z5zC0[9O*{dR#bq6JSyKV]WQ/2b%vI$-#|N.?OL3H4eO>%' );

	define( 'WP_HOME', 'http://127.0.0.1/footybite' );
	define( 'WP_SITEURL', 'http://127.0.0.1/footybite' );
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
