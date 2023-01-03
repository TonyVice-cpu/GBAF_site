<?php
$comments = get_comments($_GET['id']);
$count_comments = count($comments);
$votes = count_votes($_SESSION['account']['user_id'], $_GET['id']);
?>

<section class="partner-comments mb-5">
  <div class="card">
    <h2 class="card-header"><?= $count_comments ?> COMMENTAIRE(S)</h2>
    <div class="card-header-btn mt-1 ">
      <div><a href="comment.php?id=<?= $_GET['id'] ?>" class="btn btn-dark m-1">Nouveau commentaire</a></div>
      <div class="card-header-avis">
        <form class="d-flex align-items-center gap-1" action="./action/vote.php" method="POST">
          <input type="hidden" name="actor_id" value="<?= $_GET['id'] ?>">
          <div><button type="submit" class="btn btn-dark" name="vote" value="1"><?= $votes['likes'] ?><i class="fa-<?= ($votes['user_vote'] === '1') ? 'solid' : 'regular' ?> fa-thumbs-up ms-2"></i></button></div>
          <div><button type="submit" class="btn btn-dark" name="vote" value="0"><?= $votes['dislikes'] ?><i class="fa-<?= ($votes['user_vote'] === '0') ? 'solid' : 'regular' ?> fa-thumbs-down ms-2"></i></button></div>
        </form>
      </div>
    </div>
    <?php foreach ($comments as $comment) : ?>
      <div class="card-body">
        <h5 class="card-title"><?= htmlspecialchars($comment['first_name']) ?> <?= htmlspecialchars($comment['last_name']) ?></h5>
        <p class="card-text"><?= htmlspecialchars($comment['post']) ?></p>
        <div class="card-footer text-muted text-center"><?= htmlspecialchars($comment['date_add']) ?></div>
      </div>
    <?php endforeach ?>
  </div>
</section>