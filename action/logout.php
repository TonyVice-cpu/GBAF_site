<?php
/**
 * Action qui permet à l'utilisateur de se déconnecter
 * Redigige sur la page de login
 */
include('../_includes/common.php');
session_unset();
$_SESSION['alert'] = [
  'type' => 'dark',
  'message' => 'Vous êtes déconnecté.'
];
header('Location: ../index.php');