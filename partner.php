<?php
session_start();
if (!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']) {
  header('Location: index.php');
  die;
}
include('./_includes/connect/db.php');
include('./_includes/functions.php');
$title = "Formation&co";
$actor = get_actor($_GET['id']);
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
    <!-- SECTION PARTNER-PRESENTATION -->
    <section class="partner-presentation">
      <div><img src="../assets/img/formation_co.png" class="img-fluid rounded mt-5" alt="Logo Formation&co"></div>
      <!-- SEPARATEUR -->
      <div class="separator rounded  bg-dark mt-5 mb-5"></div>
      <h2 class="fs-1">Formation&co</h2>
      <!-- SEPARATEUR - icons -->
      <div class="star-icon mt-5"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
      <!-- SEPARATEUR -->
      <div class="separator rounded  bg-dark mt-5 mb-5"></div>
      <p><strong>Formation&co</strong> est une association française présente sur tout le territoire.</br></br>
        Nous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un
        accompagnement professionnel et personnalisé.</br></br>
        Notre proposition :</br>
         ● un financement jusqu’à 30 000€ ;</br>
         ● un suivi personnalisé et gratuit ;</br>
         ● une lutte acharnée contre les freins sociétaux et les stéréotypes.</br></br>

        Le financement est possible, peu importe le métier :</br>
        coiffeur, banquier, éleveur de chèvres… .</br></br>
        <strong>Nous collaborons avec des personnes talentueuses et motivées.</strong></br></br>
        Vous n’avez pas de diplômes ? Ce n’est pas un problème pour nous ! Nos financements s’adressent à tous.
      </p>
      <a class="mb-4" href="#">www.Formation&co.fr</a>
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