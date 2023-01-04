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
  <title><?= $title ?> - GBAF - Le Groupement Banque et Assurance Français</title>
</head>

<body>
  <!-- HEADER -->
  <header>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">
          <img src="./assets/img/logo.PNG" alt="logo GBAF">
          Le Groupement Banque et Assurance Français
        </a>
        <div class="tinynav-logo"><a href="./index.php">
            <img src="./assets/img/logo.PNG" alt="logo GBAF">
          </a>
          <p>Le Groupement Banque et Assurance Français</p>
        </div>
        <?php if (verif_session()) : ?>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mt-3">
              <li class="nav-item ms-2">
                <p class="nav-link-p">Bienvenue, <?= htmlspecialchars($_SESSION['account']['first_name']) ?> <?= htmlspecialchars($_SESSION['account']['last_name']) ?></p>
              </li>
              <li class="nav-item ms-2">
                <a class="nav-link" href="./settings.php">Paramètres du compte</a>
              </li>
              <li class="nav-item ms-2">
                <a class="nav-link" href="./action/logout.php">Se déconnecter</a>
              </li>
            </ul>
          </div>
        <?php endif ?>
      </div>
    </nav>
  </header>