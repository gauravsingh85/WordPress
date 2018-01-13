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
define('AUTH_KEY',         'r<G7-P~4VANN-v>l0-9r(e`A7o:-8Xot>Okxs_/Ml|8.=/%U6{I-{h%u}n>X5DI`');
define('SECURE_AUTH_KEY',  '.|^Bcj|^yc+L!ZF/OMVc%I>1M){%5pqaivPh+uiNTK~kHYr-B~bGM(wgWes==W-:');
define('LOGGED_IN_KEY',    '{3+*vlox?!V4W2:A7i58nY[Em Mc-Oe6h(}Y]Ihq^?)9Fi&_m-}|Hli4cC/;%>[f');
define('NONCE_KEY',        '-gTvU>6HdUu{498k;@N*rc_+7imB)K.H#2gc}FiE5qdm7D^Hk^K5Jfs3IARY7D+N');
define('AUTH_SALT',        '%:+=rW8s( 4|R[]--_a7Q~z|d;)4G3Ou4hJ(d/-.G,xmGD>kmy(c`#`,s2:A$l!L');
define('SECURE_AUTH_SALT', 'tM-vh7}`Z]?NGT)2<ms~v&>L}a/!`3e7A54(CgFH88p^>0 c:-;`Z2YZU}}=ANvU');
define('LOGGED_IN_SALT',   'd<vA!;zOgc[@R^VNC]$XaS0W<-`9JO?7$+a &MkD3*mvOsj|Q.JQ5Piy>Y_>M% f');
define('NONCE_SALT',       'S<s4#>>FvK&@6|*h7K(+B>db%aZY~Zi1wj:Wd)U7)X|K(R8,T_9ben8Cn#1IU}UY');

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
