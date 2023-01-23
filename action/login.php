<?php
include('../_includes/common.php');
$account = verify_login($_POST['user_name'], $_POST['password']);
if ($account) {
  $_SESSION['is_logged_in'] = true;
  $_SESSION['account'] = $account;
  $_SESSION['alert'] = [
    'type' => 'dark',
    'message' => 'Vous êtes connecté.'
  ];
} else {
  $_SESSION['is_logged_in'] = false;
  $_SESSION['alert'] = [
    'type' => 'danger',
    'message' => 'Veuillez verifier votre identifiant ou votre mot de passe SVP.'
  ];
}
header('Location: ../home.php');
