<?php

/**
 * Fonctions ayant rapport avec les commentaires (post)
 * Chargé à partir du COMMON.
 */

/**
 * Fonction qui récupère les commentaires en rapport avec l'id d'un partenaire (first_name, last_name de la table account)
 * En faisant une jonction avec les informations utilisateurs (post, date_add de la table post)
 * En ordre par date de publication decroissante
 * 
 * @param string $id id de l'acteur.
 * @return array|false Liste des commentaires d'un acteur ou faux
 */
function get_comments($id)
{
  global $bdd;
  try {
    $sth = $bdd->prepare(
      "SELECT 
      a.first_name,
      a.last_name,
      p.post,
      p.date_add
    FROM post p 
    JOIN account a
    ON p.user_id = a.user_id
    WHERE actor_id = :id
    ORDER BY p.date_add DESC"
    );
    $sth->execute([
      'id' => $id
    ]);
    $comments = $sth->fetchAll();
  } catch (PDOException $e) {
    return false;
  }
  return $comments;
}

/**
 * Fonction qui crée un commentaire
 * 
 * @param string $user_id id de l'utilisateur qui donne son avis
 * @param string $actor_id id du partenaire sur lequel on donne un avis
 * @param string $post commentaire posté
 * @return boolean Vrai : OK, faux : la requête a échouée
 */
function add_comment($user_id, $actor_id, $post)
{
  global $bdd;
  try {
    $sth = $bdd->prepare(
      "INSERT INTO post 
    (user_id, actor_id, post)
    VALUES
    (:user_id, :actor_id, :post)"
    );

    $sth->execute([
      'user_id' => $user_id,
      'actor_id' => $actor_id,
      'post' => $post
    ]);
    return true;
  } catch (PDOException $e) {
    return false;
  }
}
