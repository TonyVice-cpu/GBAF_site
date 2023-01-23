<?php

/**
 * Fichiers des fonctions utilitaires.
 * Chargé à partir du COMMON.
 */

/**
 * Affiche les données du dump formaté de la variable.
 * 
 * @param string $var La variable à afficher (dumper)
 */
function my_dump($var)
{
  echo '<pre>' . var_export($var, true) . '</pre>';
}

/**
 * Tronque la chaîne de caractères donnée à la longueur spécifiée.
 *
 * @param string $str La chaîne de caractères d'entrée.
 * @param int $width Le nombre de caractères auxquels la chaîne sera tronquée.
 * @return string
 */
function truncate($str, $width)
{
  return strtok(wordwrap(preg_replace('/\s\s+/', ' ', $str), $width, "…\n"), "\n");
}
