<?php
include('../_includes/common.php');
$account = verify_login($_POST['user_name'], $_POST['password']);
if($account) {
  $_SESSION['is_logged_in'] = true;
  $_SESSION['account'] = $account;
} else {
  $_SESSION['is_logged_in'] = false;
}
header('Location: ../home.php');