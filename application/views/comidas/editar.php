<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Criar comida</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>comidas/editarComida" method="POST">
    <label for="nome">
      Nome
      <input id="nome" class="input" type="text" name="nome" required value="<?php echo htmlspecialchars($comida->nome, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <label for="peso">
      Peso
      <input id="peso" class="input" type="number" name="peso" required value="<?php echo htmlspecialchars($comida->peso, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <label for="preco">
      Preço
      <input id="preco" class="input" type="number" name="preco" required value="<?php echo htmlspecialchars($comida->preco, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <?php require_once APP . '/views/_components/unidadesSelect.php'; ?>

    <input type="hidden" name="comida_id" value="<?php echo htmlspecialchars($comida->id, ENT_QUOTES, 'UTF-8'); ?>" />

    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>comidas">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="editarComida" value="Salvar" />
    </div>
  </form>
</div>