<?php
// ATTENTION CETTE PAGE PEUT ETRE ATTEINTE SEULEMENT UNE FOIS CONNEECTE
// inclusion du common
include('./_includes/common.php');
// vérification de l'authentification
protected_session();
// récupération des données de l'utilisateur à partir son id
$account = get_account($_SESSION['account']['user_id']);
// déclaration du titre de page dans l'onglet de navigatuer
$title = "Paramètres du comptes";
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
      <p><i class="fa-solid fa-circle me-2"></i>Veuillez modifier vos paramètres utilisateur ici, SVP.</p>
      <!-- FORMULAIRE -->
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
              Si vous voulez modifier votre mot de passe, veuillez remplir le champ, sinon laissez le vide.
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