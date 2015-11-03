<?php
/**
 * Default config settings
 *
 * Enter any WordPress config settings that are default to all environments
 * in this file. These can then be overridden in the environment config files.
 *
 * Please note if you add constants in this file (i.e. define statements)
 * these cannot be overridden in environment config files.
 *
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */


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
 define('AUTH_KEY',         'iN7OE7%[-C[?=C:|rAJR$s)iG1$m:|*y4<fs<`-%1W++`CV/K9RWmh--uGH`$p-v');
 define('SECURE_AUTH_KEY',  'FMqB]g7_|-D?,3$9M,vO1PweFF^=A@;PvVy+f+cx?%iQ_pM@Ss5!*0Y},uCn.7tM');
 define('LOGGED_IN_KEY',    '}5ost)>G >Bdx<Uu?t++X.G20C%Or?Qr-ajVL2+t+5?)r,G;lq5k|-AB{1iSb:__');
 define('NONCE_KEY',        '_fO.U)cC3^T-^8cC/.(KImq`!`@qYD#r;sO|/<4?Qc5DX6ZOE=nG2?K7?2Y+?iPf');
 define('AUTH_SALT',        '$mwa0FxZ(gt3[p?nn9T@+aeZM7R/&aHbL5dt!2&ynVy0sj(B-a6/>H`dr}mud^(&');
 define('SECURE_AUTH_SALT', 'l:dMi])-$ib_),{9|j2T#qbH91+}LolWiIovw<zuvb|%/v#-GB+WG8z=^;-|$$g4');
 define('LOGGED_IN_SALT',   '<4c|r/7Nr!jszZ?=.j@2)DqD)40)(!O/[5vK&D; 8YERa]b1 xj/<[AajuLjL3q?');
 define('NONCE_SALT',       'Oo>V#G0fi{!;0pmT.3niWEhVH:[O#~?@s%k*-903R]jbDzLlHEJ*cfkxb-~vSfmg');

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
 * Increase memory limit.
 */
define('WP_MEMORY_LIMIT', '64M');
