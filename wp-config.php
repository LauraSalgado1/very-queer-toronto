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
define( 'AUTH_KEY',          'uSyK4r)qMI=t>[b:nZk){k^qHo._LM&&*PJm`F*_2`y]Z?jdi7IPyPJa9z=?zw6{' );
define( 'SECURE_AUTH_KEY',   '0JtO:fy@{6AHizA14S0=Bc#r>GizA*1@aRJ[JE;]+X~DD!ekq=^P^@H-LmvLOd&u' );
define( 'LOGGED_IN_KEY',     '$MPSdjW# mAFwDB&Z);gx-0E!~c:(o dgtt)`k8JTnDB)ELi 6zletbuPRxTs%]:' );
define( 'NONCE_KEY',         'dRWlzhN?0 K8qOs:b3srQ0:3}F;)M-c6n3[E~kaG-%F9EDYd(P&_`>3Gpa;Mh_1U' );
define( 'AUTH_SALT',         'v~B,!crl3+h -hb#N.cCF!W1lL*vN4[[rn6g{Uhqd$<kVzoDRy,jsU<ud{v}$j.G' );
define( 'SECURE_AUTH_SALT',  'F]f$;y};a#YSwE2Y@.fV7}-cljPh#il,Iv1w{N]zS`7z>Z C|,WmkR-[{}qA2d4L' );
define( 'LOGGED_IN_SALT',    ',wz3;R|x>vY`XL^1$sY8Q_k&T!A|E/<{[92/~y&G<]M`aTFQoRuJ:UgXSBcQ(8E@' );
define( 'NONCE_SALT',        'gm*BfLt`Nm;F8%^)vsRbk&,mjPd9/vU[OrU]IRy(MVfqV8 wQ6FoJSZ<blDV~L<B' );
define( 'WP_CACHE_KEY_SALT', 'a$ngI b_$AdC0vC^|o<(q{!O<(Np,[E:%16AePH_>Tr3oH@9,a PS{IR]aW<J.B:' );


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
