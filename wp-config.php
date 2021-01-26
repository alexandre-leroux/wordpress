<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'YL$W.90Q4)Jnd?RZerT^P7V,]nM?>!_q!_ob?<CY.3qR$`|yWNKcLqkz#pI0I(4J' );
define( 'SECURE_AUTH_KEY',  'ZKNu=gsKeAG^GNZ8/B=L*#3kZz&=KF)O|UH}s[#J9dfG7A^5v2`e*bI?a ERICj%' );
define( 'LOGGED_IN_KEY',    'iza=%6:rwHDEC497bN*8v+%d.EW,Y9I*_{J;]V-!NYGDMK)MqH-T uA*EG9Ux~z_' );
define( 'NONCE_KEY',        '{>L7!_^?;F2{Qa`A%ho;dCLK|y=#.~XQrYGSmJF(7iZf!S?~LQdZMt0c%?]IW-kT' );
define( 'AUTH_SALT',        ';)+%Pw(VMi:!LkYk1r}|+%^$E2e`5$;z.c{#X0g*{J[iZjaOawu+OWDJDOjJ4M>i' );
define( 'SECURE_AUTH_SALT', '*5n80asoW#+og$Rzib_w1[,)1%l@QWbgR-1UDM<f4hy|r%*=B34^K>_2nnCZya|j' );
define( 'LOGGED_IN_SALT',   'zy)NC-%r&?a$Joulg<nj?%E1!Cy2]z1(ZG||#:0`&oO2#r9T[Td-#4}C~$HT(k^/' );
define( 'NONCE_SALT',       'Q-@nxADZuAf#;lT.fa|nsj7_A{Sc5eFoaH7y~fP@^T3%}Wk<$jpqTqC%yb$c+D_G' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
