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

/**
 * Fonctions ayant rapport avec les comptes utilisateurs (account)
 */

/**
 * Fonction qui vérifie si les parametres demandées existe en base
 * 
 * @param string $user_name nom d'utilisateur.
 * @param string $password mot de passe de l'utilisateur.
 * @return false|array Données de l'utilisateur ou faux
 */
function verify_login($user_name, $password)
{
  global $bdd;
  try {
    $sth = $bdd->prepare(
      "SELECT * FROM account WHERE user_name = :user_name"
    );
    $sth->execute([
      'user_name' => $user_name
    ]);
    $account = $sth->fetch();
  } catch (PDOException $e) {
    return false;
  }
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
 * Fonction qui récupère les données utilisateur à partir de son id
 * 
 * @param string $user_id id du compte.
 * @return array|false Données du compte ou faux
 */
function get_account($user_id)
{
  global $bdd;
  try {
    $sth = $bdd->prepare(
      "SELECT * FROM account WHERE user_id = :user_id"
    );
    $sth->execute([
      'user_id' => $user_id
    ]);
    $account = $sth->fetch();
  } catch (PDOException $e) {
    return false;
  }
  return $account;
} 

/**
 * Fonctions de création de compte
 * 
 * @param string $first_name Prénom de l'utilisateur
 * @param string $last_name Nom de l'utilisateur
 * @param string $user_name Pseudonyme de l'utilisateur
 * @param string $password Mot de passe de l'utilisateur
 * @param string $question Question secrète de l'utilisateur
 * @param string $answer Réponse à la question secrète
 * @return array|false Données de l'utilisateur ou faux.
 */
function create_account($first_name, $last_name, $user_name, $password, $question, $answer)
{
  global $bdd;
  $hash = password_hash($password, PASSWORD_DEFAULT);
  if (!$hash) return false;
  try {
    $sth = $bdd->prepare(
      "INSERT INTO account
      (
        first_name,
        last_name,
        user_name,
        `password`,
        question,
        answer
      )
    VALUES
      (
        :first_name,
        :last_name,
        :user_name,
        :password,
        :question,
        :answer
      )"
    );
    $sth->execute([
      'first_name' => $first_name,
      'last_name' => $last_name,
      'user_name' => $user_name,
      'password' => $hash,
      'question' => $question,
      'answer' => $answer,
    ]);
  } catch (PDOException $e) {
    return false;
  }
  return [
    'user_id' => $bdd->lastInsertId(),
    'last_name' => $last_name,
    'first_name' => $first_name
  ];
}

/**
 * Fonction de modification des paramètres d'un compte
 * 
 * @param string $user_id L'identifiant de l'utilisateur à modifier
 * @param string $first_name Prénom de l'utilisateur
 * @param string $last_name Nom de l'utilisateur
 * @param string $user_name Pseudonyme de l'utilisateur
 * @param string $password Mot de passe de l'utilisateur (chaine vide : ne pas le modifier)
 * @param string $question Question secrète de l'utilisateur
 * @param string $answer Réponse à la question secrète
 * @return array|false Données de l'utilisateur ou faux.
 */
function update_account($user_id, $first_name, $last_name, $user_name, $password, $question, $answer)
{
  global $bdd;
  try {
    // On initialise le tableau des données utilisateurs
    $account = [
      'user_id' => $user_id,
      'first_name' => $first_name,
      'last_name' => $last_name,
      'user_name' => $user_name,
      'question' => $question,
      'answer' => $answer,
    ];
    // Chaine vide par défaut
    $set_password = "";
    // Si le mot de passe n'est pas vide
    if(!empty($password)) {
      // On redéfinit la valeur du champ password
      $set_password = "password = :password,";
      // On hache le mot de passe
      $hash = password_hash($password, PASSWORD_DEFAULT);
      // On l'insère dans le tableau de données
      $account['password'] = $hash;
    }

    $sth = $bdd->prepare(
      "UPDATE account
      SET
        first_name = :first_name,
        last_name = :last_name,
        user_name = :user_name,
        $set_password
        question = :question,
        answer = :answer
      WHERE user_id = :user_id
      "
    );
    $sth->execute($account);
  } catch (PDOException $e) {
    return false;
  }
  return [
    'user_id' => $user_id,
    'last_name' => $last_name,
    'first_name' => $first_name
  ];
}

/**
 * Fonctions ayant rapport avec les commentaires (post)
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

/**
 * Fonctions ayant rapport avec les votes (vote)
 */

/**
 * Fonction qui ajoute ou supprime un avis :
 * - Si l'avis existe et sa valeur est identique : on le supprime
 * - Si l'avis existe et sa valeur est différente : on le met à jour
 * - Si l'avis n'existe pas : on l'ajoute
 * 
 * @param string $user_id id de l'utilisateur qui donne son avis
 * @param string $actor_id id du partenaire sur lequel on donne un avis
 * @param string $vote 1 si like, 0 si dislike
 * @return boolean Vrai : OK, faux : une requête a échouée
 */
function like_dislike($user_id, $actor_id, $vote)
{
  global $bdd;
  try {
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
    return true;
  } catch (PDOException $e) {
    return false;
  }
}

/**
 * Fonction qui compte le nombre de votes :
 * On récupère la liste des votes en fonction de l'id d'un partenaire (actor)
 * Puis on agrege les résultats :
 * - likes : la somme de tous les votes ayant pour valeur 1
 * - disklikes : la somme de tous les votes ayant pour valeur 0
 * - user_vote : le vote de l'utilisateur fourni en $user_id, NULL si celui-ci n'a pas voté
 *  (en commentaire SQL, une variante avec une sous-requête)
 * 
 * @param string $user_id id d'un utilisateur
 * @param string $actor_id id du partenaire sur lequel on veut récupérer les avis
 * @return array|false ["likes", "dislikes", "user_vote"] ou faux
 */
function count_votes($user_id, $actor_id)
{
  global $bdd;
  try {
    $sth = $bdd->prepare(
      "SELECT
      SUM(CASE WHEN vote = 1 THEN 1 ELSE 0 END) `likes`,
      SUM(CASE WHEN vote = 0 THEN 1 ELSE 0 END) `dislikes`,
      -- (SELECT vote FROM vote WHERE user_id = :user_id AND actor_id = :actor_id) `user_vote`
      MAX(CASE WHEN user_id = :user_id THEN vote ELSE NULL END) `user_vote`
    FROM vote
    WHERE actor_id = :actor_id"
    );
    $sth->execute([
      'user_id' => $user_id,
      'actor_id' => $actor_id,
    ]);
    $votes = $sth->fetch();
  } catch (PDOException $e) {
    return false;
  }
  return $votes;
}
