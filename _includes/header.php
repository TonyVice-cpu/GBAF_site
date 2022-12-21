<header>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/assets/img/logo.PNG" alt="logo GBAF">
        Le Groupement Banque et Assurance Français
      </a>
      <div class="tinynav-logo"><a href="#">
          <img src="/assets/img/logo.PNG" alt="logo GBAF">
        </a>
        <p>Le Groupement Banque et Assurance Français</p>
      </div>
      <?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) : ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mt-3">
            <li class="nav-item ms-2">
              <p class="nav-link-p">Bienvenue, <?= $_SESSION['account']['first_name'] ?> <?= $_SESSION['account']['last_name'] ?></p>
            </li>
            <li class="nav-item ms-2">
              <a class="nav-link" href="/settings.php">Paramètres du compte</a>
            </li>
            <li class="nav-item ms-2">
              <a class="nav-link" href="/do_logout.php">Se déconnecter</a>
            </li>
          </ul>
        </div>
      <?php endif ?>
    </div>
  </nav>
</header>