<?php

/**
 * Connexion PDO
 */
$dsn = 'mysql:dbname=gbaf;host=localhost';
$user = 'root';
$pass = '';

try {
  $bdd = new PDO($dsn, $user, $pass);
  // On lui demande de configurer PDO::ATTR_ERRMODE qui va nous sortir un rapport ...
  // ... d’erreurs et que l’on souhaite qu’il émette une exception grâce à PDO::ERRMODE_EXCEPTION.
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // On récupère seulement le tableau associatif.
  $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  // Cette ligne permet la compatibilité ascendante php 8.1+
  $bdd->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, true);
  // Cette ligne a pour but de définir le type d'encodage à effectuer sur nos requêtes.
  $bdd->exec('SET NAMES utf8');
  // Ici la connexion est effectuée.
} catch (PDOException $e) {
  // En cas d'échec de connexion, du par exemple à la non présence d'une base de données, PDO nous retounera alors un message d'erreur.
  echo 'Échec lors de la connexion : ' . $e->getMessage();
  die;
}