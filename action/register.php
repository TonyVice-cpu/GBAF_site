<?php
include('../_includes/common.php');
$account = create_account(
  $_POST['first_name'],
  $_POST['last_name'],
  $_POST['user_name'],
  $_POST['password'],
  $_POST['question'],
  $_POST['answer']
);
if ($account) {
  $_SESSION['is_logged_in'] = true;
  $_SESSION['account'] = $account;
  $_SESSION['alert'] = [
    'type' => 'dark',
    'message' => 'Votre compte utilisateur a bien été créé.'
  ];
} else {
  $_SESSION['is_logged_in'] = false;
  $_SESSION['alert'] = [
    'type' => 'danger',
    'message' => 'Une erreur s\'est produite.'
  ];
}
header('Location: ../home.php');
