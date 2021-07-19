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
define( 'DB_NAME', 'chezka' );

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
define( 'AUTH_KEY',         'mdC1FS !2pK<!?Sl>v;YQF|JHj}Nl3o3ubMs=Ib[iF7bV2S)m`!hgC|drAqHM|F2' );
define( 'SECURE_AUTH_KEY',  'k6+>8H(GQa!4bND34F5}vi2Qi2,7cVT:Ekc!P*vlsj:J YY,Y!=t#uW~OnWF~aMn' );
define( 'LOGGED_IN_KEY',    'o{dN9@R8[4pmlpC7=~Q|b80nhGvM7?EZsD4ufvdXj`Sko~E,waSUTKArerv;UtD0' );
define( 'NONCE_KEY',        'Zz<@A}g1}%^v<lZP%3AAbBHug*_qANvzjwbB{_|*qNkUe+[$~zk1&-00cFk3z4)@' );
define( 'AUTH_SALT',        'fS|U7l=}_M%QAu;.~-_q*>&)o|k%P1CESaWTZ%I:`Hfa?Y|D$N^H2! !X4[x3 b8' );
define( 'SECURE_AUTH_SALT', '-1clEb$AH){TXZ|]k)z9rr7J9=/<e!O$CL#C]ae2vn6m+xM-?El9Z@ mX_*xb#RJ' );
define( 'LOGGED_IN_SALT',   '8S[{+z_^-^1mEj)?nK+lp_[,dMJ,<8!6X/k5_Y(.BQxG ${|.i67NAMevI0uiy~N' );
define( 'NONCE_SALT',       '1YVKC=oDBeLHBbD/Qk35BU~It;~5+jL}1=8^%dxC|)!Y&SN@!^XVH6rXY0Jl=Nks' );
define('WP_ALLOW_REPAIR', true);

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
