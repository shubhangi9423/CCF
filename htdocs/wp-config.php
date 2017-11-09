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
define('DB_NAME', 'ccf_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Y*MQCZa>j<:;VY(izlPjyK`P;)G:>` 6YWf<+>)Tiv$~|h,WMJ%PUOK<sRqeJ&ta');
define('SECURE_AUTH_KEY',  'j(gc&RH5.SGaLK:9w$W/H <q|OGPQ88}[%IzhH^7s:+Z.2;&r|JDOaQ(ZTGQO3fd');
define('LOGGED_IN_KEY',    'FcvmD5!;B4^m^z?:]X:^=ksiyV0a`sNc61_?wa.fF$Mm<?VaIUEz%Z_q<8BsjR5f');
define('NONCE_KEY',        'CdWK%ALu7H NO5i98a:fOmAW~uSNHChf;{)SXq:yLf)XaDUS^cHW@=A[>]}_|wYJ');
define('AUTH_SALT',        'tcbNzW3mt9sH1_>(/3F}5xsc){xOub|5`d[@k.h#&Gqm@gE$fE^z3=oWmFk=|iVo');
define('SECURE_AUTH_SALT', '{u<F!*t?u_`g2Uhb`+=w)jNfqk*D%2;yNtBRTYhOuDgop>x22JLOTtl&*S2&yLsP');
define('LOGGED_IN_SALT',   'O2IQ!{/8aD.!)M=MT@pp|sKbyqa`t?dXp&?dvkwVap}:.0/b~jMPETLkWG}5=05T');
define('NONCE_SALT',       'ZA[5XQ<6bf.FQC46~%;]wvTAeeB)RkL?*#L%O@<uQDd#%]1`k7r=S.%p/u|608jK');

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
