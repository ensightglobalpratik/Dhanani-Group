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
define( 'DB_NAME', 'dhanani_group' );

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
define( 'AUTH_KEY',         'P2isgHJG29h{!0e-tV11vrUWn=tw!*,EGx!$G}4nzbZ Ah1Fh{[S59<Dd;ai{s|y' );
define( 'SECURE_AUTH_KEY',  'CY/!q !xxtI5<}!2tdNLI1P?|Pm.ov4yKj0$P6k{2FSNg;!j{1:f,2=SG)D?%{Ji' );
define( 'LOGGED_IN_KEY',    '?lAzo3Y3R1>|F5Z*~Y8)^>#J>RuCnV*MFCYW#Ub=x9I{,%9}>e(O<BW?sRtbNoLQ' );
define( 'NONCE_KEY',        'r5+7QN!t`rU_${$:Q*;5Q~9.{DU<)VdC^+vprt6P+ml&`p>!hT6p9a,>/<0d0BSX' );
define( 'AUTH_SALT',        '|G/G+8o=/c#?v?|;~SMTjhaGY51o`![>f (OY/{)OaBhxH[;7[/SxEz>A$vEg{hv' );
define( 'SECURE_AUTH_SALT', ')1LVP@Q$Yy/,@0awMlN!>1WNPuR9q^ZYYYomg:x]~1: 3c9gv0g?w1Yh1^Q}zpY3' );
define( 'LOGGED_IN_SALT',   '%:*1&g@K:uU!%y65}Fp+ O<6QVdqVTxm$?S<jXp=s;b8q, o7Np<*R9cHv{EELBz' );
define( 'NONCE_SALT',       '.V7i-Bf ;?K_mCyYje:Y(E7aQlTRER0&HBG8-z<!d0qtzP|yxou}I/P#eFM1uElE' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
