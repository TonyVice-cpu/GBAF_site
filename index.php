<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./assets/img/fav_icon.PNG">
  <!-- CSS Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <!-- Mon CSS -->
  <link rel="stylesheet" href="./assets/css/styles.css">
  <title>GBAF - Le Groupement Banque et Assurance Français - Connexion</title>
</head>

<body>
  <!-- HEADER -->
  <header>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./assets/img/logo.PNG" alt="logo GBAF">
          Le Groupement Banque et Assurance Français
        </a>
        <div class="tinynav-logo"><a href="#">
            <img src="./assets/img/logo.PNG" alt="logo GBAF">
          </a>
          <p>Le Groupement Banque et Assurance Français</p>
        </div>
      </div>
    </nav>
  </header>
  <!-- MAIN -->
  <main>
    <!-- SECTION -->
    <section>
      <div>
        <h1>BIENVENUE sur le site du GBAF.</h1>
        <p>Veuillez-vous identifier pour continuer SVP.</p>
      </div>
      <form action="" method="">
        <div><img src="./assets/img/user.png" alt="User avatar"></div>
        <div><label for="name">Nom d'utilisateur : <i class="fa-solid fa-asterisk"></i></label><input type="text"
            id="user_name"></div>
        <div><label for="password">Mot de passe : <i class="fa-solid fa-asterisk"></i></label><input type="text"
            id="password"></div>
        <div>
          <p>Tous les champs avec un <i class="fa-solid fa-asterisk"></i> sont obligatoires</p>
        </div>
        <div class="hidden">Tous les champs avec un <i class="fa-solid fa-asterisk"></i>  sont obligatoire</div>
        <div>
          <a class="btn btn-dark" href="./pages/home.php">Connexion</a>
        </div>
        <div><a href="#">Mot de passe oublié ?</a></div>
      </form>
    </section>
  </main>
  <!-- SECTION LIENS VERS INSCRIPTION -->
  <section class="sign-up-link"><a class="mt-3" href="#">Première visite ?</a></section>
  <!-- FOOTER -->
  <footer>
    <div class="footer-link mt-2"><a href="./pages/notice.php"><i
          class="fa-solid fa-grip-lines-vertical me-2"></i>Mentions légales<i
          class="fa-solid fa-grip-lines-vertical ms-2"></i></a><a href="./pages/contact.php"><i
          class="fa-solid fa-grip-lines-vertical me-2"></i>Contact<i
          class="fa-solid fa-grip-lines-vertical ms-2"></i></a>
    </div>
    <div class="footer-copyright mt-2">
      <p>Copyright - GBAF - ANCELIN Anthony 2022</p>
    </div>
  </footer>

  <!-- BOUTON - TO TOP -->
  <section>
    <div id="totop" title="Haut de page">
      <i class="fas fa-angle-double-up"></i>
    </div>
  </section>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Mon JS -->
  <script src="./assets/js/app.js"></script>

</body>

</html>