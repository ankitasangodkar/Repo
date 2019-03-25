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
define( 'DB_NAME', 'creative_site' );

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
define( 'AUTH_KEY',         '3juXVyclr2#HFaH(b>fgdr[}B6s+xc@WUJ%s>(u@ #<>L6V5_N?U:7Cl.+$:_p@.' );
define( 'SECURE_AUTH_KEY',  '=ht+-E0,H:j}b|seigyu{TNmE2TM5<(p4[G6ea%SS+~=_vhTwJT+JD!KVF{e*(0O' );
define( 'LOGGED_IN_KEY',    'E+r_)Bl%URN4@;czM5r^`_nN*m<5@;^~a/Qckv{*9VfN&f!LgH!z6)XjD<6|w[Pi' );
define( 'NONCE_KEY',        'ePJ:$R=lVU/VGU9Sij^>#K{*bFbh1oA#S0o<k)iZ[|mdQ.urBxi-Ye=tIEE,HED=' );
define( 'AUTH_SALT',        '5x9 ^eE(,)uT#>z?vE5.:d_;5Vj%VZ[G|]]Uf bM@5zV^yJS`^ZthLQKZqmi|_B!' );
define( 'SECURE_AUTH_SALT', 'D$|~RNDunCKrG&-X#O!/@x*$;<$iVpw3^wbR]%qn.hgE}ETev65V~2]%e`75M:,;' );
define( 'LOGGED_IN_SALT',   'n{wLWFd7^Izz/%kJSL6Octttwd4}BsjA%(!#|a/REI~V?U1*A%y}whS2wWTV2dt(' );
define( 'NONCE_SALT',       'Ds!3%/@jo;iluw|!&lIOM<<yO7y|End!21_{LwaJ=Ehv5z=P>sadBuIJx~_sNXBI' );

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
