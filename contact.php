<?php
// ATTENTION CETTE PAGE PEUT ETRE ATTEINTE SANS CONNEXION
// inclusion du common
include('./_includes/common.php');
// déclaration du titre de page dans l'onglet de navigateur
$title = "Contact";
// inclusion du header
include('./_includes/header.php');
?>
<!-- MAIN -->
<main>
  <!-- SECTION -->
  <!-- SECTION CONTACT -->
  <section>
    <!-- CARTE CONTACT -->
    <div class="contact">
      <!-- TITRE -->
      <h2 class="fs-1 fw-bold text-uppercase my-3 mt-xl-5"><?= $title ?></h2>
      <!-- PARAGRAPHE -->
      <p class="mb-5">N'hésitez pas à nous contacter.</p>
      <!-- SEPARATEUR -->
      <div class="separator rounded bg-dark mb-5"></div>
      <!-- LISTE A PUCES -->
      <ul class="list-unstyled mx-auto">
        <li class="mb-4 rounded shadow p-3 gap-3">
          <i class="fa-solid fa-house"></i>
          <span class="w-100">35 rue de la Paix - Paris - 75002</span>
        </li>
        <li class="mb-4 rounded shadow p-3 gap-3">
          <i class="fa-solid fa-phone"></i>
          <span class="w-100">01-00-00-00-00</span>
        </li>
        <li class="mb-4 rounded shadow p-3 gap-3">
          <i class="fa-solid fa-mobile"></i>
          <span class="w-100">07-00-00-00-00</span>
        </li>
        <li class="mb-4 rounded shadow p-3 gap-3">
          <i class="fa-solid fa-envelope"></i>
          <span class="w-100">contact@gbaf.fr</span>
        </li>
      </ul>
    </div>
    <!-- LOGO -->
    <figure class="section-logo text-center my-5">
      <img src="./assets/img/logo.PNG" alt="Logo GBAF">
      <figcaption class="mt-3 fw-bold text-center">Le Groupement Banque et Assurances Français</figcaption>
    </figure>
    <div class="section-logo"></div>
    <!-- SEPARATEUR -->
    <div class="separator rounded bg-dark mb-5"></div>
  </section>
</main>
<!-- FOOTER -->
<!-- inclusion du footer contenant le JAVASCRIPT -->
<?php include('./_includes/footer.php'); ?>