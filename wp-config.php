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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'praxis' );

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
define( 'AUTH_KEY',         'eCSF&b~/_Duw()!ETjoAaPN>[nIWPv8M9]H)^$(}qO)C[N#*IgdAbahs*s~{Bt_m' );
define( 'SECURE_AUTH_KEY',  '5kbT1/<2wZsl&P$@Y!ksp*IJ7rpAVJX>* aI+$+pE-Qi+6E?]L(qL}^>wX}m`qFT' );
define( 'LOGGED_IN_KEY',    '[FNN3|?T7dnERDP%,_dI N<s38_?hI(TWu:a$NEI2IzwB(L/2NC{S%M$yfzc$ZnG' );
define( 'NONCE_KEY',        'rV/SWzFMQ,i&r+frjA~3P]mK](DMhd78,]<?;P@SG_<-at{I$qfSsDl<)TsHy3k&' );
define( 'AUTH_SALT',        'j2u&6p1wKLTY8Q}Me$?x~nbY:ua/i$A6jj[<j4!RDbeHJ8;XhG2F(iN$2_dL ` 5' );
define( 'SECURE_AUTH_SALT', '47is5$lo+8bD_Uo;}bJz!v/;-;O*hO>a71b{5[BKtRqdQ)hMz&{j3N-AK{>XL5E#' );
define( 'LOGGED_IN_SALT',   'v7a#}-O#dIze]`6G*y1UaWC}:}]&)I`+,jm(pGQDlp4F]lv62ZVF#tjE_r$i3I|2' );
define( 'NONCE_SALT',       'APLq}FmAu; $9o neU8/E^IRYi3iv8:Ri5+KM04`dQ]S-Y.HqB^% q;E o=KPD9,' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
