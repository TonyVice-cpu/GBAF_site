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
    <!-- TITRE -->
    <h2 class="fs-1 fw-bold text-uppercase text-center my-3 my-xl-5">BIENVENUE sur le site du GBAF</h2>
    <!-- FORMULAIRE -->
    <form class="mx-auto " id="form-login" action="./action/login.php" method="post">
      <!-- NOM D'UTILISATEUR -->
      <div class="d-flex flex-column align-items-center my-3">
        <label class="fw-bold" for="user_name">Nom d'utilisateur : <i class="fa-solid fa-asterisk"></i></label>
        <input type="text" id="user_name" name="user_name" required>
      </div>
      <!-- MDP -->
      <div class="d-flex flex-column align-items-center my-3">
        <label class="fw-bold" for="password">Mot de passe : <i class="fa-solid fa-asterisk"></i></label>
        <input type="password" id="password" name="password" required>
      </div>
      <!-- TEXT -->
      <div class="d-flex flex-column align-items-center text-muted">
        <p>Tous les champs avec un <i class="fa-solid fa-asterisk"></i> sont obligatoires</p>
      </div>
      <!-- BOUTON D'ENVOI -->
      <div class="d-flex flex-column align-items-center my-3">
        <button type="submit" class="btn btn-dark">Connexion</button>
      </div>
      <!-- MDP PERDU -->
      <div class="d-flex flex-column align-items-center my-3">
        <a class="mt-3" href="./forgot.php?reset">Mot de passe oublié ?</a>
      </div>
    </form>
  </section>
</main>
<!-- LIENS VERS INSCRIPTION -->
<div class="sign-up-link d-flex justify-content-center text-center"><a class="text-uppercase fs-3 mt-3" href="./register.php">Première visite ?</a></div>
<!-- FOOTER -->
<!-- inclusion du footer contenant le JAVASCRIPT -->
<?php include('./_includes/footer.php'); ?>