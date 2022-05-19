<form method="post" action="<?= $controller->link('sign/proccess') ?>">
  <h2>Prihlášení</h2>
  <label for="emailInput">Email: * </label>
  <input type="text" name="email" id="emailInput" required autofocus>
  <br>
  <label for="passInput">Heslo: * </label>
  <input type="password" name="password" id="passInput" required>
  <br>
  <button type="submit">Přihlásit</button>
</form>