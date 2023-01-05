<?php
// ATTENTION CETTE PAGE PEUT ETRE ATTEINTE SEULEMENT UNE FOIS CONNECTE
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
    <div>
      <h1 class="fs-1 fw-bold text-uppercase mt-5 mb-5">BIENVENUE sur le site du GBAF.</h1>
      <p><i class="fa-solid fa-circle me-2"></i>Veuillez remplir le formulaire d'incription pour continuer, SVP.</p>
    </div>
    <form id="form-login" action="./action/register.php" method="post">
      <div>
        <label for="first_name">Nom : <i class="fa-solid fa-asterisk"></i></label>
        <input type="text" id="first_name" name="first_name" minlength="2" required>
      </div>

      <div>
        <label for="last_name">Prénom : <i class="fa-solid fa-asterisk"></i></label>
        <input type="text" id="last_name" name="last_name" minlength="2" required>
      </div>

      <div>
        <label for="user_name">Nom d'utilisateur : <i class="fa-solid fa-asterisk"></i></label>
        <input type="text" id="user_name" name="user_name" minlength="2" required>
      </div>

      <div>
        <label for="password">Mot de passe : <i class="fa-solid fa-asterisk"></i></label>
        <div class="alert alert-dark d-flex align-items-center" role="alert">
          <i class="fa-solid fa-triangle-exclamation fs-4 me-2"></i>
          <div>
            Minimum 8 caractères, au moins une majuscule, au moins une minuscule et au moins un chiffre.
          </div>
        </div>
        <input type="password" id="password" name="password" pattern="<?= $regex_password ?>" required>
      </div>

      <div>
        <label for="question">Question secrète : <i class="fa-solid fa-asterisk"></i></label>
        <select name="question" id="question" required>
          <option value="">--Choississez une question--</option>
          <?php foreach ($questions as $question) : ?>
            <option><?= htmlspecialchars($question) ?></option>
          <?php endforeach ?>
        </select>
      </div>

      <div>
        <label for="answer">Réponse : <i class="fa-solid fa-asterisk"></i></label>
        <input type="text" id="answer" name="answer" required>
      </div>

      <div>
        <p>Tous les champs avec un <i class="fa-solid fa-asterisk"></i> sont obligatoires</p>
      </div>

      <div class="hidden">Tous les champs avec un <i class="fa-solid fa-asterisk"></i>  sont obligatoire</div>
      <div>
        <button type="submit" class="btn btn-dark">Inscription</button>
      </div>

    </form>
  </section>
</main>
<!-- FOOTER -->
<!-- inclusion du footer contenant le JAVASCRIPT -->
<?php include('./_includes/footer.php'); ?>