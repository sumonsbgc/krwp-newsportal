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
define('DB_NAME', 'newsportal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_unicode_ci');

define('FS_METHOD', 'direct');

define('IMAGE_EDIT_OVERWRITE', true);

define('WP_POST_REVISIONS', 0);

define('WP_CACHE', true);

define('DISABLE_WP_CRON', true);

define('EMPTY_TRASH_DAYS', 0); // Zero days

if (!defined('SAVEQUERIES')) {
	define('SAVEQUERIES', true);
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '');
define('NONCE_KEY',        '');
define('AUTH_SALT',        '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT',   '');
define('NONCE_SALT',       '');

//define('AUTH_KEY',         'INqQO3lDwV}3GSQ{h)08`IU{pF%+ib,WSgWcQ4IyEP;,~[Ua:~|@EfW_Viu$0jc<');
//define('SECURE_AUTH_KEY',  'BBTtiD=E<t-#z`IdC%-})9QQ}uVyqBnsn9&f5S=ug]H~yuDofu^1TTWf.j VdTRU');
//define('LOGGED_IN_KEY',    'emT96/)yJec3sfh/z3Zcv@pc[e?Y.[kR{[)k,$*!ihiZu[5k*Y9KV(~{-9o=-A2V');
//define('NONCE_KEY',        'hd~%y7&u*ub:0.vs}5pm/>/o@_(rpFd;EY-h(^%5f6E3AUG{{rg69NFb7Bp1GS|?');
//define('AUTH_SALT',        'n5a9$eJ3%*e#,}4[v{1ipihkXi&6EBu%PmuyilZ}60WAdN|6e e,7X+U:pvQ#xh&');
//define('SECURE_AUTH_SALT', 'L )LU/a>[ F/LiU[#y|?!h>baghIiTgKxS01#y/Sixr)N-g.t0I.1LzYoSf&x`^F');
//define('LOGGED_IN_SALT',   'yhvndreW(bfZ45>GKZd7AP02TUuL];DC1ypFXx2z~iR:GO)YnslX]AS#/@!&!LI=');
//define('NONCE_SALT',       ',UPt*UEEnD]0`ath=U_]M&s*j[g=o8QC|zCf/.<NX;4C&r4Z8eM|8Hv-fYR%v9Uv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
//$table_prefix = 'wp_';
$table_prefix = 'dp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
