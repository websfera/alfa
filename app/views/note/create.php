<h1>Nová poznámka</h1>

<form action="<?= $controller->link('note/save') ?>">
  
  <label for="title">Titulek: *</label>
  <input type="text" id="title" name="title" required>
  <br><br>
  <label for="text">Text: *</label>
  <textarea name="text" id="text" required></textarea>
  <br><br>
  <button type="submit">Uložit</button>
  
</form>