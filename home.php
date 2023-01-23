<?php
// ATTENTION CETTE PAGE PEUT ETRE ATTEINTE SEULEMENT UNE FOIS CONNECTE
// inclusion du common
include('./_includes/common.php');
// vérification de l'authentification
protected_session();
// récupération de la liste des acteurs
$actors = get_actors();
// déclaration du titre de page dans l'onglet de navigateur
$title = "Accueil";
// inclusion du header
include('./_includes/header.php')
?>
<!-- MAIN -->
<main>
  <!-- SECTIONS -->
  <!-- SECTION PRESENTATION -->
  <section class="presentation my-5">
    <!-- TITRE -->
    <h2 class="fs-1 fw-bold text-uppercase my-3 mt-xl-5">Qui sommes-nous ?</h2>
    <!-- PARAGRAPHE -->
    <p><i class="fa-solid fa-circle me-2"></i>Le <span class="fw-bold">Groupement Banque et Assurance Français (GBAF) </span>est une fédération représentant <span class="fw-bold">les 6 plus grands groupes français.</span></p>
    <p><i class="fa-solid fa-circle me-2"></i><span class="fw-bold">BNP Paribas, BPCE, Crédit Agricole, Crédit Mutuel - CIC, Société Générale, La Banque Postale.</span></p>
    <p><i class="fa-solid fa-circle me-2"></i>Même si il existe une forte concurrence entre ces entités, elles travaillent toutes de la même façon pour gérer
      près de 80 millions de comptes sur le territoire national.</p>
    <p><i class="fa-solid fa-circle me-2"></i><span class="fw-bold">Le GBAF</span> est le représentant de la profession bancaire et des assureurs sur tous les axes de la réglementation financière française.</p>
    <p><i class="fa-solid fa-circle me-2"></i>Sa mission est de promouvoir l'activité bancaire à l’échelle nationale.</p>
    <p><i class="fa-solid fa-circle me-2"></i>C’est aussi un interlocuteur privilégié des pouvoirs publics.</p>
    <p><i class="fa-solid fa-circle me-2"></i>Les produits et services bancaires étant très nombreux et très variès, le but du site du <span class="fw-bold">GBAF</span> est de renseigner au mieux les clients mais aussi les salariés des 340 agences de banques et assurances en France.</p>
    <p><i class="fa-solid fa-circle me-2"></i>Agents, chargés de clientèle, conseillers financiers, tous recherchent sur Internet des informations portant sur des produits bancaires et des financeurs, entre autres.</p>
    <p><i class="fa-solid fa-circle me-2"></i>Aujourd’hui, il n’existe pas de base de données pour chercher ces informations de manière fiable et rapide ou pour donner son avis sur les partenaires et acteurs du secteur bancaire, tels que les associations ou les financeurs solidaires.</p>
    <p><i class="fa-solid fa-circle me-2"></i>C'est pour remédier à cela que le <span class="fw-bold">Groupement Banque et Assurance Français</span> souhaite proposer aux salariés des grands groupes français un point d’entrée unique, répertoriant un grand nombre d’informations sur les partenaires et acteurs du groupe ainsi que sur les produits et services bancaires et financiers.</p>
    <p><i class="fa-solid fa-circle me-2"></i>Grâce à l'extranet du <span class="fw-bold">GBAF</span>, chaque salarié pourra avoir accès à ses informations, poster un commentaire et donner son avis.</p>
    <!-- LOGO -->
    <figure class="section-logo text-center my-5">
      <img src="./assets/img/logo.PNG" alt="Logo GBAF">
      <figcaption class="mt-3 fw-bold text-center">Le Groupement Banque et Assurances Français</figcaption>
    </figure>
    <!-- SEPARATEUR -->
    <div class="separator rounded bg-dark my-5"></div>
  </section>
  <!-- SECTION PARTNERS -->
  <section class="partners">
    <!-- TITRE -->
    <h2 class="fs-1 fw-bold text-uppercase my-3 mt-xl-5">Acteurs et partenaires</h2>
    <!-- CARTES PARTNER -->
    <?php foreach ($actors as $actor) : ?>
      <aside class="partner">
        <div class="card flex-lg-row my-5 overflow-hidden">
          <img src="./assets/img/<?= htmlspecialchars($actor['logo']) ?>" alt="logo <?= htmlspecialchars($actor['actor_name']) ?>">
          <div class="card-body rounded-end bg-light">
            <h3 class="card-title fw-bold text-uppercase mb-5"><?= htmlspecialchars($actor['actor_name']) ?></h3>
            <p class="card-text"><?= htmlspecialchars(truncate($actor['description'], 120)) ?></p>
            <a href="#">www.<?= htmlspecialchars($actor['actor_name']) ?>.fr</a>
            <p class="card-text d-flex justify-content-end"><a class="btn btn-dark" href="partner.php?id=<?= $actor['actor_id'] ?>"><small>Lire la suite</small></a>
            </p>
          </div>
        </div>
      </aside>
    <?php endforeach ?>
  </section>
</main>
<!-- FOOTER -->
<!-- inclusion du footer -->
<?php include('./_includes/footer.php'); ?>