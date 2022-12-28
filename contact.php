<?php
session_start();
$title = "Contact";
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
  <title>GBAF - Le Groupement Banque et Assurance Français - <?= $title ?></title>
</head>

<body>
  <!-- HEADER -->
  <!-- inclusion du header -->
  <?php include('./_includes/header.php'); ?>
  <!-- MAIN -->
  <main>
    <!-- SECTION -->
    <!-- SECTION CONTACT -->
    <section>
      <!-- SEPARATEUR -->
      <div class="separator rounded bg-dark mt-5 mb-5"></div>
      <div class="contact">
        <h2 class="fs-1 mt-5">Contact</h2>
        <!-- SEPARATEUR - icons -->
        <div class="star-icon"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <!-- SEPARATEUR -->
        <div class="separator rounded bg-dark mt-5 mb-5"></div>
        <p class="mb-5 fs-4">Pour plus d'informations, n'hésitez pas à nous contacter.</p>
        <ul>
          <li><i class="fa-solid fa-house me-2 mb-5"></i> 35 rue de la Paix - Paris - 75002</li>
          <li><i class="fa-solid fa-phone me-2 mb-5"></i> 01-00-00-00-00</li>
          <li><i class="fa-solid fa-mobile me-2 mb-5"></i> 07-00-00-00-00</li>
          <li><i class="fa-solid fa-envelope me-2 mb-5"></i> contact@gbaf.fr</li>
        </ul>
      </div>
      <!-- SEPARATEUR -->
      <div class="separator rounded  bg-dark mb-5"></div>
    </section>
    <section>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Votre Email :</label>
        <input type="email" class="form-control bg-light " id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Votre texte :</label>
        <textarea class="form-control bg-light " id="exampleFormControlTextarea1" placeholder="Laissez votre message ici.." rows="3"></textarea>
      </div>
      <div class="section-button"><button type="submit" class="btn btn-dark mb-5">Envoyer</button></div>
    </section>
    <!-- SEPARATEUR -->
    <div class="separator rounded  bg-dark mb-5"></div>
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