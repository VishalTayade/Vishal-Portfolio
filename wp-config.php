<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vishal-portfolio_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'IJb=f0&@.V(!1HLhxqAi0g-:!l]}[m`;x^O/0?jx:*f0Ob}jO=+jn1SlAxCh.<A5' );
define( 'SECURE_AUTH_KEY',  '0bJo#p$N*I5&mC)*=-j5H~Bn<vi[wT0wnVUUqIBwW_>%z]{Xl#X`Yq%W%U[-[+mX' );
define( 'LOGGED_IN_KEY',    'CPrBAi5uvrb#MGJ6D=Zt}LudIT++{ynNz>v6CT:,d_^i_I)?_`+JT-;CTbAH8QHY' );
define( 'NONCE_KEY',        'vM1*5G*@mRir50_fjG<[<(WX#V@%eUy{SxsHDm}DuzIp)bS:d[RN_j^E+V@>b( W' );
define( 'AUTH_SALT',        '(q&$MIoQRmitSA%P^ijVL%H,wHu^]g^,m*-?uHPy~oubXeEE]B$kV3x$K9NPqvE/' );
define( 'SECURE_AUTH_SALT', 'I>X.93Pc|JCh6co})X6+QFGG,v,&w?x%r(?{,QQ_ F=K+xMP75]r;>vT{zo1!$Em' );
define( 'LOGGED_IN_SALT',   'rY`AwS0L ([m*G}zc#mwmKuq+TDk->H@an+0O}r+|$Nz/&_uY9yNl1>mOj%[TV5!' );
define( 'NONCE_SALT',       'R|x!qJa0DK#?F44(R_:i*9M-IFw#-~xD,A^oy!r++D))1>-&Hlx:>s:zQqz4542r' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
