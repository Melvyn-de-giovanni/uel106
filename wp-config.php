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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'RSM>(/7h[wBWIMv<(OQ]yj]`sFVVg!xCU{.7jHsix)Ee*I vAi5ww?We7voX3$Jm' );
define( 'SECURE_AUTH_KEY',   'B-N+]=(<ak@mZvl|f/fas+jV$K`]oPJATQO!9[Pa_C2SU%W@3WR#ke$9dE/c^8~4' );
define( 'LOGGED_IN_KEY',     'N,$J;>EWT,^k-?KvLAlsT)0;3fC7!>}RqM-bZJ6o=E8K&8A;s>#ym]]?ERKc>n<6' );
define( 'NONCE_KEY',         '7~0yZYOi]HuCduZ,V^);=f0qAo[XcQ~.m02;slmoKO_7fHc3{/QRL@cj!^j&Z9fU' );
define( 'AUTH_SALT',         '*/DMjYYm*Ak,2r{]qI4voc!D%o S<#ru0Y@J~gP40^.rekwP|P)88!fF6$Bevw^c' );
define( 'SECURE_AUTH_SALT',  '`xLAAmsX$Tl)`%W*D+7tJBaSlUT<eTGKs*aT*y7QTlt4jyiU4aV=9&>b-!fb6Tpg' );
define( 'LOGGED_IN_SALT',    '(7G(@cuzo+!T!Q7VxD~u y}>8=1ajd~3Q.9|HN6T6t%d]dV7!K.5g}Wx0^&CFvIZ' );
define( 'NONCE_SALT',        ')7ihKq;1kLXCi%Syfov#ZDw3Z{$#A`DwS8Tpx=JS@+{j1frF:Pf{EKD; >shw*3]' );
define( 'WP_CACHE_KEY_SALT', ':LVy>^@NPb<#Tuf<E8M&}IAp1xG?NAnxSBxohNNBlT-ceo t&2%;R7O D0Sf.{/9' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
