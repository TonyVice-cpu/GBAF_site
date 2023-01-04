<?php
// ATTENTION CETTE PAGE PEUT ETRE ATTEINTE SEULEMENT UNE FOIS CONNEECTE
include('./_includes/common.php');
protected_session();
$title = "Nouveau commentaire";
include('./_includes/header.php');
?>
<!-- MAIN -->
<main>
  <!-- SECTION -->
  <!-- SECTION SETTINGS -->
  <section>
    <!-- SEPARATEUR -->
    <div class="separator rounded bg-dark mt-5 mb-5"></div>
    <div class="settings">
      <h2 class="fs-1 mt-5"><?= $title ?></h2>
      <!-- SEPARATEUR - icons -->
      <div class="star-icon"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
      <!-- SEPARATEUR -->
      <div class="separator rounded bg-dark mt-5 mb-5"></div>

      <form action="./action/add_comment.php" method="post">
      <div>
        <label for="post">Commentaire : </label>
        <textarea id="post" name="post"></textarea>
        <input type="hidden" name="actor_id" value="<?= $_GET['id'] ?>">
      </div>
      <div>
        <button type="submit" class="btn btn-dark">Envoyer</button>
      </div>
    </form>
  </section>
</main>
<!-- FOOTER -->
<!-- inclusion du footer contenant le JAVASCRIPT -->
<?php include('./_includes/footer.php'); ?>