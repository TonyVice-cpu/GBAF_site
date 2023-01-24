<?php

/**
 * Fonctions ayant rapport avec les votes (vote)
 * Chargé à partir du COMMON.
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
