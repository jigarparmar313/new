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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Sb[[gHz>3H4_a{@kqxRfZ@[3(lIOKa2!a,he!I_&yPUZXgdofY|*W*!+]wL,p;JY' );
define( 'SECURE_AUTH_KEY',  't6mgd[h%wMYBy*ZML@C4`#Rg[r)W``B1@jCMf(JHY.Gw@&8[<q_-S9l6?qxaY %&' );
define( 'LOGGED_IN_KEY',    '@BL}<=XWdUpMk.:K<fPLcKYP((;Y{(uE]A)8P-:wW9Skb:qFq[;fn.MRV!)y3=h5' );
define( 'NONCE_KEY',        '$&z#K HYWvYY;%Q:>|n~aj(tM@:g`(RfO?&(#{6{4p9YgE[Xsp:d#Pzv|wT[U{at' );
define( 'AUTH_SALT',        'YZ8nOAbHhlJkw:TY1|z[%45@FsLb~Rv+aQ6+*,-o_$P+>:2fOg<_#49shs1^MF4}' );
define( 'SECURE_AUTH_SALT', '}rjf}O31C6,jf@m.j7?R2|;%vJW&+i)ON>h8XL0z3>X<ZZ%t]bpVUvk;u68Q>@h,' );
define( 'LOGGED_IN_SALT',   'UYPM$wg3N u|r//[AuJ }Z}yM(8a^(LJ1A$6w4X*[/OWH_JJuPS~Kr57j[ #Jho2' );
define( 'NONCE_SALT',       '-}KH4r]x=)P],D:c;x7Xl4wN2uC:5~$O-AfdT<`tEU7^yXWe!e  tLKomG1w;EP<' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

?>