<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'techlan');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yPofpNO,Hz#b#:[Mes)U,zN0_jQxEN0FLKL=LC.yZ0_4/en[|z_u]6a;?bliKQ?F');
define('SECURE_AUTH_KEY',  '}?gJTKWrk37=L^}eV!*K;} :JtOZ_?3_J|.[3kf}b^6bNBRHph<I#kNsyx#sMHf^');
define('LOGGED_IN_KEY',    'wDOb`S4kMAMZ^K=#tdK:|J%}eZAEogcx+=mELf2f*.sbf|7D%m4o#)uHCtNm9QD?');
define('NONCE_KEY',        'd4qa83!Qxy,w/6> ?]pri0==3g=2QJ8&=-7x%W;qgx{?me]1jA$bSBf)^e-nFjb@');
define('AUTH_SALT',        '|cK19[s%hMsZytM2)71i>vc~prum:XP:s^lY-c|@SS$3JB]W%d(T,Fa33=1Q=Jrn');
define('SECURE_AUTH_SALT', 'bg/~pt-G2!N!:9rZ-@:dchZRVj/1F6b4cA@mpg?!R.t6S(g(bu^vO+]@f_x=MB)H');
define('LOGGED_IN_SALT',   'LhkbKB{=S-r>#f3;2OnV@Re?[pgnAC|X#q_}OnDLSk- A-+;et;7V_Q9%J5Bqm(f');
define('NONCE_SALT',       'B>bL#Nj0bZT*%u4NOZ&5JfkWo]wLZ);{:qJ~}lc$q+.p]f[F-U+}D7DerjtBQ[WT');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_tl_2k16_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');