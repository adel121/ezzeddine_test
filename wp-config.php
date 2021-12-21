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
define( 'DB_NAME', 'sql4460412' );

/** MySQL database username */
define( 'DB_USER', 'sql4460412' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DCLz2pVQ2d' );

/** MySQL hostname */
define( 'DB_HOST', 'sql4.freesqldatabase.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '.+-l9*:JQJ<YA14fu/8(MwyJ6opOh@s8oSjbSy:E.;#^*_;+XIS(a*k_B>TFUa+p' );
define( 'SECURE_AUTH_KEY',   '%bM>Taf=qjGY]^yCKRHfiCD..|n%LV)O%{DfWY8I@W5Xz,,~H(al53m+y!jR}9%0' );
define( 'LOGGED_IN_KEY',     'Bvfi= (erF!Ny]=/3SPgH5w9i,g2HsjRv%$*uP]pUED-+/~NS01/RoW~!K]QchIu' );
define( 'NONCE_KEY',         'aRL8R Py@u~7I(` XvN#zWoUXKCF#_dCvXd^-.;nv]LxqP~N<OR^{LPdjX_=50@j' );
define( 'AUTH_SALT',         '1B$#jh`O,vlWtzf/upma3b3Z~PnKH2Me#xVt[-Awl-)FdC/s|w3@tsR~YcJU ufT' );
define( 'SECURE_AUTH_SALT',  '&^ p8BW20.%Yg}{ddv<&[G^{#_*l/m7;+.*/tQ =VLX#B(2ySUDg5wsG}>UUeK7Z' );
define( 'LOGGED_IN_SALT',    '!%R.jn,b0AZJarKeN+84Z~kn(+[/wmo)yCsbLpgw^ec=EVy(8Ni/jV@qH5U+/}#*' );
define( 'NONCE_SALT',        'U9OrkjAcnkBuR%H4A|kV+ze4g5SJEbURj`=$(-= Y9i[iSXjiNw1w&5(_}*b[k$r' );
define( 'WP_CACHE_KEY_SALT', 'sDz+}v Rg0@Zn*xe8Kpb+qQlJK1.fHrekT=7Xlq>n;iApW,|+XYyY5j*3Y3;ki+4' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('WP_DEBUG', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
