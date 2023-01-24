<?php
// CETTE PAGE PEUT ETRE ATTEINTE SANS CONNEXION
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
$title = "Inscription";
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
    <p class="mb-5">Veuillez remplir le formulaire d'incription pour continuer.</p>
    <!-- FORMULAIRE -->
    <form class="mx-auto" id="form-login" action="./action/register.php" method="post">
      <!-- NOM -->
      <div class="d-flex flex-column align-items-center my-3">
        <label class="fw-bold" for="first_name">Nom : <i class="fa-solid fa-asterisk"></i></label>
        <input type="text" id="first_name" name="first_name" minlength="2" required>
      </div>
      <!-- PRENOM -->
      <div class="d-flex flex-column align-items-center my-3">
        <label class="fw-bold" for="last_name">Prénom : <i class="fa-solid fa-asterisk"></i></label>
        <input type="text" id="last_name" name="last_name" minlength="2" required>
      </div>
      <!-- NOM D'UTILISATEUR -->
      <div class="d-flex flex-column align-items-center my-3">
        <label class="fw-bold" for="user_name">Nom d'utilisateur : <i class="fa-solid fa-asterisk"></i></label>
        <input type="text" id="user_name" name="user_name" minlength="2" required>
      </div>
      <!-- MDP -->
      <div class="d-flex flex-column align-items-center my-3">
        <label class="fw-bold" for="password">Mot de passe : <i class="fa-solid fa-asterisk"></i></label>
        <div>
          <P class="text-center text-muted">Minimum 8 caractères, au moins une majuscule, au moins une minuscule et au moins un chiffre.</P>
        </div>
        <input type="password" id="password" name="password" pattern="<?= $regex_password ?>" required>
      </div>
      <!-- QUESTION SECRETE -->
      <div class="d-flex flex-column align-items-center my-3">
        <label class="fw-bold" for="question">Question secrète : <i class="fa-solid fa-asterisk"></i></label>
        <select name="question" id="question" required>
          <option value="">--Choississez une question--</option>
          <?php foreach ($questions as $question) : ?>
            <option><?= htmlspecialchars($question) ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <!-- REPONSE -->
      <div class="d-flex flex-column align-items-center my-3">
        <label class="fw-bold" for="answer">Réponse : <i class="fa-solid fa-asterisk"></i></label>
        <input type="text" id="answer" name="answer" required>
      </div>
      <!-- TEXT -->
      <div class="d-flex flex-column align-items-center text-muted">
        <p>Tous les champs avec un <i class="fa-solid fa-asterisk"></i> sont obligatoires</p>
      </div>
      <!-- BOUTON D'ENVOI -->
      <div class="d-flex flex-column align-items-center my-3">
        <button type="submit" class="btn btn-dark" title="Cliquez-ici pour Envoyer.">Envoyer</button>
      </div>
    </form>
  </section>
</main>
<!-- FOOTER -->
<!-- inclusion du footer contenant le JAVASCRIPT -->
<?php include('./_includes/footer.php'); ?>