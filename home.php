<?php
session_start();
if (!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']) {
  header('Location: index.php');
  die;
}
include('./_includes/connect/db.php');
include('./_includes/functions.php');
$title = "Accueil";
$actors = get_actors();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../assets/img/fav_icon.PNG">
  <!-- CSS -->
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
  <!-- inclusion du header -->
  <?php include('./_includes/header.php'); ?>
  <!-- MAIN -->
  <main>
    <!-- SECTIONS -->
    <!-- SECTION PRESENTATION -->
    <section class="presentation mt-5 mb-5">
      <!-- SEPARATEUR -->
      <div class="separator rounded bg-dark mt-5 mb-5"></div>
      <h1 class="fs-1">Présentation du GBAF et du site</h1>
      <!-- SEPARATEUR - icons -->
      <div class="star-icon mb-4"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
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
      <div class="star-icon mb-4"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
      <!-- SEPARATEUR -->
      <div class="separator rounded bg-dark mt-5 mb-5"></div>
      <p>Retrouvez-ici la liste des différents acteurs et partenaires du Groupement Banque et Assurance Français.</p>
      <!-- PARTNER -->
      <?php foreach($actors as $actor): ?>
        <div class="partner">
          <div class="card card mt-5 mb-5">
            <img src="../assets/img/<?= htmlspecialchars($actor['logo']) ?>" alt="logo <?= htmlspecialchars($actor['actor_name']) ?>">
            <div class="card-body rounded-end bg-light">
              <h3 class="card-title"><?= htmlspecialchars($actor['actor_name']) ?></h3>
              <p class="card-text"><?= nl2br(htmlspecialchars(truncate($actor['description'], 80))) ?></p>
              <p class="card-text"><a class="btn btn-dark" href="partner.php?id=<?= $actor['actor_id'] ?>"><small>Lire la suite</small></a>
              </p>
            </div>
          </div>
        </div>
      <?php endforeach ?>
      <!-- SEPARATEUR -->
      <div class="separator rounded  bg-dark mb-4"></div>
      <!-- LOGO -->
      <div class="section-logo"><img src="../assets/img/logo.PNG" alt="Logo GBAF"></div>
    </section>
  </main>
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
  <script src="../assets/js/app.js"></script>

</body>

</html>