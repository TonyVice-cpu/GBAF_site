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
      <h2 class="fs-1 fw-bold text-uppercase mt-5 mb-5"><?= $title ?></h2>
      <!-- PARAGRAPHE -->
      <p class="mb-5"><i class="fa-solid fa-circle me-2"></i>Pour plus d'informations, n'hésitez pas à nous contacter.</p>
      <!-- SEPARATEUR -->
      <div class="separator rounded  bg-dark mb-5"></div>
      <!-- LISTE A PUCES -->
      <ul>
        <li><i class="fa-solid fa-house me-2 mb-5"></i> 35 rue de la Paix - Paris - 75002</li>
        <li><i class="fa-solid fa-phone me-2 mb-5"></i> 01-00-00-00-00</li>
        <li><i class="fa-solid fa-mobile me-2 mb-5"></i> 07-00-00-00-00</li>
        <li><i class="fa-solid fa-envelope me-2 mb-5"></i> contact@gbaf.fr</li>
      </ul>
    </div>
    <!-- LOGO -->
    <div class="section-logo"><img src="./assets/img/logo.PNG" alt="Logo GBAF"></div>
    <!-- SEPARATEUR -->
    <div class="separator rounded  bg-dark mb-5"></div>
  </section>
</main>
<!-- FOOTER -->
<!-- inclusion du footer contenant le JAVASCRIPT -->
<?php include('./_includes/footer.php'); ?>