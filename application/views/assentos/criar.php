<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Criar Assento</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>assentos/criarAssento" method="POST">
    <label for="numero">
      Número
      <input id="numero" class="input" type="number" name="numero" required>
    </label>

    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>assentos">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="criarAssento" value="Salvar" />
    </div>
  </form>
</div>