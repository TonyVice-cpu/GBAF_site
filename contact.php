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
  <section class="contact">
    <!-- TITRE -->
    <h2 class="fs-1 fw-bold text-uppercase my-3 mt-xl-5"><?= $title ?></h2>
    <!-- PARAGRAPHE -->
    <p class="mb-5">N'hésitez pas à nous contacter.</p>
    <!-- CARDS CONTACT -->
    <div class="d-flex flex-column flex-lg-row gap-4">
      <!-- CARD CONTACT 1 -->
      <div class="card-contact rounded shadow p-4 gap-3">
        <div class="d-flex flex-column align-items-center mb-3 gap-4">
          <i class="icon fa-solid fa-house"></i>
          <h3 class="m-0 text-uppercase fw-bold fs-4">Par Courrier :</h3>
          <p class="text-muted">Écrivez-nous via notre adresse postale.</p>
          <p class="text-center fs-6">35 rue de la Paix - Paris - 75002</p>
        </div>
      </div>
      <!-- CARD CONTACT 2 -->
      <div class="card-contact rounded shadow p-4 gap-3">
        <div class="d-flex flex-column align-items-center mb-3 gap-4">
          <i class="icon fa-solid fa-envelope"></i>
          <h3 class="m-0 text-uppercase fw-bold fs-4">Par E-Mail :</h3>
          <p class="text-muted">Écrivez-nous via notre adresse mail.</p>
          <p class="text-center fs-6"><a href="mailto:contactez-nous@gbaf.fr">contactez-nous@gbaf.fr</a></p>
        </div>
      </div>
      <!-- CARD CONTACT 3 -->
      <div class="card-contact rounded shadow p-4 gap-3">
        <div class="d-flex flex-column align-items-center mb-3 gap-4">
          <i class="icon fa-solid fa-phone"></i>
          <h3 class="m-0 text-uppercase fw-bold fs-4">Par Téléphone :</h3>
          <p class="text-muted">Appelez-nous du lundi au samedi de 10h à 19h.</p>
          <p class="text-center fs-6">+33-1-00-00-00-00</p>
        </div>
      </div>
    </div>
    <!-- LOGO -->
    <figure class="section-logo text-center my-5">
      <img src="./assets/img/logo.PNG" alt="Logo GBAF">
      <figcaption class="mt-3 fw-bold text-center">Le Groupement Banque - Assurance Français</figcaption>
    </figure>
    <div class="section-logo"></div>
  </section>
</main>
<!-- FOOTER -->
<!-- inclusion du footer contenant le JAVASCRIPT -->
<?php include('./_includes/footer.php'); ?>