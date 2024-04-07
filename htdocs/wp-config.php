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
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 );

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
define( 'AUTH_KEY',         '-Mg6^r0oW~Qmgk.-wZBsGoA^JN_J&-j6;%:B%oVP8YY7MJ)7g VIlvS.ek7*5!/7' );
define( 'SECURE_AUTH_KEY',  '!9o[J%Zsm9GCIrvz2{uxw~ty*#V:QWqU@uB.3O.!OA[lW1%*M*DB^ApAb2vC4UPg' );
define( 'LOGGED_IN_KEY',    'I[z|ibFP)C/mN[tGr.Jp`- F5,,4P(HG4`x;P}TkL4vL68vvh $fRky`p/FW[O:<' );
define( 'NONCE_KEY',        ')Fb_:ksqfjWpTSUhWYQ$cB{{kHS+e6{~u=]O0=;q+ta:P~%v7WLQ|0t_3Cl>%yKv' );
define( 'AUTH_SALT',        'jFRSz,o-!(#=Gs!I;9Ql;2BpXmMrZUjR[}[3oEx+`1tr[am)m+/DbQlopj2/~<tc' );
define( 'SECURE_AUTH_SALT', 'U3N,q|MS!EULh9xmijh8&BXXGh)Df@nmod]$9/*yFda]niEs]-$pL74x|xE;ux5|' );
define( 'LOGGED_IN_SALT',   'J^HgkLZqa9B)._+H7JMi:Y{qA]0z+Qn3`eH+frJ6<[$[D2Tg^3-He&Q%YcN3r=[[' );
define( 'NONCE_SALT',       'E*i=]|-hUUYq%>s>Z06yiCsU{@Aq.*HI?Sd}^p1.y$;H6(T0FCvlFt_wi]*m#-BQ' );

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

define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
