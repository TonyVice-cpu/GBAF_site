<?php
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
}
header('Location: ../home.php');
