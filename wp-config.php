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
define('DB_NAME', 'portfoliov2');

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
define('AUTH_KEY',         'tY@*>|*ImH>J423mCN[KIgq4EL=zN)XVROIl+tqoY$TvFZ<oiz8x[r~<!)1Zs,=m');
define('SECURE_AUTH_KEY',  'b$@G=x2_YWO<>3E#^ =JRH_;d%28eYyycxnOk^A6NAG;uH}>TMp:xwj<]knkF/n+');
define('LOGGED_IN_KEY',    '_b4{!5mRv`i^0@c#svhh`Z8npK^NPwGWrV8Sid1Y)&CHvj~srN97 _]p` Z6]w}D');
define('NONCE_KEY',        'Itkcg!P3A<l(_Xw#RWr@gFT*ZUOH3r1V9y#Q*fCzhWNtK?-k+8V{zX.k:Wj{)O`q');
define('AUTH_SALT',        'qV?wP%=<AY|uv}q6hx);Nl#{s:7}lIumN~t?<3b|AXVrp,@{4=7uV?6Q!fSmRUv/');
define('SECURE_AUTH_SALT', 'n4#_q;ac*1[b<!5]K0j.rbT;0=TDv50HBdz`a2aK%KHO[xOt[]myjCANomvv/}L9');
define('LOGGED_IN_SALT',   'jq<,tzp%_ER=|jYt$)vnEZ*,|W3h0%p9BZBvi.2/B].(8mly-6WrRvI.kbGrHy/F');
define('NONCE_SALT',       'd{D5CK.A&BSf,mYg6)M<7T3**?5p}DuD~2z{WIxtC#mdb)hpF{_Q![T7)f~*er6E');
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