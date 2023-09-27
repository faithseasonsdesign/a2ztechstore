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
define( 'DB_NAME', 'a2zshop_db' );

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
define( 'AUTH_KEY',         ':&ngZ4q^wqjUnyL)7ZSf/hF himM:NunF;jUS+&Yj:k2`qZp[XMn+|W{pFo,%wT&' );
define( 'SECURE_AUTH_KEY',  '~gxVQ=[B``$K^!HbQGpsj|*((A$<C>oVd4kx2LVudi=9.g7owvuslRpj.c=[UdKQ' );
define( 'LOGGED_IN_KEY',    '=wap>wMV<5&EN`J@`YR} c3}SU=-Kr!_Man0?v#sQ^>TmzhEh] ;q(iF>7{CPhn[' );
define( 'NONCE_KEY',        '_[>P}2>dNKSUCnY?3&. iE7HfWgK1<)4?u0wHCOFbd%=>r>z2,F2F#:Pj7#3IotZ' );
define( 'AUTH_SALT',        'd6Fx{8= wR`art`S`~5Ef9km*{^MYVFNH&~-SBeW  o}WY`VH!pw}Nowk<9d?Ogs' );
define( 'SECURE_AUTH_SALT', '6/g%M,R_;2j2yAJ+g*%Af6#3mgA<LK}4fsdFza4aU#xKcGUz%dkaswc;7;@0F#S|' );
define( 'LOGGED_IN_SALT',   'anbUvP+A8{@IqDN<`992C=cpz>_1G+2br/oubTlEtF)o^U3VOO*SDu8,_yw!R@l[' );
define( 'NONCE_SALT',       'IB$;dsZ_eVew+d}&*XOb[9IQ[O^:(/D^Rn9f~1OGN2R1N9mat+.6v;gChxn^t:_&' );

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
