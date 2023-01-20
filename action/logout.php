<?php
include('../_includes/common.php');
session_unset();
$_SESSION['alert'] = [
  'type' => 'dark',
  'message' => 'Vous êtes bien déconnecté.'
];
header('Location: ../index.php');