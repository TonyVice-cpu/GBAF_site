<?php

/**
 * Fonctions ayant rapport avec l'utilisation de la base de données.
 */

/**
 * Connexion à la bdd
 */
include('connect/db.php');

/**
 * Fonctions ayant rapport avec les partenaires (actor)
 */

/**
 * On récupère la liste des acteurs
 * @return array
 */
function get_actors()
{
  global $bdd;
  $sth = $bdd->query(
    "SELECT * FROM actor"
  );
  $actors = $sth->fetchAll();
  return $actors;
}

/**
 * On récupère un acteur à partir de son id
 * @param string $id id de l'acteur.
 * @return array
 */
function get_actor($id)
{
  global $bdd;
  $sth = $bdd->prepare(
    "SELECT * FROM actor WHERE actor_id = :id"
  );
  $sth->execute([
    'id' => $id
  ]);
  $actor = $sth->fetch();
  return $actor;
}

/**
 * Fonctions ayant rapport avec les utilisateurs (account)
 */

/**
 * On vérifie si les parametres demandées existe en base.
 * @param string $user_name nom d'utilisateur.
 * @param string $password mot de passe de l'utilisateur.
 * @return false|array faux ou données de l'utilisateur.
 */
function verify_login($user_name, $password)
{
  global $bdd;
  $sth = $bdd->prepare(
    "SELECT * FROM account WHERE user_name = :user_name"
  );
  $sth->execute([
    'user_name' => $user_name
  ]);
  $account = $sth->fetch();
  if (!$account) return false;
  $is_valid_password = password_verify($password, $account['password']);
  if (!$is_valid_password) return false;
  return [
    'user_id' => $account['user_id'],
    'last_name' => $account['last_name'],
    'first_name' => $account['first_name']
  ];
}

/**
 * Fonctions ayant rapport avec les commentaires (post)
 */

/**
 * On récupère les commentaires en rapport avec l'id d'un partenaire (first_name, last_name de la table account)
 * En faisant une jonction avec les informations utilisateurs (post, date_add de la table post)
 * En ordre par date de publication decroissante
 * @param string $id id de l'acteur.
 * @return array
 */
function get_comments($id)
{
  global $bdd;
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
  return $comments;
}

/**
 * Crée un commentaire
 * 
 * @param string $user_id id de l'utilisateur qui donne son avis
 * @param string $actor_id id du partenaire sur lequel on donne un avis
 * @param string $post commentaire posté
 */
function add_comment($user_id, $actor_id, $post)
{
  global $bdd;
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
}

/**
 * Fonctions ayant rapport avec les votes (vote)
 */

/**
 * Ajoute ou supprime un avis :
 * - Si l'avis existe et sa valeur est identique : on le supprime
 * - Si l'avis existe et sa valeur est différente : on le met à jour
 * - Si l'avis n'existe pas : on l'ajoute
 * 
 * @param string $user_id id de l'utilisateur qui donne son avis
 * @param string $actor_id id du partenaire sur lequel on donne un avis
 * @param string $vote 1 si like, 0 si dislike
 */
function like_dislike($user_id, $actor_id, $vote)
{
  global $bdd;
  // On récupère l'avis s'il existe
  $sth = $bdd->prepare(
    "SELECT * FROM vote WHERE user_id = :user_id AND actor_id = :actor_id"
  );
  $sth->execute([
    'user_id' => $user_id,
    'actor_id' => $actor_id,
  ]);
  $row = $sth->fetch();

  // Si l'avis existe...
  if ($row) {
    // ...et que sa valeur est identique, on le supprime
    if ($row['vote'] == $vote) {
      $sth = $bdd->prepare(
        "DELETE FROM vote WHERE user_id = :user_id AND actor_id = :actor_id"
      );
      $sth->execute([
        'user_id' => $user_id,
        'actor_id' => $actor_id,
      ]);
    } else {
      // Sinon on met à jour sa valeur
      $sth = $bdd->prepare(
        "UPDATE vote SET vote = :vote WHERE user_id = :user_id AND actor_id = :actor_id"
      );
      $sth->execute([
        'user_id' => $user_id,
        'actor_id' => $actor_id,
        'vote' => $vote,
      ]);
    }
  // Si l'avis n'existe pas, on l'ajoute
  } else {
    $sth = $bdd->prepare(
      "INSERT INTO vote (user_id, actor_id, vote) VALUES (:user_id, :actor_id, :vote)"
    );
    $sth->execute([
      'user_id' => $user_id,
      'actor_id' => $actor_id,
      'vote' => $vote,
    ]);
  }
}
