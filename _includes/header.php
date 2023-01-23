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
      <!-- LOGO -->
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="./index.php">
          <img src="./assets/img/logo.PNG" alt="logo GBAF">
          <h1 class="d-none d-md-block m-0">Le Groupement Banque et Assurance Français</h1>
        </a>
        <!-- MENU -->
        <?php if (verif_session()) : ?>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav flex-column text-center">
              <!-- TEXT -->
              <li class="nav-item">
                <p class="nav-link">Bienvenue, <?= htmlspecialchars($_SESSION['account']['first_name']) ?> <?= htmlspecialchars($_SESSION['account']['last_name']) ?></p>
              </li>
              <!-- LIEN VERS PARAMETRES DU COMPTE -->
              <li class="nav-item">
                <a class="nav-link" href="./settings.php">Paramètres du compte</a>
              </li>
              <!-- LIEN VERS SE DECONNECTER -->
              <li class="nav-item">
                <a class="nav-link" href="./action/logout.php">Se déconnecter</a>
              </li>
            </ul>
          </div>
        <?php endif ?>
      </div>
    </nav>
  </header>
  <!-- Inclusion de l'alerte -->
  <?php
  include('alert.php');
