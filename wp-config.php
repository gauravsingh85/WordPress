<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Read MySQL service properties from _ENV['VCAP_SERVICES']
$services = json_decode($_ENV['VCAP_SERVICES'], true);
$service = $services['cleardb'][0];  // pick the first MySQL service

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $service['credentials']['name']);

/** MySQL database username */
define('DB_USER', $service['credentials']['username']);

/** MySQL database password */
define('DB_PASSWORD', $service['credentials']['password']);

/** MySQL hostname */
define('DB_HOST', $service['credentials']['hostname'] . ':' . $service['credentials']['port']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '>dXiPCf5:dp9&2g/)nbd ^B<eX<w-F 6L<aX%&yg>,+<Z|2;Pm*8$ ):|4XQY[-$');
define('SECURE_AUTH_KEY',  'jZ8>#a:~dN}U-4y5>h+X?Nfq:EU1B;9Gd+fx!8QW5S;]E75>%%}&|LF ^M(!g4g9');
define('LOGGED_IN_KEY',    'SX.|Mlu1$!VJT~SeRt K|Lw)(Q7FZH?ok[Mj$E8aeVtJDlqL=cfCjV:HL)1LISF6');
define('NONCE_KEY',        'Qwbqm.8Z+GsWkKUK|eYmK>pEW@V+%ls&*R+hZfuf@>-dW{b4w^=ml4@`3zmN66nX');
define('AUTH_SALT',        ';)4^S/8opIm9sm3d%7~)$DZdIQTc7^3u~$#9v!KYZq5.ut.}<Jik=~9Z$(1a]]H~');
define('SECURE_AUTH_SALT', '#-QW!dOjh8r&R#p|l.(55Y,y->!b@ +&(Y$4D%]gE1F/Wmg6enf{@vlbJDP|S<-~');
define('LOGGED_IN_SALT',   '8.f>M{|c6*nJ(HA2@E,]kgt3WsjAdyH/E%BtL:m-I-I<WH}Ay:.VQPRLZYGu(y/H');
define('NONCE_SALT',       'oCjnVlx(C6U8-9M4G3m?bvCc<G0TYfH$DGro(gjMQR8M?<z-dZ8|v|h+op6!Tl;}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
