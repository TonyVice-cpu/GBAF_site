<?php
include('../_includes/common.php');
protected_session();
$success = like_dislike($_SESSION['account']['user_id'], $_POST['actor_id'], $_POST['vote'] );
if($success) {
  $_SESSION['alert'] = [
    'type' => 'dark',
    'message' => 'Votre vote a bien été pris en compte.'
  ];
} else {
  $_SESSION['alert'] = [
    'type' => 'danger',
    'message' => 'Une erreur s\'est produite.'
  ];
}
header("Location: ../partner.php?id={$_POST['actor_id']}");