<?php 
$title = "Paramètres du comptes";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../assets/img/fav_icon.PNG">
  <!-- CSS Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <!-- Mon CSS -->
  <link rel="stylesheet" href="../assets/css/styles.css">
  <title>GBAF - Le Groupement Banque et Assurance Français - <?= $title ?></title>
</head>

<body>
  <!-- HEADER -->
  <header>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="./home.php">
          <img src="../assets/img/logo.PNG" alt="logo GBAF">
          Le Groupement Banque et Assurance Français
        </a>
        <div class="tinynav-logo"><a href="./home.php">
            <img src="../assets/img/logo.PNG" alt="logo GBAF">
          </a>
          <p>Le Groupement Banque et Assurance Français</p>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mt-3">
            <li class="nav-item ms-2">
              <p class="nav-link-p">Nom Prénom</p>
            </li>
            <li class="nav-item ms-2">
              <a class="nav-link" href="../index.php">Se déconnecter</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- MAIN -->
  <main>
    <!-- SECTION -->
    <!-- SECTION SETTINGS -->
    <section>
      <!-- SEPARATEUR -->
      <div class="separator rounded bg-dark mt-5 mb-5"></div>
      <div class="settings">
        <h2 class="fs-1 mt-5">Paramètres du compte</h2>
        <!-- SEPARATEUR - icons -->
        <div class="star-icon"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <!-- SEPARATEUR -->
        <div class="separator rounded bg-dark mt-5 mb-5"></div>
    </section>
  </main>
  <!-- FOOTER -->
  <footer>
    <div class="footer-link mt-2"><a href="./notice.php"><i class="fa-solid fa-grip-lines-vertical me-2"></i>Mentions
        légales<i class="fa-solid fa-grip-lines-vertical ms-2"></i></a><a href="./contact.php"><i
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
  <script src="../assets/js/app.js"></script>

</body>

</html>