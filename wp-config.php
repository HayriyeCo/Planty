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
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'fI(ew`x/W|Un0No)y6ZOh?9EedJ)7!av=?Kxk7UWmTd>U7(dsX6#ArQ?!=;1IWHo' );
define( 'SECURE_AUTH_KEY',  'Jf`ObO_*FSG4=(>AKrKlC$z]O7oagP14b)sNdO^5F*(X5Ig~d;N&N!Xxp}7.Z)4&' );
define( 'LOGGED_IN_KEY',    '}hd:|v:C&uJ}yyFtFb b/R.}!7(o&O(pRR ST r80`4`x1TbnN8Tw|,OTt ^1i}q' );
define( 'NONCE_KEY',        '*K-OHB4~*7LIgFRrxmjRdG4>~6pa?iZR<b-y+P-Hx@*L(rB`-?DH8Lgb<k~~&(yd' );
define( 'AUTH_SALT',        'u#&>uk>{MGhGRLP2mQ{osA86BWbTTh{~dR-eT1TlrV #QG+GeH-RF%UU+ZedClZ_' );
define( 'SECURE_AUTH_SALT', '@Ceh$Le/n[#`O-@4QEnR%UEjpS>vyg99wMKRxbXunR],Q0/;ly*(t~_q^ziT]E.w' );
define( 'LOGGED_IN_SALT',   '4>0krLlzNJf_(=Y/DxyA@bJ*XM3s4E9D?yMD=`sp~t*Lk&f?.Nbei;9rb|<fagWu' );
define( 'NONCE_SALT',       '6.d9^-0,gPX3mdv*/[utCgUDdB4kW{}~o6oaNB> ufAC;mI)#(ypq#F8USL=H7~6' );
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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
