<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Criar combo</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>combos/criarCombo" method="POST">
    <label for="nome">
      Nome
      <input id="nome" class="input" type="text" name="nome" required>
    </label>

    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>combos">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="criarCombo" value="Salvar" />
    </div>
  </form>
</div>