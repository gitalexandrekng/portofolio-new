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
define('DB_NAME', 'portofolio');

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
define('AUTH_KEY',         '{4L?XJukSo*b(b<;vbQP@~3AT@xGu-JG8&VdLb<(h?$.8r%(W2MZMx)Nw:;Af72(');
define('SECURE_AUTH_KEY',  'Yhzje*KtRj{+M75$@;dL83}+u|74M {3Zxr*0c&Suuge#/.[6*t-6Myy5sDaGGht');
define('LOGGED_IN_KEY',    '<h0u]KJpN>t`]m0xTqo;jkpXG]*o~}TO}l5aR !r$wpvx_l[)n<3qzstLBoVK<~A');
define('NONCE_KEY',        '{^sw+^&Eb+NXE6=xrC3[kJX><[YGQX{kT,,-E?5_X(8nve$aF#|D94b]adT]|}|M');
define('AUTH_SALT',        'V& o&5`UcDIl<$_!tyDBWm/2bp;3;y2t3v*D3j7H2x*k*5ne,7j!HccUSh&LjKa3');
define('SECURE_AUTH_SALT', 'uW~.yH]Nu5|}CwHiO8-a5O.@Lh]2lY1,~XWll]F(.,R}86s+OE>Eh|j||)-R!YL8');
define('LOGGED_IN_SALT',   '/W?Z7`^hs7B9p!y.{HT5<Jl;w*raJ=$[T&UHkWfaoIDVcN*;]]=>`0=9(s9/$_z,');
define('NONCE_SALT',       'P:Jrk7eC@-8;lg.Q~&b9KzKS5}B 5doI6`p9#7M(bJfq@hsiZC^o;4539k~P^_=~');
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
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');