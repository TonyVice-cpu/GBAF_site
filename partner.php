<?php
// ATTENTION CETTE PAGE PEUT ETRE ATTEINTE SEULEMENT UNE FOIS CONNEECTE
include('./_includes/common.php');
protected_session();
$actor = get_actor($_GET['id']);
$title = $actor['actor_name'];
include('./_includes/header.php');
?>
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
<!-- inclusion du footer contenant le JAVASCRIPT -->
<?php include('./_includes/footer.php'); ?>
