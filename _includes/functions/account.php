<?php

/**
 * Fonctions ayant rapport avec les comptes utilisateurs (account)
 * Chargé à partir du COMMON.
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
 * Fonction qui récupère la question et l'id d'un utilisateur à partir de son nom d'utilisateur
 * 
 * @param string $user_name nom d'utilisateur du compte.
 * @return array|false Données du compte ou faux
 */
function get_question($user_name)
{
  global $bdd;
  try {
    $sth = $bdd->prepare(
      "SELECT question, user_id FROM account WHERE user_name = :user_name"
    );
    $sth->execute([
      'user_name' => $user_name
    ]);
    $question = $sth->fetch();
  } catch (PDOException $e) {
    return false;
  }
  return $question;
}

/**
 * Vérifie la réponse à la question secrète d'un utilisateur par rapport à son id
 * 
 * @param string $user_id id de d'utilisateur du compte.
 * @param string $answer Réponse à la question secrète de l'utilisateur
 * @return boolean Bonne réponse ou non
 */
function is_valid_answer($user_id, $answer)
{
  global $bdd;
  try {
    $sth = $bdd->prepare(
      "SELECT 1 FROM account WHERE user_id = :user_id AND answer = :answer"
    );
    $sth->execute([
      'user_id' => $user_id,
      'answer' => $answer
    ]);
    $row = $sth->fetch();
  } catch (PDOException $e) {
    return false;
  }
  return ($row) ? true : false;
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
    if (!empty($password)) {
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
 * Fonction de modification du mot de passe d'un compte
 * 
 * @param string $user_id L'identifiant de l'utilisateur à modifier
 * @param string $password Mot de passe de l'utilisateur
 * @return boolean Réussi ?
 */
function reset_password($user_id, $password)
{
  global $bdd;
  try {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sth = $bdd->prepare(
      "UPDATE account
      SET
        password = :password
      WHERE user_id = :user_id
      "
    );
    $sth->execute([
      'user_id' => $user_id,
      'password' => $hash,
    ]);
  } catch (PDOException $e) {
    return false;
  }
  return true;
}
