<?php

/**
 * Fichier des REGEX.
 * Chargé à partir du COMMON.
 * 
 * En informatique, une expression régulière est une chaîne de caractères
 * qui décrit, selon une syntaxe précise, un ensemble de chaînes de caractères possibles.
 */

/**
 * Minimum 8 caractères,au moins une majuscule, au moins une minuscule et au moins un chiffre.
 */
$regex_password = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$";
