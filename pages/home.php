<?php
$title = "Accueil";
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
        <a class="navbar-brand" href="#">
          <img src="../assets/img/logo.PNG" alt="logo GBAF">
          Le Groupement Banque et Assurance Français
        </a>
        <div class="tinynav-logo"><a href="#">
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
              <p class="nav-link-p">Bienvenue, Nom Prénom</p>
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
    <!-- SECTION PRESENTATION -->
    <section class="presentation mt-5 mb-5">
      <!-- SEPARATEUR -->
      <div class="separator rounded bg-dark mt-5 mb-5"></div>
      <h1 class="fs-1">Présentation du GBAF et du site</h1>
      <!-- SEPARATEUR - icons -->
      <div class="star-icon mb-4"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
          class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
      <!-- SEPARATEUR -->
      <div class="separator rounded bg-dark mt-5 mb-5"></div>
      <p>Le <strong>Groupement Banque et Assurance Français (GBAF) </strong>est une fédération représentant les 6 plus
        grands groupes français.</br></br>
        <strong>BNP Paribas, BPCE, Crédit Agricole, Crédit Mutuel - CIC, Société Générale, La Banque
          Postale.</strong></br></br>
        Même si il existe une forte concurrence entre ces entités, elles travaillent toutes de la même façon pour gérer
        près de 80 millions de comptes sur le territoire national.</br></br>
        <strong>Le GBAF</strong> est le représentant de la profession bancaire et des assureurs sur tous les axes de la
        réglementation financière française.</br></br>
        Sa mission est de promouvoir l'activité bancaire à l’échelle nationale.</br></br>
        C’est aussi un interlocuteur privilégié des pouvoirs publics.</br></br>
        Les produits et services bancaires étant très nombreux et très variès, le but du site du <strong>GBAF</strong>
        est de renseigner
        au mieux les clients mais aussi les salariés des 340 agences de banques et assurances en France.</br></br>
        Agents, chargés de clientèle, conseillers financiers, tous recherchent sur Internet des informations portant sur
        des produits bancaires et des financeurs, entre autres.</br></br>
        Aujourd’hui, il n’existe pas de base de données pour chercher ces informations de manière fiable et rapide ou
        pour donner son avis sur les partenaires et acteurs du secteur bancaire, tels que les associations ou les
        financeurs solidaires.</br></br>
        C'est pour remédier à cela que le <strong>Groupement Banque et Assurance Français</strong> souhaite proposer aux
        salariés des grands groupes
        français un point d’entrée unique, répertoriant un grand nombre d’informations sur les partenaires et acteurs du
        groupe ainsi que sur les produits et services bancaires et financiers.</br></br>
        Grâce à l'extranet du <strong>GBAF</strong>, chaque salarié pourra avoir accès à ses informations, poster un
        commentaire et donner son avis.
      </p>
      <!-- LOGO -->
      <div class="section-logo"><img src="../assets/img/logo.PNG" alt="Logo GBAF"></div>
      <!-- SEPARATEUR -->
      <div class="separator rounded bg-dark mb-5"></div>
    </section>
    <!-- SECTION PARTNERS -->
    <section class="partners">
      <h2 class="fs-2">Présentation des acteurs et partenaires</h2>
      <!-- SEPARATEUR - icons -->
      <div class="star-icon mb-4"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
          class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
      <!-- SEPARATEUR -->
      <div class="separator rounded bg-dark mt-5 mb-5"></div>
      <p>Retrouvez-ici la liste des différents acteurs et partenaires du Groupement Banque et Assurance Français.</p>
      <!-- PARTNER -->
      <div class="partner">
        <!-- PARTNER-1 -->
        <div class="card card mt-5 mb-5">
          <img src="../assets/img/formation_co.png" class="img-fluid rounded-start" alt="Logo Formation&co">
          <div class="card-body rounded-end bg-light">
            <h3 class="card-title">Formation&co</h3>
            <p class="card-text"><strong>Formation&co</strong> est une association française présente sur tout le
              territoire. Nous proposons à des personnes issues de tout milieu de devenir entrepreneur ...</p>
            <p class="card-text"><a class="btn btn-dark" href="partner_1.php"><small>Lire la suite</small></a>
            </p>
          </div>
        </div>
        <!-- PARTNER-2 -->
        <div class="card card mb-5">
          <img src="../assets/img/protectpeople.png" class="img-fluid rounded-start" alt="Logo Protectpeople">
          <div class="card-body rounded-end bg-light">
            <h3 class="card-title">Protectpeople</h3>
            <p class="card-text"><strong>Protectpeople</strong> finance la solidarité nationale. Nous appliquons le
              principe édifié par la Sécurité sociale française en 1945 ...</p>
            <p class="card-text"><a class="btn btn-dark" href="partner_2.php"><small>Lire la suite</small></a>
            </p>
          </div>
        </div>
        <!-- SEPARATEUR -->
        <div class="separator rounded  bg-dark mt-5 mb-5"></div>
        <!-- PARTNER-3 -->
        <div class="card card mb-5">
          <img src="../assets/img/Dsa_france.png" class="img-fluid rounded-start" alt="Logo DSA France">
          <div class="card-body rounded-end bg-light">
            <h3 class="card-title">DSA France</h3>
            <p class="card-text"><strong>DSA France</strong> accélère la croissance du territoire et s’engage avec les
              collectivités territoriales. Nous accompagnons les entreprises dans les étapes clés de leur évolution. ...
            </p>
            <p class="card-text"><a class="btn btn-dark" href="partner_3.php"><small>Lire la suite</small></a>
            </p>
          </div>
        </div>
        <!-- PARTNER-4 -->
        <div class="card card mb-5">
          <img src="../assets/img/CDE.png" class="img-fluid rounded-start" alt="Logo CDE">
          <div class="card-body rounded-end bg-light">
            <h3 class="card-title">CDE</h3>
            <p class="card-text"><strong>La CDE (Chambre Des Entrepreneurs) </strong>accompagne les entreprises dans
              leurs démarches de formation ...</p>
            <p class="card-text"><a class="btn btn-dark" href="./partner_4.php"><small>Lire la suite</small></a>
            </p>
          </div>
        </div>
      </div>
      <!-- SEPARATEUR -->
      <div class="separator rounded  bg-dark mb-4"></div>
      <!-- LOGO -->
      <div class="section-logo"><img src="../assets/img/logo.PNG" alt="Logo GBAF"></div>
    </section>
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