<?php
include('./_includes/common.php');
if (verif_session()) {
  header('Location: ./home.php');
  die;
}
$title = "Inscription";
?>

<!-- inclusion du header contenant le DOCTYPE -->
<?php include('./_includes/header.php'); ?>
<!-- MAIN -->
<main>
  <!-- SECTION -->
  <section>
    <div>
      <h1>BIENVENUE sur le site du GBAF.</h1>
      <p>Veuillez remplir le formulaire d'incription pour continuer SVP.</p>
    </div>
    <form id="form-login" action="./action/register.php" method="post">
      <div>
        <label for="first_name">Nom : <i class="fa-solid fa-asterisk"></i></label>
        <input type="text" id="first_name" name="first_name" required>
      </div>

      <div>
        <label for="last_name">Prénom : <i class="fa-solid fa-asterisk"></i></label>
        <input type="text" id="last_name" name="last_name" required>
      </div>

      <div>
        <label for="user_name">Nom d'utilisateur : <i class="fa-solid fa-asterisk"></i></label>
        <input type="text" id="user_name" name="user_name" required>
      </div>

      <div>
        <label for="password">Mot de passe : <i class="fa-solid fa-asterisk"></i></label>
        <input type="password" id="password" name="password" required>
      </div>

      <div>
        <label for="question">Question secrète : <i class="fa-solid fa-asterisk"></i></label>
        <input type="text" id="question" name="question" required>
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