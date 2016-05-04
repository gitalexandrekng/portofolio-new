<?php
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
define('DB_NAME', 'portofoliov2');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'p{:yA27mX|BQ_87>{4fCGxgm+]Ode`I2{M%|aEC9DQ/KB7!)>i-@/R~w~%6+H1_%');
define('SECURE_AUTH_KEY',  '{P<S;No4,yS)dl(99~=j?;m@/Wsl f(3D>M8-vFf.H02<+uQwT0fR2-J `le@w^b');
define('LOGGED_IN_KEY',    ',QIE]TyF<k-iZmqn|w|ziz=(~4^S-fuD{mK/4/mcg5& AS(V`Ni9wlFJ_l$j-_BN');
define('NONCE_KEY',        '?J$#Id+nzB|u9<o.?es!AW#v +@[]~=8qH|yur6/9W%>+d{:?#?{N`W.#xuEr`bA');
define('AUTH_SALT',        '%sptqU1Uw3vf44k3-7NQRKKN6k0eqfKi6ob~,57-SK_IeY,-{;!>}/y,n?/rcp7v');
define('SECURE_AUTH_SALT', 'zx[#@E+/wa{kSi0hGLn>-0@=L,cjN8CoeCb|%p2o/<,|B2J.dGY]I|EVwwGO7<J)');
define('LOGGED_IN_SALT',   'v`eu>qACvHessLZV%ZG!_TeWNu)QLHv}d]Zq;~0bl8.HFy$Hz_fSyQg`f=C~/mR~');
define('NONCE_SALT',       'v0JGdA0{1TGzx}irz+_4O+AgC8P4r<[rdq@+]fD#[,@O{$]17Dp*e8x|+.-)>|*e');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
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