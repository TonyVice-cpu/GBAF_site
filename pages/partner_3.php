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
  <title>GBAF - Le Groupement Banque et Assurance Français - DSA France</title>
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
              <a class="nav-link" href="./settings.php">Paramètres du compte</a>
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
    <!-- SECTIONS -->
    <!-- SECTION PARTNER-PRESENTATION -->
    <section class="partner-presentation">
      <div><img src="../assets/img/Dsa_france.png" class="img-fluid rounded mt-5" alt="Logo DSA France"></div>
      <!-- SEPARATEUR -->
      <div class="separator rounded  bg-dark mt-5 mb-5"></div>
      <h2 class="fs-1">DSA France</h2>
      <!-- SEPARATEUR - icons -->
      <div class="star-icon mt-5"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
          class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
      <!-- SEPARATEUR -->
      <div class="separator rounded  bg-dark mt-5 mb-5"></div>
      <p><strong>DSA France</strong> accélère la croissance du territoire et s’engage avec les collectivités
        territoriales.</br></br>
        Nous accompagnons les entreprises dans les étapes clés de leur évolution.</br></br>
        <strong>Notre philosophie : s’adapter à chaque entreprise.</strong></br></br>
        Nous les accompagnons pour voir plus grand et plus loin et proposons des solutions de financement adaptées à
        chaque étape de la vie des entreprises.
      </p>
      <a class="mb-4" href="#">www.DSA France.fr</a>
    </section>
    <!-- SEPARATEUR -->
    <div class="separator rounded  bg-dark mt-5 mb-5"></div>
    <!-- SECTION PARTNER-COMMENTS -->
    <section class="partner-comments mb-5">
      <div class="card">
        <h2 class="card-header">COMMENTAIRES</h2>
        <div class="card-header-btn mt-1 ">
          <div><a href="./comment.php" class="btn btn-dark m-1">Nouveau commentaire</a></div>
          <div class="card-header-avis">
            <div><a href="#" class="btn btn-dark m-1"><i class="fa-regular fa-thumbs-up"></i></a></div>
            <div><a href="#" class="btn btn-dark m-1"><i class="fa-regular fa-thumbs-down"></i></a></div>
          </div>
        </div>
        <div class="card-body">
          <h5 class="card-title">Prénom Date</h5>
          <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit architecto magni
            inventore eaque officiis quam laudantium ad, dolores expedita molestiae iure doloribus sapiente, nostrum
            blanditiis.
          </p>
          <div class="card-footer text-muted text-center">2 days ago
          </div>
          <h5 class="card-title">Prénom Date</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa natus delectus impedit
            soluta, est fugit.</p>
          <div class="card-footer text-muted text-center">2 days ago
          </div>
          <h5 class="card-title">Prénom Date</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse minus nulla inventore
            tempora aut fuga. Asperiores perspiciatis perferendis ipsum cum, error veniam minus excepturi quam
            architecto nam eum neque quidem aut molestiae et maiores voluptate vitae facere deleniti velit eius
            voluptatum. Autem neque, doloribus incidunt deleniti voluptatum harum. Molestiae, temporibus.</p>
          <div class="card-footer text-muted text-center">2 days ago
          </div>
        </div>
      </div>
    </section>
    <!-- SEPARATEUR -->
    <div class="separator rounded  bg-dark mt-5 mb-5"></div>
    <!-- LOGO -->
    <div class="section-logo"><img src="../assets/img/logo.PNG" alt="Logo GBAF"></div>
  </main>
  <!-- FOOTER -->
  <footer>
    <div class="footer-link mt-2"><a href="./notice.php"><i class="fa-solid fa-grip-lines-vertical me-2"></i>Mentions légales<i
          class="fa-solid fa-grip-lines-vertical ms-2"></i></a><a href="./contact.php"><i
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