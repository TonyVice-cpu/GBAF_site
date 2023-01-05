<?php
// ATTENTION CETTE PAGE PEUT ETRE ATTEINTE SEULEMENT UNE FOIS CONNEECTE
// inclusion du common
include('./_includes/common.php');
// vérification de l'authentification
protected_session();
// déclaration du titre de page dans l'onglet de navigateur
$title = "Nouveau commentaire";
// inclusion du header
include('./_includes/header.php');
?>
<!-- MAIN -->
<main>
  <!-- SECTION -->
  <!-- SECTION SETTINGS -->
  <section>
    <div class="settings">
      <!-- TITRE -->
      <h2 class="fs-1 fw-bold text-uppercase mt-5 mb-5"><?= $title ?></h2>
      <!-- PARAGRAPHE -->
      <p class="mb-5"><i class="fa-solid fa-circle me-2"></i>N'hésitez pas à nous laissez un commentaire.</p>
      <!-- FORMULAIRE -->
      <form action="./action/add_comment.php" method="post">
        <div class="d-flex flex-column align-items-center justify-content-center">
          <label class="mb-3" for="post">Commentaire : </label>
          <textarea id="post" name="post"></textarea>
          <input type="hidden" name="actor_id" value="<?= $_GET['id'] ?>">
        </div>
        <div class="d-flex flex-column align-items-center mt-3">
          <button type="submit" class="btn btn-dark">Envoyer</button>
        </div>
      </form>
  </section>
</main>
<!-- FOOTER -->
<!-- inclusion du footer contenant le JAVASCRIPT -->
<?php include('./_includes/footer.php'); ?>