<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Criar combo</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>combos/editarCombo" method="POST">
    <label for="nome">
      Nome
      <input id="nome" class="input" type="text" name="nome" required value="<?php echo htmlspecialchars($combo->nome, ENT_QUOTES, 'UTF-8'); ?>" maxlength="200">
    </label>

    <?php require_once APP . '/views/_components/tiposSelect.php'; ?>

    <label for="preco">
      Preço
      <input id="preco" class="input" type="number" name="preco" required value="<?php echo htmlspecialchars($combo->preco, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <?php require_once APP . '/views/_components/unidadesSelect.php'; ?>

    <input type="hidden" name="combo_id" value="<?php echo htmlspecialchars($combo->id, ENT_QUOTES, 'UTF-8'); ?>" />

    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>combos">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="editarCombo" value="Salvar" />
    </div>
  </form>
</div>