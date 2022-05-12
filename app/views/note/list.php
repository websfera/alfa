<ul>
  <?php for($i = 0; $i < count($notes); $i++) : ?>
  <li>
    <a href="<?= $controller->link('note/read') ?>&id=<?= $notes[$i]->getId() ?>">
      <?= $notes[$i]->getTitle() ?>
    </a>
  </li>
  <?php endfor; ?>
</ul>