<?php
session_start();
if (!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']) {
  header('Location: index.php');
  die;
}
include('./_includes/connect/db.php');
include('./_includes/functions.php');
$actor = get_actor($_GET['id']);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./assets/img/fav_icon.PNG">
  <!-- CSS -->
  <!-- CSS Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <!-- Mon CSS -->
  <link rel="stylesheet" href="./assets/css/styles.css">
  <title>GBAF - Le Groupement Banque et Assurance Français - <?= htmlspecialchars($actor['actor_name']) ?></title>
</head>

<body>
  <!-- HEADER -->
  <!-- inclusion du header -->
  <?php include('./_includes/header.php'); ?>
  <!-- MAIN -->
  <main>
    <!-- SECTIONS -->
    <!-- SECTION PARTNER-PRESENTATION -->
    <section class="partner-presentation">
      <div><img src="./assets/img/<?= htmlspecialchars($actor['logo']) ?>" class="img-fluid rounded mt-5" alt="Logo <?= htmlspecialchars($actor['actor_name']) ?>"></div>
      <!-- SEPARATEUR -->
      <div class="separator rounded  bg-dark mt-5 mb-5"></div>
      <h2 class="fs-1"><?= htmlspecialchars($actor['actor_name']) ?></h2>
      <!-- SEPARATEUR - icons -->
      <div class="star-icon mt-5"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
      <!-- SEPARATEUR -->
      <div class="separator rounded  bg-dark mt-5 mb-5"></div>
      <p><?= nl2br(htmlspecialchars($actor['description'])) ?></p>
      <a class="mb-4" href="#">www.<?= htmlspecialchars($actor['actor_name']) ?>.fr</a>
    </section>
    <!-- SEPARATEUR -->
    <div class="separator rounded  bg-dark mt-5 mb-5"></div>
    <!-- SECTION PARTNER-COMMENTS -->
    <!-- inclusion des commentaires -->
    <?php include('./_includes/comments.php') ?>
    <!-- SEPARATEUR -->
    <div class="separator rounded  bg-dark mt-5 mb-5"></div>
    <!-- LOGO -->
    <div class="section-logo"><img src="./assets/img/logo.PNG" alt="Logo GBAF"></div>
  </main>
  <!-- FOOTER -->
  <!-- inclusion du footer -->
  <?php include('./_includes/footer.php'); ?>

  <!-- BOUTON - TO TOP -->
  <!-- inclusion du bouton haut de page -->
  <?php include('./_includes/to_top.php'); ?>

  <!-- JAVASCRIPT -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Mon JS -->
  <script src="./assets/js/app.js"></script>

</body>

</html>