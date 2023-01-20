<?php
// récupération des commentaires en rapport avec l'id du partenaire
$comments = get_comments($_GET['id']);
// compte des commentaires
$count_comments = count($comments);
// comptes des votes en prenant compte de l'utilisateur connecté
$votes = count_votes($_SESSION['account']['user_id'], $_GET['id']);
?>

<section class="partner-comments mb-5">
  <!-- CARTES COMMENTS-->
  <div class="card">
    <!-- CARTES COMMENTS-HEADER -->
    <h2 class="card-header"><?= $count_comments ?> COMMENTAIRE(S)</h2>
    <div class="card-header-btn mt-2 mb-3">
      <div><a href="comment.php?id=<?= $_GET['id'] ?>" class="btn btn-dark m-1">Nouveau commentaire</a></div>
      <div class="card-header-avis">
        <form class="d-flex align-items-center gap-1" action="./action/vote.php" method="POST">
          <input type="hidden" name="actor_id" value="<?= $_GET['id'] ?>">
          <div><button type="submit" class="btn btn-dark" name="vote" value="1"><?= $votes['likes'] ?><i class="fa-<?= ($votes['user_vote'] === '1') ? 'solid' : 'regular' ?> fa-thumbs-up ms-2"></i></button></div>
          <div><button type="submit" class="btn btn-dark" name="vote" value="0"><?= $votes['dislikes'] ?><i class="fa-<?= ($votes['user_vote'] === '0') ? 'solid' : 'regular' ?> fa-thumbs-down ms-2"></i></button></div>
        </form>
      </div>
    </div>
    <!-- CARTES COMMENTS-BODY -->
    <?php foreach ($comments as $comment) : ?>
      <div class="card-body p-0">
        <h5 class="card-title bg-light border-top p-2"><?= htmlspecialchars($comment['first_name']) ?> <?= htmlspecialchars($comment['last_name']) ?></h5>
        <p class="card-text p-2"><?= htmlspecialchars($comment['post']) ?></p>
        <div class="card-date text-muted p-2"><?= htmlspecialchars($comment['date_add']) ?></div>
      </div>
    <?php endforeach ?>
  </div>
</section>