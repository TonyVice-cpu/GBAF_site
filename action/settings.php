<?php
/**
 * Action qui permet à l'utilisateur de modifier son profil
 * L'utilisateur doit etre connecté
 * Redigire sur la page d'accueil
 */
include('../_includes/common.php');
protected_session();
$account = update_account(
  /**
   * pas la valeur du post sinon faille,
   * peut altérer le compte de n'importe qui
   * donc prendre la valeur de la session
   * comme ca on peut altérer seulement la session en cour.
   */
  $_SESSION['account']['user_id'], 
  $_POST['first_name'],
  $_POST['last_name'],
  $_POST['user_name'],
  $_POST['password'],
  $_POST['question'],
  $_POST['answer']
);
if ($account) {
  $_SESSION['account'] = $account;
  $_SESSION['alert'] = [
    'type' => 'dark',
    'message' => 'Votre compte utilisateur a bien été modifié.'
  ];
}else{
  $_SESSION['alert'] = [
    'type' => 'danger',
    'message' => 'Une erreur s\'est produite.'
  ];
}
header('Location: ../home.php');
