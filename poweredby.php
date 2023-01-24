<?php
// ATTENTION CETTE PAGE PEUT ETRE ATTEINTE SANS CONNEXION
// inclusion du common
include('./_includes/common.php');
// déclaration du titre de page dans l'onglet de navigateur
$title = "Propulsé par";
// inclusion du header
include('./_includes/header.php');
?>
<!-- MAIN -->
<main>
  <!-- SECTION -->
  <!-- SECTION POWEREDBY -->
  <section class="poweredby">
    <!-- TITRE -->
    <h2 class="fs-1 fw-bold text-uppercase my-3 mt-xl-5"><?= $title ?></h2>
    <!-- PARAGRAPHE -->
    <p class="mb-5">Les technologies utilisées pour ce site.</p>
    <!-- CARDS POWEREDBY -->
    <div class="d-flex flex-column flex-xl-row gap-4">
      <div class="d-flex flex-column flex-md-row gap-4">
        <!-- CARD HTML5 -->
        <div class="card-poweredby rounded shadow p-4 gap-3">
          <div class="d-flex flex-column align-items-center gap-4">
            <img src="https://www.w3.org/html/logo/downloads/HTML5_Logo.svg" alt="Logo HTML5">
            <h3 class="m-0 text-uppercase fw-bold fs-4">HTML5</h3>
            <p class="text-muted">HTML5 (HyperText Markup Language 5) est la dernière révision majeure du HTML (format de données conçu pour représenter les pages web).</p>
          </div>
        </div>
        <!-- CARD CSS3 -->
        <div class="card-poweredby rounded shadow p-4 gap-3">
          <div class="d-flex flex-column align-items-center gap-4">
            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" alt="Logo CSS3">
            <h3 class="m-0 text-uppercase fw-bold fs-4">CSS3</h3>
            <p class="text-muted">Les feuilles de style en cascade, généralement appelées CSS de l'anglais Cascading Style Sheets, forment un langage informatique qui décrit la présentation des documents HTML et XML.</p>
          </div>
        </div>
      </div>
      <div class="d-flex flex-column flex-md-row gap-4">
        <!-- CARD PHP -->
        <div class="card-poweredby rounded shadow p-4 gap-3">
          <div class="d-flex flex-column align-items-center gap-4">
            <img src="https://www.php.net/images/logos/new-php-logo.svg" alt="Logo PHP">
            <h3 class="m-0 text-uppercase fw-bold fs-4">PHP</h3>
            <p class="text-muted">PHP: Hypertext Preprocessor, est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP.</p>
          </div>
        </div>
        <!-- CARD BOOTSTRAP -->
        <div class="card-poweredby rounded shadow p-4 gap-3">
          <div class="d-flex flex-column align-items-center gap-4">
            <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="Logo Bootstrap">
            <h3 class="m-0 text-uppercase fw-bold fs-4">Bootstrap</h3>
            <p class="text-muted">Bootstrap est une collection d'outils utiles à la création du design (graphisme, animation et interactions avec la page dans le navigateur, etc.) de sites et d'applications web.</p>
          </div>
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