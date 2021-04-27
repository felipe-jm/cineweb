<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Editar assento</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>assentos/editarAssento" method="POST">
    <label for="numero">
      Número
      <input id="numero" class="input" type="number" name="numero" required value="<?php echo htmlspecialchars($assento->numero, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>assentos">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="editarAssento" value="Salvar" />
    </div>
  </form>
</div>