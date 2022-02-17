<h1><?= $note->getTitle() ?></h1>
<h4><?= $note->getAuthor() ?></h4>
<span class="text-muted"><?= $note->getDateCreatedFormatted() ?></span>

<p>
  <?= $note->getText() ?>
</p>