<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php                                                                                        }
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
define ('WP_HOME','http://wordpress-1801507371.us-east-1.elb.amazonaws.com');
define ('WP_SITEURL','http://wordpress-1801507371.us-east-1.elb.amazonaws.com');

//**define('WP_REDIS_HOST','wordpress.9gmwit.0001.use1.cache.amazonaws.com');
 //* MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.cijsvbvljkie.us-east-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/                                                                                        1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies.                                                                                         This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mwhkR+r]]M>b-^FO+42wiZp-wk35i|->DP*D}.}e4}@r=eL4^<{j                                                                                        QL*;W;dx2|%Q');
define('SECURE_AUTH_KEY',  'qcNP,/(:B ]H~ !fY*k|uf1:a+|o`AJ?/8Rag{q^nV8.rSu]U/Er                                                                                        XKDe-?;F]&9x');
define('LOGGED_IN_KEY',    '2d57T4w=,9(ZUlMpHA@AQ`p-gpH2vJh|@l_G+QLx5z<]#9S vry7                                                                                        UQma/59}d|+7');
define('NONCE_KEY',        'X4-7.zD3c6gJFxO#Yu=UcdwgV^m$qb9>K3(W#XUCV]24ncYPfX9x                                                                                        yo|o|q(]IsXH');
define('AUTH_SALT',        ';iPX`!7EAU+(+1+/~V7:S$;RO/+3A<|4$:`EtU5x#H|w~{uIrT:=                                                                                        e&+~pYT<]<>w');
define('SECURE_AUTH_SALT', 'Ysx/XUDW<MVc+clL[1-CY>}&>Y6: |gg-CS.plDfOMQpU<.NfzEO                                                                                        -RTI4R[ (vs*');
define('LOGGED_IN_SALT',   '!bY6%90}!geJo>>|ytn9Vj/ 1JA<<6%:V.Mwob;_.aeR!uT7A_*E                                                                                        4:u-~yUYb/(r');
define('NONCE_SALT',       '?f+t|h1H:HY*F&{sI`a_Fn-.![|aQp=kCM6{671nFD5*3e5!~<RB                                                                                        dV$Y^}7XQ$tP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
