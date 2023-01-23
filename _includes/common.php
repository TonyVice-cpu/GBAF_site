<?php

/**
 * Fichier du COMMON.
 * Chargé au départ de chaque pages.
 * Charge le fichier des REGEX,
 * le fichier des fonctions appartenant aux sessions,
 * le fichier des  fonctions utilitaires,
 * le fichier des fonctions ayant rapport avec l'utilisation de la base de données.
 * 
 * (PHP 4, PHP 5, PHP 7, PHP 8)
 * REQUIRE est identique à INCLUDE mis à part le fait que lorsqu'une erreur survient,
 * il produit également une erreur fatale de niveau E_COMPILE_ERROR.
 * En d'autres termes, il stoppera le script
 * alors que include n'émettra qu'une alerte de niveau E_WARNING, ce qui permet au script de continuer.
 * REQUIRE_ONCE est identique à REQUIRE mis à part que PHP vérifie si le fichier a déjà été inclus, et si c'est le cas, ne l'inclut pas une deuxième fois.
 */

require_once('config.php');
require_once('connect/session.php');
require_once('utils.php');
require_once('functions.php');
