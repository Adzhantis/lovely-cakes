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
define( 'DB_NAME', 'lovelyca_db' );

/** MySQL database username */
define( 'DB_USER', 'lovelyca_db' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cRnCTNdS' );

/** MySQL hostname */
define( 'DB_HOST', 'lovelyca.mysql.tools' );

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
define( 'AUTH_KEY',         '/0W;Aw:m1zw(3bJ!bu}yu7dvp|53z|VUwN79-lwL-(DtZo{bc0>w[TInbB?WV90Z' );
define( 'SECURE_AUTH_KEY',  'OboSf[WwXa[ys#NvW5M}P$-OP?}lQS +J3-WO#!KiQ6AdfapzrOg=O)~siMSaJD-' );
define( 'LOGGED_IN_KEY',    'KC^s!6<1=l-5CxvAUB5Qv2+Z|,pMFTd&4(x{_%-|&]dYc{#hvy%%~}9;;>PR`z)u' );
define( 'NONCE_KEY',        '>;aqh^mQ8QJ8PP-O,s~qEX(+OZD.;0+8F<hrLBkUh9n!bN&rA_(iLwyb?G*;Hawm' );
define( 'AUTH_SALT',        '%{NpOmMHx6L]Mtzfll8shcL1$;#9vqR##Q?C?3}9$!+4f)%fvxso;[VBiPs_,*oJ' );
define( 'SECURE_AUTH_SALT', '/Ix=7A&A oQ[oNDi^AL94C<C%M1V@JIS7;$%V]wIbg]f}k~OI@MLLr8&:f#/9nuF' );
define( 'LOGGED_IN_SALT',   '0Oa*x]%e8nI.vYyLJY(Z:V p^sC5|<~ Jr1H5J^.*g*jM:c/qhHL)@c$Nd{01%`!' );
define( 'NONCE_SALT',       'dAoqBE=O3s@.v{1B36M(0L#H}0cgwN*4USE^xRa^sHO@OQp,8pOEch~;BC{`GN* ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '5hg56bg_';

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
