<?php

/**
 * Fonctions ayant rapport avec les partenaires (actor)
 * Chargé à partir du COMMON.
 */

/**
 * Fonction qui récupère la liste des acteurs
 * 
 * @return array|false Liste de acteurs ou faux
 */
function get_actors()
{
  global $bdd;
  try {
    $sth = $bdd->query(
      "SELECT * FROM actor"
    );
    $actors = $sth->fetchAll();
  } catch (PDOException $e) {
    return false;
  }
  return $actors;
}

/**
 * Fonction qui récupère un acteur à partir de son id
 * 
 * @param string $actor_id id de l'acteur.
 * @return array|false Données d'un acteur ou faux
 */
function get_actor($actor_id)
{
  global $bdd;
  try {
    $sth = $bdd->prepare(
      "SELECT * FROM actor WHERE actor_id = :actor_id"
    );
    $sth->execute([
      'actor_id' => $actor_id
    ]);
    $actor = $sth->fetch();
  } catch (PDOException $e) {
    return false;
  }
  return $actor;
}
