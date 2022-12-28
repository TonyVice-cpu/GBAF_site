<?php
include('../_includes/common.php');
protected_session();
like_dislike($_SESSION['account']['user_id'], $_POST['actor_id'], $_POST['vote'] );
header("Location: ../partner.php?id={$_POST['actor_id']}");