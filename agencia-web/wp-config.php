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
define( 'DB_NAME', 'web08' );

/** Database username */
define( 'DB_USER', 'web08' );

/** Database password */
define( 'DB_PASSWORD', 'Passdb25#08' );

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
define( 'AUTH_KEY',         '3C<[ga&;jrxwL5f88-@DW&5y;Y#,aelir54f:+!tcw3~i-f7/y#McE@QuBeF#k#x' );
define( 'SECURE_AUTH_KEY',  '*M:@GzE;wN68VZ#,=CZS(8qimJ:`|)2gmg:>X*;S>G`|xn>vEjykdV0O&c[$:#=h' );
define( 'LOGGED_IN_KEY',    'yhzay_TK8d|ByijXLaJ&biLAe5eHHzS#`} <>(Kh)0Xn~|4/.{IFCMRhb?5}cxZG' );
define( 'NONCE_KEY',        'L]gp)-S}a^<S;?!aHW?Ya>xCT3V);X:]cXd5N%@uM6t0@EtN#cUo]L:9nM=9dqb3' );
define( 'AUTH_SALT',        'Ylg+VQIQ,%|8hShq)}PLR2NZG-jp6%WunM^BlZC0#j==1K3+GR?y5UL5.pIWyRGj' );
define( 'SECURE_AUTH_SALT', '$V}^]JPb<v)rt-(J|F:)}P,Ro-`nh3SW(apTOz#zn<JdV1j^tzsq{dV,xs/adnf(' );
define( 'LOGGED_IN_SALT',   'xrm+bRb^l;S5 &XkH5d.,b~`xpZ^aL@MvT3~b;%|yj4l0$t, qS!{e>d Po6KQN3' );
define( 'NONCE_SALT',       'fTY~.7AP2J^nR{EDc1%M}!1@ &$NzyY:5L_T}Z(<ECty@B)zr9.%N?3n@2DN0|1l' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_agenciaweb';

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
