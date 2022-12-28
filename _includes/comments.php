<?php
$comments = get_comments($_GET['id']);
$count_comments = count($comments);
?>

<section class="partner-comments mb-5">
  <div class="card">
    <h2 class="card-header"><?= $count_comments ?> COMMENTAIRE(S)</h2>
    <div class="card-header-btn mt-1 ">
      <div><a href="comment.php?id=<?= $_GET['id'] ?>" class="btn btn-dark m-1">Nouveau commentaire</a></div>
      <div class="card-header-avis">
        <form action="./action/vote.php" method="POST">
          <input type="hidden" name="actor_id" value="<?= $_GET['id'] ?>">
          <div><button type="submit" class="btn btn-dark m-1" name="vote" value="1"><i class="fa-regular fa-thumbs-up"></i></button></div>
          <div><button type="submit" class="btn btn-dark m-1" name="vote" value="0"><i class="fa-regular fa-thumbs-down"></i></button></div>
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