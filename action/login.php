<?php
include('../_includes/common.php');
$is_logged_in = verify_login($_POST['user_name'], $_POST['password']);
if($is_logged_in) {
  $_SESSION['is_logged_in'] = true;
  $_SESSION['account'] = $is_logged_in;
} else {
  $_SESSION['is_logged_in'] = false;
}
header('Location: ../home.php');