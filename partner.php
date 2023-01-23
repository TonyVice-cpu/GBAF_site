<?php
// ATTENTION CETTE PAGE PEUT ETRE ATTEINTE SEULEMENT UNE FOIS CONNEECTE
// inclusion du common
include('./_includes/common.php');
// vérification de l'authentification 
protected_session();
// récupération de l'acteur par son id
$actor = get_actor($_GET['id']);
// déclaration du titre de page dans l'onglet de navigateur
$title = $actor['actor_name'];
//inclusion du header
include('./_includes/header.php');
?>
<!-- MAIN -->
<main>
  <!-- SECTIONS -->
  <!-- SECTION PARTNER-PRESENTATION -->
  <section class="partner-presentation">
    <figure class="text-center">
      <img src="./assets/img/<?= htmlspecialchars($actor['logo']) ?>" class="img-fluid rounded mt-5" alt="Logo <?= htmlspecialchars($actor['actor_name']) ?>">
    </figure>
    <!-- TITRE -->
    <h2 class="fs-1 fw-bold text-uppercase my-3 mt-xl-5"><?= htmlspecialchars($actor['actor_name']) ?></h2>
    <!-- LIEN -->
    <a href="#">www.<?= htmlspecialchars($actor['actor_name']) ?>.fr</a>
    <!-- PARAGRAPHE -->
    <p class="mt-5"><?= nl2br(htmlspecialchars($actor['description'])) ?></p>
  </section>
  <!-- SEPARATEUR -->
  <div class="separator rounded  bg-dark mt-5 mb-5"></div>
  <!-- SECTION PARTNER-COMMENTS -->
  <!-- inclusion des commentaires -->
  <?php include('./_includes/comments.php') ?>
</main>
<!-- FOOTER -->
<!-- inclusion du footer contenant le JAVASCRIPT -->
<?php include('./_includes/footer.php'); ?>