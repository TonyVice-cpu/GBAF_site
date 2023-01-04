<?php
// ATTENTION CETTE PAGE PEUT ETRE ATTEINTE SEULEMENT UNE FOIS CONNEECTE
include('./_includes/common.php');
protected_session();
$account = get_account($_SESSION['account']['user_id']);
$title = "Paramètres du comptes";
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
      <!-- Formulaire -->
      <form id="form-login" action="./action/settings.php" method="post">
        <div>
          <label for="first_name">Nom : <i class="fa-solid fa-asterisk"></i></label>
          <input type="text" id="first_name" name="first_name" value="<?= htmlspecialchars($account['first_name']) ?>" required>
        </div>

        <div>
          <label for="last_name">Prénom : <i class="fa-solid fa-asterisk"></i></label>
          <input type="text" id="last_name" name="last_name" value="<?= htmlspecialchars($account['last_name']) ?>" required>
        </div>

        <div>
          <label for="user_name">Nom d'utilisateur : <i class="fa-solid fa-asterisk"></i></label>
          <input type="text" id="user_name" name="user_name" value="<?= htmlspecialchars($account['user_name']) ?>" required>
        </div>

        <div>
          <label for="password">Mot de passe : </label>
          <div class="alert alert-dark d-flex align-items-center" role="alert">
            <i class="fa-solid fa-triangle-exclamation fs-4 me-2"></i>
            <div>
              Si vous voulez modifier votre mot de passe, veuillez remplir le champs, sinon laissez le vide.
            </div>
          </div>
          <input type="password" id="password" name="password">
        </div>

        <div>
          <label for="question">Question secrète : <i class="fa-solid fa-asterisk"></i></label>
          <input type="text" id="question" name="question" value="<?= htmlspecialchars($account['question']) ?>" required>
        </div>

        <div>
          <label for="answer">Réponse : <i class="fa-solid fa-asterisk"></i></label>
          <input type="text" id="answer" name="answer" value="<?= htmlspecialchars($account['answer']) ?>" required>
        </div>

        <div>
          <p>Tous les champs avec un <i class="fa-solid fa-asterisk"></i> sont obligatoires</p>
        </div>

        <div class="hidden">Tous les champs avec un <i class="fa-solid fa-asterisk"></i>  sont obligatoire</div>
        <div>
          <button type="submit" class="btn btn-dark">Modifier</button>
        </div>

      </form>
  </section>
</main>
<!-- FOOTER -->
<!-- inclusion du footer contenant le JAVASCRIPT -->
<?php include('./_includes/footer.php'); ?>