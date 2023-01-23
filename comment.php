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
    <!-- TITRE -->
    <h2 class="fs-1 fw-bold text-uppercase my-3 mt-xl-5"><?= $title ?></h2>
    <!-- PARAGRAPHE -->
    <p class="mb-5">N'hésitez pas à nous laissez un commentaire.</p>
    <!-- FORMULAIRE -->
    <form action="./action/add_comment.php" method="post">
      <div class="d-flex flex-column align-items-center justify-content-center my-3">
        <label class="fw-bold mb-3" for="post">Commentaire : <i class="fa-solid fa-asterisk"></i></label>
        <textarea id="post" name="post"></textarea>
        <input type="hidden" name="actor_id" value="<?= $_GET['id'] ?>">
      </div>
      <!-- TEXT -->
      <div class="d-flex flex-column align-items-center text-muted">
        <p>Tous les champs avec un <i class="fa-solid fa-asterisk"></i> sont obligatoires</p>
      </div>
      <!-- BOUTON -->
      <div class="d-flex flex-column align-items-center my-3">
        <button type="submit" class="btn btn-dark">Envoyer</button>
      </div>
    </form>
  </section>
</main>
<!-- FOOTER -->
<!-- inclusion du footer contenant le JAVASCRIPT -->
<?php include('./_includes/footer.php'); ?>