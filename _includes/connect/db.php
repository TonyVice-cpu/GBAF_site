<?php

/**
 * Fichier de connexion PDO.
 * Chargé à partir du fichier de fonctions ayant rapport avec l'utilisation de la base de données (functions.php)
 * 
 * Les connexions sont établies en créant des instances de la classe de base de PDO.
 * Peu importe quel pilote vous voulez utiliser ; vous utilisez toujours le nom de la classe PDO.
 * Le constructeur accepte des paramètres pour spécifier la source de la base de données (connue en tant que DSN) et optionnellement,
 * le nom d'utilisateur et le mot de passe (s'il y en a un).
 */

/**
 * Connexion à MySQL
 * Adresse de la base de données
 * Nom d'utilisateur MySQL
 * Mdp MySQL
 */
$dsn = 'mysql:dbname=gbaf;host=localhost';
$user = 'root';
$pass = '';

try {
  $bdd = new PDO($dsn, $user, $pass);
  /**
   *On lui demande de configurer PDO::ATTR_ERRMODE qui va nous sortir un rapportd’erreurs
   *et que l’on souhaite qu’il émette une exception grâce à PDO::ERRMODE_EXCEPTION.
   */
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  /** 
   * On récupère seulement le tableau associatif.
   */
  $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  /**
   * Cette ligne permet la compatibilité ascendante php 8.1+
   */
  $bdd->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, true);
  /** 
   * Cette ligne a pour but de définir le type d'encodage à effectuer sur nos requêtes.
   */
  $bdd->exec('SET NAMES utf8');
} catch (PDOException $e) {
  /** 
   * En cas d'échec de connexion, du par exemple à la non présence d'une base de données, PDO nous retounera alors un message d'erreur.
   */
  echo 'Échec lors de la connexion : ' . $e->getMessage();
  die;
}
