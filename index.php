<?php
$title = "Connexion";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./assets/img/fav_icon.PNG">
  <!-- CSS Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <!-- Mon CSS -->
  <link rel="stylesheet" href="./assets/css/styles.css">
  <title>GBAF - Le Groupement Banque et Assurance Français - <?= $title ?></title>
</head>

<body>
  <!-- HEADER -->
  <!-- inclusion du header -->
  <?php include('./_includes/header.php'); ?>
  <!-- MAIN -->
  <main>
    <!-- SECTION -->
    <!-- inclusion du formulaire de login -->
    <?php include('./_includes/form_login.php'); ?>
  </main>
  <!-- SECTION LIENS VERS INSCRIPTION -->
  <section class="sign-up-link"><a class="mt-3" href="#">Première visite ?</a></section>
  <!-- FOOTER -->
  <!-- inclusion du footer -->
  <?php include('./_includes/footer.php'); ?>

  <!-- BOUTON - TO TOP -->
  <!-- inclusion du bouton haut de page -->
  <?php include('./_includes/to_top.php'); ?>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Mon JS -->
  <script src="./assets/js/app.js"></script>

</body>

</html>