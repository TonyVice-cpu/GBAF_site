<?php if (isset($_SESSION['alert'])) : ?>
  <div class="alert alert-<?= $_SESSION['alert']['type'] ?> d-flex flex-column flex-md-row align-items-center mx-auto mt-3" role="alert">
    <div><?= $_SESSION['alert']['message'] ?></div>
  </div>
<?php endif;
unset($_SESSION['alert']);
