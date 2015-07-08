<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cs_genesis');

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
define('AUTH_KEY',         'rX/j+?ot5As`t4L;!BxJ<l*}bU;UzWW=96a:o [Fo9v{ DYJHc!RK}Eo-7+#U^C`');
define('SECURE_AUTH_KEY',  'P#Y$1%X?udQ^>8v)*-4jo!L6+.2fJ$VLI,pw U0Y0M?Lm+:Z@T=x?q+ufgVF9bM.');
define('LOGGED_IN_KEY',    '-_Jqm`T|1XpkwGW)p.HJ45UKo4I*Y~Md(!-}RpJi) [Ke!5=01}p-&GhNI+|pGn?');
define('NONCE_KEY',        '[U..=zDuuQzIlWn$M[Y<L+T9cLd7v=:Xua6<(f B@q,(@HkYo:OYV%o!xNa#;C+{');
define('AUTH_SALT',        ':[,=s+C-ruC1v1{*8H2?%5Fv}3~?J-[GTbjBiOZ+M_M_9`t8eSI`iH%dx*YM*~|J');
define('SECURE_AUTH_SALT', 'U;1*M7 AD1+pq,U)7+0*PV3D.#A`QN>je7VeZr+#]nMM;pb%0hj+r]dpRfy6[D-u');
define('LOGGED_IN_SALT',   'Ayg?zI(<l<vLz??(Ikp;ki8=;i9?5g^c2&C|biju@77S!cfMqX,,e]cy8f%XHw`>');
define('NONCE_SALT',       '-cWcd>TZ*4=rp(H!T+%NcP7~-[Zn0*h:yUT#.wsCQ4lz{|7xnlC>T8/+,3S*v+@I');

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
