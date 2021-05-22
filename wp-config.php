<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'medusa_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '..I1-X:|T:$vAmb5ih|RiJzDVc<:,wN)K?_x#zI4-)Tt tiEnfC]K|[E=XTyLDjv' );
define( 'SECURE_AUTH_KEY',  '=e.gQX}i_.~OA|yKPyLy;$Ke,$[,dbFq|Be{xT<rT,]ZDVKgQZS7sl?$.nLof4zO' );
define( 'LOGGED_IN_KEY',    '^A(!nn-Z6B6N` T,-7LMd(Zge3OUEV,-h2Q|YMTXEDoO*Qf6lV[LhkSHn63WV7,I' );
define( 'NONCE_KEY',        '-,Q7?1[A8]@r=E2b8(mJ4L6:uD%j1!^s-E#{&&W2N4R8VWL<-(g#Ain#%sK4A(/W' );
define( 'AUTH_SALT',        ']KX0q$ `JZ|z) {IJwN*}G% V]p?jEJV{t|h4P/&$yDpEsZdRo$h8*r.]RXiuLvF' );
define( 'SECURE_AUTH_SALT', 'SAv:`!cTYp_F+4+9iES>bc|G=03?0dsv:0Ft~iB@B,mj*!%_PxEC{V,TwnW99*$7' );
define( 'LOGGED_IN_SALT',   ',*`lf]ZRiOOG$;U.Iq&xi0yN!CLBcR<W[X.$YHYcJrDn&]t;`CM+ur1:ueadLcW{' );
define( 'NONCE_SALT',       '!>E@7V_}0Gpo]%9rbY>toAV8txtdRz<PU9!SX902a64~w5 Q~4K7SYl^|8p{ydq%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
