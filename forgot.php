<?php
// ATTENTION CETTE PAGE PEUT ETRE ATTEINTE SANS CONNEXION
// inclusion du common
include('./_includes/common.php');
// inclusion du tableau des questions
include('./_includes/questions.php');
// si on est déjà connecté on redirige vers le home
if (verif_session()) {
  header('Location: ./home.php');
  die;
}
// déclaration du titre de page dans l'onglet de navigateur
$title = "Modification du mot de passe";

// Suppression des données de session de récupération si reset est présent dans la requête
if (isset($_GET['reset'])) {
  unset($_SESSION['question']);
  unset($_SESSION['is_valid_answer']);
}

// inclusion du header
include('./_includes/header.php');
?>
<!-- MAIN -->
<main>
  <!-- SECTION -->
  <section>
    <!-- TITRE -->
    <h2 class="fs-1 fw-bold text-uppercase my-3 mt-xl-5"><?= $title ?></h2>
    <!-- PARAGRAPHE -->
    <p class="mb-5">Veuillez remplir le formulaire pour réinitialiser votre mot de passe.</p>
    <!-- FORMULAIRE -->
    <form class="mx-auto" id="form-login" action="./action/forgot.php" method="post">
      <?php
      // ETAPE 3 : Si l'utilisateur a fourni la bonne réponse à sa question
      if (!empty($_SESSION['is_valid_answer'])) :
      ?>
        <div class="d-flex flex-column align-items-center my-3">
          <label class="fw-bold" for="password">Saississez votre nouveau mot de passe : <i class="fa-solid fa-asterisk"></i></label>
          <div>
            <P class="text-center text-muted">Minimum 8 caractères, au moins une majuscule, au moins une minuscule et au moins un chiffre.</P>
          </div>
          <input type="password" id="password" name="password" pattern="<?= $regex_password ?>" required>
        </div>
      <?php
      // ETAPE 2 : Si un nom d'utilisateur valide est fourni, on affiche sa question secrète
      elseif (!empty($_SESSION['question'])) :
      ?>
        <div class="d-flex flex-column align-items-center my-3">
          <label class="fw-bold" for="question">Votre question : </label>
          <input type="text" id="question" value="<?= htmlspecialchars($_SESSION['question']['question']) ?>" disabled>
        </div>
        <div class="d-flex flex-column align-items-center my-3">
          <label class="fw-bold" for="answer">Réponse : <i class="fa-solid fa-asterisk"></i></label>
          <input type="text" id="answer" name="answer" required>
        </div>
      <?php
      // ETAPE 1 : Si aucun de ces cas, on affiche la saisie du nom d'utilisateur
      else :
      ?>
        <div class="d-flex flex-column align-items-center my-3">
          <label class="fw-bold" for="user_name">Nom d'utilisateur : <i class="fa-solid fa-asterisk"></i></label>
          <input type="text" id="user_name" name="user_name" minlength="2" required>
        </div>
      <?php endif ?>
      <!-- TEXT -->
      <div class="d-flex flex-column align-items-center text-muted">
        <p>Tous les champs avec un <i class="fa-solid fa-asterisk"></i> sont obligatoires</p>
      </div>
      <!-- BOUTON D'ENVOI -->
      <div class="d-flex flex-column align-items-center my-3">
        <button type="submit" class="btn btn-dark" title="Cliquez-ici pour Valider.">Valider</button>
      </div>
    </form>
  </section>
</main>
<!-- FOOTER -->
<!-- inclusion du footer contenant le JAVASCRIPT -->
<?php include('./_includes/footer.php'); ?>