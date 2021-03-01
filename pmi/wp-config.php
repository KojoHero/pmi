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
define( 'DB_NAME', 'pmi' );

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
define( 'AUTH_KEY',         '!3,?*0~oV4gr>  Tzod&C?|g)@C ;(u}!?,nNm,6x.G=9ZK]_n~%gci@*2K_`Z>Q' );
define( 'SECURE_AUTH_KEY',  '!B@uilYwH=WrTmUYMS{6qLg-EDa5@ tAU[P>OB1%$Y|F33Lz@e&#8C]FIy =X:I9' );
define( 'LOGGED_IN_KEY',    'hB a4a=<$m%@QB2*&]2#JBQ)E/9oTp*to.%_$bN?8 _cgyJB$Vjq_oP|ThkC#a<0' );
define( 'NONCE_KEY',        '{KR&/f}-`#a#lWVQa,,w6*_JO+85dbKr*EDqu{-nq}ucCBJA!QRcc`x5*6yUtMc`' );
define( 'AUTH_SALT',        '?1JuQN/Lz<x-6GypqJaMoKgOut&cz!ogaZ|TsYnmpgCxt5?0_r8<Rd=Cc#g^a>/I' );
define( 'SECURE_AUTH_SALT', 'JQ:825x)#El-bpW~N{m:3(.dxuyG?6{1b<t{VTdzS>Q]@ nm!Qa+o $C,2PktVOp' );
define( 'LOGGED_IN_SALT',   '_OiZ-_Rg6!s$t#+$[TV~Hco9_CWC /Q_zCC{=aAAP) W<Kh~NA=Am?4Vv<&q>|zM' );
define( 'NONCE_SALT',       'gM4p!rDkbz(:IQ~Sb51L+EI{:E3sfAsy/ZxzF`9z7*&91`-C+DKaDH`szvZ@UDE{' );

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
