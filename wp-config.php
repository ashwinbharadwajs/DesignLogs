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
define( 'DB_NAME', 'designlogs' );

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
define( 'AUTH_KEY',         ',DkGr.nmkI+6@a>$`/RTawq&[^}}ZuGX(MMYO7~YaqEfPBGlW]*:@Sj0g?m[vqWP' );
define( 'SECURE_AUTH_KEY',  '?;aqcP.KzG74FcKjx~{IKp^?`y]SOdg(k!R6jSc^T1o|GkzFeA.5F4Y%o!dC<QEp' );
define( 'LOGGED_IN_KEY',    '&LU}J=n]s/>[rIKbh6N*2 UH`M<%ilCD2Z%]/$)>,3prhI#GW<a?#A39# -~$8[q' );
define( 'NONCE_KEY',        'l3wr%^8:%_8!i0GECwd-C=nB:AejntZ8_M$>olO<l9)we@{_L}vowHPnBHzh#9{y' );
define( 'AUTH_SALT',        '0)<B%p_mg3dI,}C>-% 4fc&n& 70}dbLFlZF.7VeIUaNPKvWbaR]Br 5nF&7wuq{' );
define( 'SECURE_AUTH_SALT', 'lppF!*26g|?R<4;*lHnbyqPAjuK2(q:4Vc1)n?-G4?@,(KI?jEcB[9kPEh#s^Js:' );
define( 'LOGGED_IN_SALT',   '0p>5NcGDKb#kKaZCpq7)-&N)j3pTBRl{CPH }2S)yafCMuydz[3;%aA=~YLE%>4B' );
define( 'NONCE_SALT',       'GDJ[OBo)6o@jn|+CjS*(dkLnHwN]2_ZO;[w(Ueqh&k70hl)bqx:Snk+a;Im!9M5W' );

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
