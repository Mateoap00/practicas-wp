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
define( 'AUTH_KEY',         'P(U?EUr+#)e$C0hV.-<MWG{+*+#W!2S1V&KG}n`S0ojb8A.Zs!K:QO%To0^:*pKA' );
define( 'SECURE_AUTH_KEY',  'M<}0k5=zjrW/lqc|z,QQE+))miyegk#1;J8f{#R,|nSKm0*ygWF;A<>IL}Eh*whb' );
define( 'LOGGED_IN_KEY',    'qLF!@etkIXF@LL*n3lhyztA*+mPq(8},FIMa61AQ9KB@G6S[~}4=p-HQLT&Zy:.&' );
define( 'NONCE_KEY',        'w/,zIzc5iH:|?0G /99c&8QXW*$Z9l/GVU{NgpKa@k?_%Ut14%HZ`Q~S?;ed^%WD' );
define( 'AUTH_SALT',        'Z>W{69%/2`*55+)u(~+_zgke%n=4#&p}&+`zfRt9k3(@E[G3(7K(TeH[Y!y@f,0S' );
define( 'SECURE_AUTH_SALT', '.`=^ook7%u6E<q2s%+H5iU4&Q^T>`Ok{@PXWmql-uTjc)^10@| 6Bt0&eH,(}*<o' );
define( 'LOGGED_IN_SALT',   ':%&lV )3;U/;>19mJJ25.$@d)8Q~R,k=5oeR( :a$k~fkEIo$,-80qdfm0B}P&@E' );
define( 'NONCE_SALT',       '#:2yq!z?8BPJ{0_H4KN+ *q7mUK6i_Rf+R$V:@DrvjU`);6UX,rN_S =?vb^?e9^' );

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
