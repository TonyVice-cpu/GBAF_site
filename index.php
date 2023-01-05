<?php
// CECI EST LA PAGE DE DEPART DU SITE
// inclusion du common
include('./_includes/common.php');
// si on est déjà connecté on redirige vers le home
if (verif_session()) {
  header('Location: ./home.php');
  die;
}
// déclaration du titre de page dans l'onglet de navigateur
$title = "Connexion";
// inclusion du header
include('./_includes/header.php');
?>
<!-- MAIN -->
<main>
  <!-- SECTION -->
  <section>
    <div class="text-center mt-3">
      <h1 class="fs-1 fw-bold text-uppercase">BIENVENUE sur le site du GBAF.</h1>
      <p>Veuillez-vous identifier pour continuer SVP.</p>
    </div>
    <form id="form-login" action="./action/login.php" method="post">
      <div><img src="./assets/img/user.png" alt="User avatar"></div>
      <div>
        <label for="user_name">Nom d'utilisateur : <i class="fa-solid fa-asterisk"></i></label>
        <input type="text" id="user_name" name="user_name" required>
      </div>
      <div>
        <label for="password">Mot de passe : <i class="fa-solid fa-asterisk"></i></label>
        <input type="password" id="password" name="password" required>
      </div>
      <div>
        <p>Tous les champs avec un <i class="fa-solid fa-asterisk"></i> sont obligatoires</p>
      </div>
      <div class="hidden">Tous les champs avec un <i class="fa-solid fa-asterisk"></i>  sont obligatoire</div>
      <div>
        <button type="submit" class="btn btn-dark">Connexion</button>
      </div>
      <div><a href="#">Mot de passe oublié ?</a></div>
    </form>
  </section>
</main>
<!-- SECTION LIENS VERS INSCRIPTION -->
<section class="sign-up-link"><a class="mt-3" href="./register.php">Première visite ?</a></section>
<!-- FOOTER -->
<!-- inclusion du footer contenant le JAVASCRIPT -->
<?php include('./_includes/footer.php'); ?>