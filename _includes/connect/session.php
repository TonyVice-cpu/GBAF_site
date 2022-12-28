<?php

/**
 * Fonctions appartenant aux sessions
 */

/**
 * Initialise la session
 */
session_start();

/**
 * Vérifie la session utilisateur
 * @return boolean 
 */
function verif_session()
{
  return isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'];
}

/**
 * Vérifie si l'utilisateur est authentifié.
 * Redirige l'utilisateur sur la page de login le cas échéant. 
 */
function protected_session()
{
  if (!verif_session()) {
    header('Location: ../index.php');
    die;
  }
}
