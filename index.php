<?php
$title = "Connexion";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./assets/img/fav_icon.PNG">
  <!-- CSS -->
  <!-- CSS Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <!-- Mon CSS -->
  <link rel="stylesheet" href="./assets/css/styles.css">
  <title>GBAF - Le Groupement Banque et Assurance Français - <?= $title ?></title>
</head>

<body>
  <!-- HEADER -->
  <!-- inclusion du header -->
  <?php include('./_includes/header.php'); ?>
  <!-- MAIN -->
  <main>
    <!-- SECTION -->
    <section>
      <div>
        <h1>BIENVENUE sur le site du GBAF.</h1>
        <p>Veuillez-vous identifier pour continuer SVP.</p>
      </div>
      <form action="./action/login.php" method="post">
        <div><img src="./assets/img/user.png" alt="User avatar"></div>
        <div>
          <label for="user_name">Nom d'utilisateur : <i class="fa-solid fa-asterisk"></i></label>
          <input type="text" id="user_name" name="user_name">
        </div>
        <div>
          <label for="password">Mot de passe : <i class="fa-solid fa-asterisk"></i></label>
          <input type="password" id="password" name="password">
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
  <section class="sign-up-link"><a class="mt-3" href="#">Première visite ?</a></section>
  <!-- FOOTER -->
  <!-- inclusion du footer -->
  <?php include('./_includes/footer.php'); ?>

  <!-- BOUTON - TO TOP -->
  <!-- inclusion du bouton haut de page -->
  <?php include('./_includes/to_top.php'); ?>

  <!-- JAVASCRIPT -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Mon JS -->
  <script src="./assets/js/app.js"></script>

</body>

</html>