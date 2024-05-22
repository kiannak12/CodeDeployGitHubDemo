<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'survey' );

/** Database username */
define( 'DB_USER', 'surveyuser' );

/** Database password */
define( 'DB_PASSWORD', 'Survey034!' );

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
define( 'AUTH_KEY',         'Tj(]-cV&KS&1s3I~4s.#<f?P0ov.Ir+1W*5;L!^H<0uwq@ k$)Q4FRI6ZL3?>ulp' );
define( 'SECURE_AUTH_KEY',  'cTF=:!&IK.OB1LQ52/Xn#`&* eMvS@-Mj0V#[hg@I{g<2y}/k3q{Xw{K8X>7frZc' );
define( 'LOGGED_IN_KEY',    '_!YJK8H+l r6>Q@x>v#-<8NsF=t~$gV>s4q@vuxH=-jLqif{Q3[c29=eE=LV7>*s' );
define( 'NONCE_KEY',        'O(esn~&7.KtUXv_-[3;JIf!w_50ya01Qd[I3d%one9.!B.3t,2QoO0s+^w`pLU!m' );
define( 'AUTH_SALT',        'g6zFISbzke6Gg~DW6@sH)LpCBwc{@4v4Yht prW&*k]-opJ+gg0Mj@$8SO+QFV/}' );
define( 'SECURE_AUTH_SALT', 'aY9tCDx3!0RI_?QuTf)^]FO7?,)7wPG`;c<evs)#;A_|clq>Fy27I}I{TWT#j(O>' );
define( 'LOGGED_IN_SALT',   '8*wL^0n=R/i`.a##KU$%77J,~s>0&!^zYajUL*?j.?V4CF0,J]QjW>)cDIv{v>v|' );
define( 'NONCE_SALT',       '^M4aeO8n!yJ^X2D4^ta*o^AV 1:T#asM^ZIh*qoof&78^Nz`ZTe^5Q.aumj?f{qD' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('WP_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
