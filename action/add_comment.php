<?php
include('../_includes/common.php');
protected_session();
add_comment($_SESSION['account']['user_id'], $_POST['actor_id'], $_POST['post'] );
header("Location: ../partner.php?id={$_POST['actor_id']}");
