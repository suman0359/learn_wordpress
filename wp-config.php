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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'sdrmdths');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' #`O~.,CnU(bD@<fpeN9u/A@Ii{ZsBb<ypQm<[e^Wk $uQZe@206Vlhr)Bd.L?87');
define('SECURE_AUTH_KEY',  'LM:/fc,S^VP-9#/+M,:]qj|tP6RT00M)tNRDB5%/A(|6l^N/35-4L},W8g%pX=cc');
define('LOGGED_IN_KEY',    '6gcG+^$w<8L`NYqz{]?b;^c]j|ehCq/MI/-M~eBsf#fqD&A6$Ejc35i)-OzzEm_8');
define('NONCE_KEY',        ' pRW$ t)@.cK+36,pHtU)(cq}kyBdvg}/v-+&[|$CXwql:kWW0y%(sv+EXWf]OJ6');
define('AUTH_SALT',        '. J~QjbG+lWSG1`*M!A;|*bD_l!||T@m3`g=O{58w<}!xeZbkK@xVBBdl$^t>i_a');
define('SECURE_AUTH_SALT', '>+rZ60Nc|2mBR$Qo$|{]Y!oH/oGs0_53n[GZU/RqB>qtpw4aO_D$1.2d=7W@=3Y[');
define('LOGGED_IN_SALT',   'C7a>_/W/4b6jQ.3MXJ-ad):y5#Y(VI#W|-$K,Y{-YB=A^?Y,Rmf|$Cn^CbB,kF*e');
define('NONCE_SALT',       'v865Mv.H+Ic:9tp[%b1U]A4 x72|.}6~u=YTn~VZ$sF%e9N{L|FjkW+L|&tsp%f+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
