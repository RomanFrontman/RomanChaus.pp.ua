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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elektro6_romanchaus' );

/** Database username */
define( 'DB_USER', 'elektro6_romanchaus' );

/** Database password */
define( 'DB_PASSWORD', '9r2D5@npH)' );

/** Database hostname */
define( 'DB_HOST', 'elektro6.mysql.tools' );

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
define( 'AUTH_KEY',         'D$Ja{p971JmP)k Y7uN7_.fTN#8,HDV_dcSU*)3QtnJyfO|<NnlV)qo~*~,0wz!#' );
define( 'SECURE_AUTH_KEY',  '<9f?V@Y4iSynn:gI9-COJb3Y/Fw8l8$G}3*JGW.Qu)5S(}ZLGs?68ON;{yR3n5W^' );
define( 'LOGGED_IN_KEY',    'dB6kFu%>s.-y<9)b&2T7<)0N4>ncrcMVR@PS,r(Y1W6r;?$xpe=`Sdhiu)UU5=<g' );
define( 'NONCE_KEY',        ';J#7xAjkM^w;2e~WKsEDFHJP;f~Vy>r( U7L^,5qvcD+7=Q7.bPYY,`OEY9?RT*Y' );
define( 'AUTH_SALT',        'nS6frB,K0BjJ}A}M$v<BV~W5VPID4$fub<naq7.D[:ETF+RrP4)IXg85[FVA:]36' );
define( 'SECURE_AUTH_SALT', '=of+&3u@gX^FtOzIZH:nh!kU6fp|]4F!|8/H(#=#tA[.Qm:*%tQ.;&*/aAL=WjQf' );
define( 'LOGGED_IN_SALT',   '`5&8#hcJ|ME9*v*sflu./(i^hmJktP<in.:c@p60&F23k*+wFM;IigCCLt@u0m_A' );
define( 'NONCE_SALT',       'XqAhMv|cqI7Bt?&Bv[9ZWY e!69Q)xc2WB!Yeiht?^USRM*;]_[X{t._fJd+U^#!' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
