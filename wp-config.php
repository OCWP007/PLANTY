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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'P61' );

/** Database username */
define( 'DB_USER', 'P61' );

/** Database password */
define( 'DB_PASSWORD', 'Passwd2024&' );

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
define( 'AUTH_KEY',         '`jx+NMM?Yy>Q7Jk[=dRXX%]<!P8{EN3+0@ngD+SW >]v|meuO/|%s..ngXtQA?i@' );
define( 'SECURE_AUTH_KEY',  'O)S.#N58yjYIfjfBWY;m;Lnhd.PW!]@^&]skC~7yFC*F:Q9${BSWA{_$[^}7rTvE' );
define( 'LOGGED_IN_KEY',    'f yM#r}#5r`zPmFK:9#I!W2apg~2(+:6B]mwe<MvYS1*FR4QsOdI5pbq]&M0+J1e' );
define( 'NONCE_KEY',        '8iCMvxt^r9|B;<Lhl|YpKGhca$gXo(wt5vOIJ3EE@_uZ2#r56r}T@WAB(t)-7^>S' );
define( 'AUTH_SALT',        'b{T?n,s&Kf5TPM!<49|N(*wfyVKKnC8cSg}jlXK_{2dm1O3( ~|/5zL{^)b^a$&|' );
define( 'SECURE_AUTH_SALT', 'mxu8S!f:G.8`y3acb{~SG!m{;px%}25t5GJ(lSwKKZ;e*]WS9^yR6 k|J`Ouw@2o' );
define( 'LOGGED_IN_SALT',   'N#,2&P:%v[I;T+nz.C[*6r,|DK2cOc=@L;b&+O``5&b4DyN94tp+U4_~Q57Jw9WD' );
define( 'NONCE_SALT',       'ktzZ}224*3K8`|LpdmP)ld:aq|_JNw>b6vEnZW!t,Qo!Bt?WW?7o+W7nx)wF1`h<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp61_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
