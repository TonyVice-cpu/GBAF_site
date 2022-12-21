<?php 

/**
 * On récupère la liste des acteurs
 * @return array
 */
function get_actors() {
  global $bdd;
  $sth = $bdd->query(
    "SELECT * FROM actor"
  );
  $actors = $sth->fetchAll();
  return $actors;
}

/**
 * Tronque la chaîne de caractères donnée à la longueur spécifiée.
 *
 * @param string $str La chaîne de caractères d'entrée.
 * @param int $width Le nombre de caractères auxquels la chaîne sera tronquée.
 * @return string
 */
function truncate($str, $width) {
  return strtok(wordwrap($str, $width, "...\n"), "\n");
}

/**
 * On récupère un acteur à partir de son id
 * @param string $id id de l'acteur.
 * @return array
 */
function get_actor($id) {
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
 * On vérifie si les parametres demandées existe en base.
 * @param string $user_name nom d'utilisateur.
 * @param string $password mot de passe de l'utilisateur.
 * @return false|array faux ou données de l'utilisateur.
 */
function verify_login($user_name, $password) {
  global $bdd;
  $sth = $bdd->prepare(
    "SELECT * FROM account WHERE user_name = :user_name"
  );
  $sth->execute([
    'user_name' => $user_name
  ]);
  $account = $sth->fetch();
  if(!$account) return false;
  $is_valid_password = password_verify($password, $account['password']);
  if(!$is_valid_password) return false;
  return [
    'user_id' => $account['user_id'],
    'last_name' => $account['last_name'],
    'first_name' => $account['first_name']
  ];
}