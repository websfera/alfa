<a href="<?= $controller->link('note/list') ?>">&lt;- Zpět na seznam</a>

<h1><?= $note->getTitle() ?></h1>
<h4><?= $note->getAuthor() ?></h4>
<span class="text-muted"><?= $note->getDateCreatedFormatted() ?></span>

<p>
  <?= $note->getText() ?>
</p>