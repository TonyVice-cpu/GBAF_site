<?php
// CETTE PAGE PEUT ETRE ATTEINTE SEULEMENT UNE FOIS CONNEECTE
// inclusion du common
include('./_includes/common.php');
// inclusion du tableau des questions
include('./_includes/questions.php');
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
  <section>
    <!-- TITRE -->
    <div>
      <h1 class="fs-1 fw-bold text-uppercase mt-5 mb-5"><?= $title ?></h1>
      <p><i class="fa-solid fa-circle me-2"></i>Veuillez modifier vos paramètres utilisateur ici, SVP.</p>
      <!-- FORMULAIRE -->
      <form id="form-login" action="./action/settings.php" method="post">
        <!-- NOM -->
        <div>
          <label for="first_name">Nom : <i class="fa-solid fa-asterisk"></i></label>
          <input type="text" id="first_name" name="first_name" minlength="2" value="<?= htmlspecialchars($account['first_name']) ?>" required>
        </div>
        <!-- PRENOM -->
        <div>
          <label for="last_name">Prénom : <i class="fa-solid fa-asterisk"></i></label>
          <input type="text" id="last_name" name="last_name" minlength="2" value="<?= htmlspecialchars($account['last_name']) ?>" required>
        </div>
        <!-- NOM D'UTILISATEUR -->
        <div>
          <label for="user_name">Nom d'utilisateur : <i class="fa-solid fa-asterisk"></i></label>
          <input type="text" id="user_name" name="user_name" minlength="2" value="<?= htmlspecialchars($account['user_name']) ?>" required>
        </div>
        <!-- MDP -->
        <div>
          <label for="password">Mot de passe : </label>
          <div>
            <p class="text-center text-muted">Si vous voulez modifier votre mot de passe, veuillez remplir le champ, sinon laissez le vide.</p>
          </div>
          <input type="password" id="password" name="password" pattern="<?= $regex_password ?>">
        </div>
        <!-- QUESTION SECRETE -->
        <div>
          <label for="question">Question secrète : <i class="fa-solid fa-asterisk"></i></label>
          <select name="question" id="question" required>
            <option value="">--Choississez une question--</option>
            <?php foreach ($questions as $question) : ?>
              <option <?= ($account['question'] === $question) ? 'selected' : '' ?>><?= htmlspecialchars($question) ?></option>
            <?php endforeach ?>
          </select>
        </div>
        <!-- REPONSE -->
        <div>
          <label for="answer">Réponse : <i class="fa-solid fa-asterisk"></i></label>
          <input type="text" id="answer" name="answer" value="<?= htmlspecialchars($account['answer']) ?>" required>
        </div>
        <!-- TEXT -->
        <div>
          <p class="text-center text-muted mt-5">Tous les champs avec un <i class="fa-solid fa-asterisk"></i> sont obligatoires</p>
        </div>
        <!-- BOUTON D'ENVOI -->
        <div>
          <button type="submit" class="btn btn-dark">Modifier</button>
        </div>
      </form>
  </section>
</main>
<!-- FOOTER -->
<!-- inclusion du footer contenant le JAVASCRIPT -->
<?php include('./_includes/footer.php'); ?>