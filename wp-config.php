<?php 

# BEGIN WP OPTIMIZE BY XTRAFFIC - ADVANCED CACHE #
define('WP_CACHE', true); // Enable cache feature. Added by Wp Optimize Speed By xTraffic
# END WP OPTIMIZE BY XTRAFFIC - ADVANCED CACHE #

/** Enable W3 Total Cache */
// Added by W3 Total Cache

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'goforsedgfs');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'goforsedgfs');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'QP5spCddR38k');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'mysql51-115.perso');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')R|H.Q6cnC,r694Hi2x{]A)5i+JCO`[4u1Va6#5viOl9)wqVI%0q|aSDkHJpJlm~');
define('SECURE_AUTH_KEY',  '<is}8#0?u(<MayE$ZN}6L*rq&|X }`cx-.]]lZTch8CO0K9+yJu;S#9vllb9Ys|}');
define('LOGGED_IN_KEY',    '6#{;B<@9s-H?hcWYo8#D5zrSJN3+y4` ;sO=|@!J+y[?D:P&?)uPz^@A*T0]Cb/E');
define('NONCE_KEY',        '0U59|F+l(;@H8&i#8u>-W,$c:+(z9ylATWNjsM/T(=%J;LqqLfA?I(g4>sDWuu/`');
define('AUTH_SALT',        '|CJw)z?Sf:-p${;%#%%8y1UBwwr~=(i|unil1PnUZU|t-F`g-?Pw)g0#Z9-h+E[)');
define('SECURE_AUTH_SALT', '6Xb1M{5,2gJrV-^f=~oyvafqJ:J2|o<#e_pvCy=KxpuZmTu8q6+^D]Ai?&kGk/D+');
define('LOGGED_IN_SALT',   '?*jCi%qGAU8st;@Ml6B%Odbiac=_kH$Xu/!?aa D!;&,r-W-xq1(XBhjT^o(YJf1');
define('NONCE_SALT',       'Si``std!)s)z[]fo@R+KGXYY5-G[z@1CLyZc1a.,&tNo_0@Noc-9T-i-(9mvjF_u');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_gfs_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');