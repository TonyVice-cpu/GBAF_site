<?php

/**
 * Fichier du COMMON.
 * Chargé une fois au départ de chaque pages (index.php, register.php, forgot.php home.php, partner.php, comment.php, settings.php, contact.php et notice.php)
 * et une fois au départ de chaques actions (login.php, register.php, forgot.php, add_comment.php, vote.php, settings.php, logout.php).
 * Charge le fichier des variables,
 * le fichier des fonctions appartenant aux sessions,
 * le fichier des  fonctions utilitaires,
 * le fichier de connexion PDO,
 * les fichiers des fonctions ayant rapport avec l'utilisation de la base de données.
 * 
 * (PHP 4, PHP 5, PHP 7, PHP 8)
 * REQUIRE est identique à INCLUDE mis à part le fait que lorsqu'une erreur survient,
 * il produit également une erreur fatale de niveau E_COMPILE_ERROR.
 * En d'autres termes, il stoppera le script
 * alors que include n'émettra qu'une alerte de niveau E_WARNING, ce qui permet au script de continuer.
 * REQUIRE_ONCE est identique à REQUIRE mis à part que PHP vérifie si le fichier a déjà été inclus, et si c'est le cas, ne l'inclut pas une deuxième fois.
 */


/**
 * Variables
 */
require_once('config.php');

/**
 * Contrôle de session PHP
 */
require_once('connect/session.php');

/**
 * Fonctions utilitaires
 */
require_once('utils.php');

/**
 * Connexion à la bdd
 */
require_once('connect/db.php');

/**
 * Fichier des fonctions ayant rapport avec l'utilisation de la base de données.
 */
require_once('functions/actor.php');
require_once('functions/account.php');
require_once('functions/post.php');
require_once('functions/vote.php');
