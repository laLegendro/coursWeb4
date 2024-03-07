<?php

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'Bd-4w4');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5UikEI-svjk,1vRI{{K<|q;$[P/%oHb<u_:t^%up|#/O0=q9&6_c|h]nO2]ayNPy');
define('SECURE_AUTH_KEY',  'Uzl12CBizBNy{&,bnw@F3VWpGc%`sFg$RJ9$=}xo.+`5O@,(lgLx8C4%&h/.f<Yi');
define('LOGGED_IN_KEY',    'l]wK:(FQk-pPir#HW12~fl!04<{G?Vi:o R  Th,C>+*AxU/H;t1UsvtxhZA`sT[');
define('NONCE_KEY',        'fg5>vQO6a;>_C~^h&4:&t4g%%B8K<,rk6J/c@a0)?Evv>UnYyZ[bHeDP+fC`aQv ');
define('AUTH_SALT',        'GBYTR]1al!9uMWS?qfC:ih=6FHn`C7a1bh2fx!Q,Vp3I:<|WtW=9Vc]w}+$;[*$;');
define('SECURE_AUTH_SALT', 'sf(,[OBnxTtV.4Z5CS.o&JjOKeCQKb:Okz)ZV$_$FqB0VI+j7ys.OXP0)pFJ!3a!');
define('LOGGED_IN_SALT',   'TrE}$~P4#X+;|HK^Ar]MCK%PJ,vEEAN>Q4Pq_X^s:x $3F1Q/v1t8;b;BA`9>|FW');
define('NONCE_SALT',       '8|&gqX9(3u8z$X6.LvTFN0/V`vAU&q3vj;(r|t&s4lNg9kG^Vu0W]57_t7&]PlMQ');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define('WP_POST_REVISIONS', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');



/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
