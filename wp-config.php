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
define('AUTH_KEY',         'M;?Y/ax]25!Gi=K%S[d*({vR>?m_qa8,Rv!%+:D7_:1}ZLi|1{nxRT*hqd%FqER;');
define('SECURE_AUTH_KEY',  'PY6-xQveIT4ySMHyCCTM2R!][I!LR5t7=y&xMQxj(:O{yq@#b,;?_ -e#[_2yrVs');
define('LOGGED_IN_KEY',    '9gu7/v^vlnvI5NofmeuovwF%q|:SLV&:p1gj:>!ATBEW#[p$RtGGXdx(pLA(wdFO');
define('NONCE_KEY',        'd2YA/^+Nphm4ZIZI4W6j}xlN87Q$NtB]1[91LHhivA^R9KSBw)v<r[;K[sWg_,ov');
define('AUTH_SALT',        '5}YFU#bAu,bTHWnWM4z AL33x9*~Le`4?]_yE2>,#77c6bB~Ms:jZ8d!B%q_j-v?');
define('SECURE_AUTH_SALT', '>ItF4yYUNTSwX9<t$|.piX*<xv|FP!}$?^g_OU.~;v*WT/OmvkKlKhZq.@vDBNOC');
define('LOGGED_IN_SALT',   '!44#vn^)j}{rvZ[os4P6.f:tglL%CS/*Fg9n?_vAk?BLL$O}d]t0IE{ F^t~<v9f');
define('NONCE_SALT',       '|usw P}fgoJPI YF[L<oXRgVoA_^Duc)W,{)&v_X<e@*-Rm0B uU?-*+:y%:L ph');
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