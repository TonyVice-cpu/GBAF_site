<?php
/**
 * Action qui permet d'ajouter un commentaire
 * L'utilisateur doit etre connecté
 * Redigige sur le partenaire associé
 */
include('../_includes/common.php');
protected_session();
$success = add_comment($_SESSION['account']['user_id'], $_POST['actor_id'], $_POST['post'] );
if($success) {
  $_SESSION['alert'] = [
    'type' => 'dark',
    'message' => 'Votre commentaire a bien été ajouté.'
  ];
} else {
  $_SESSION['alert'] = [
    'type' => 'danger',
    'message' => 'Une erreur s\'est produite.'
  ];
}
header("Location: ../partner.php?id={$_POST['actor_id']}");
