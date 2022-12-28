<?php
// ATTENTION CETTE PAGE PEUT ETRE ATTEINTE SANS CONNEXION
include('./_includes/common.php');
$title = "Contact";
?>

<!-- inclusion du header contenant le DOCTYPE -->
<?php include('./_includes/header.php'); ?>
<!-- MAIN -->
<main>
  <!-- SECTION -->
  <!-- SECTION CONTACT -->
  <section>
    <!-- SEPARATEUR -->
    <div class="separator rounded bg-dark mt-5 mb-5"></div>
    <div class="contact">
      <h2 class="fs-1 mt-5"><?= $title ?></h2>
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
<!-- inclusion du footer contenant le JAVASCRIPT -->
<?php include('./_includes/footer.php'); ?>
