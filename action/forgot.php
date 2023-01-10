<?php
include('../_includes/common.php');

// ETAPE 1 : Si l'utilisateur a saisi son nom d'utilisateur
if (!empty($_POST['user_name'])) {
  // On récupère la question secrète et l'id associés au compte ou faux
  $question = get_question($_POST['user_name']);
  // Si correspondance
  if ($question) {
    // On définit des données de session [user_id, question]
    $_SESSION['question'] = $question;
  }

// ETAPE 2 : Si l'utilisateur fourni la réponse à sa question secrète 
} else if (!empty($_POST['answer'])) {
  // On vérifie qu'il s'agit bien de la bonne réponse
  $valid = is_valid_answer($_SESSION['question']['user_id'], $_POST['answer']);
  // On stocke le statut dans une variable de session
  $_SESSION['is_valid_answer'] = $valid;

// ETAPE 3 : Si l'utilisateur fourni son nouveau mot de passe
} else if(!empty($_POST['password'])) {
  // On met à jour son mot de passe
  $success = reset_password($_SESSION['question']['user_id'], $_POST['password']);
  // Si réussi
  if($success) {
    // On efface les données de session de réinitialisation
    unset($_SESSION['question']);
    unset($_SESSION['is_valid_answer']);
    // Et on redigire sur la page de login
    header('Location: ../index.php');
    die;
  }
}
// On revient sur le formulaire de récupération
header('Location: ../forgot.php');
