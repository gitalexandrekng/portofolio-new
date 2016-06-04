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
define('AUTH_KEY',         '_4u.sdi;jAzO4SLXiE}Yg m0=LL[54Adz3)93lFwh?X+l#vnQ@Y75rb5(0b6A4$<');
define('SECURE_AUTH_KEY',  'rzap+6<i_:+D]ve0Ssva:~ZaFV>o#`ySa>]$.P2x;b@q^x#6YXR3PCVs[<u7VnhB');
define('LOGGED_IN_KEY',    '($r2ZqkN~=a:*_L_Gx{U1vARr?imq&@#ES,6*2@kV8?{R(b,cTu2+S6THr6PF$CR');
define('NONCE_KEY',        ',9U@RdAbnfWafW.QII&3p)92ZK)2J%1`D CfQ/bO{C#H,[I^!R;RQ!NqSNkxD.)Q');
define('AUTH_SALT',        'E=|BB#?MMq0s/1oE&#xO2OCO n?}RHD6JxnV0yQd;HJAmOFIYrG)/o;DT 2:uo%C');
define('SECURE_AUTH_SALT', 'LPy2kqYsjDA>T3}zgY7h|<Y@B]Jr}2dno>)]~2bwI#wrr>!IN^n/tnsr+]3+NeVS');
define('LOGGED_IN_SALT',   'GCA,+;*V2%kEy_p~2I,P] {B]m^>Ozcne]!}O:VUcGLjY9;nAxfI^MIC<K|VygvD');
define('NONCE_SALT',       'fc~#L+Y$rM/5)RrNeFNTSzm=4;P)vYvNvg2rHe{osy*M~(xV(#,]y#cWb{%O?^Tz');
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