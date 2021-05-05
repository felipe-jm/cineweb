<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Criar filme</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>filmes/editarFilme" method="POST">
    <label for="nome">
      Nome
      <input id="nome" class="input" type="text" name="nome" required value="<?php echo htmlspecialchars($filme->nome, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <label for="duracao">
      Duracao
      <input id="duracao" class="input" type="int" name="duracao" required value="<?php echo htmlspecialchars($filme->duracao, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <label for="classificacao">
      Classificação
      <input id="classificacao" class="input" type="number" name="classificacao" required value="<?php echo htmlspecialchars($filme->classificacao, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <input type="hidden" name="filme_id" value="<?php echo htmlspecialchars($filme->id, ENT_QUOTES, 'UTF-8'); ?>" />

    <?php require_once APP . '/views/_components/categoriasSelect.php'; ?>

    <?php require_once APP . '/views/_components/sessoesSelect.php'; ?>

    <?php require_once APP . '/views/_components/unidadesSelect.php'; ?>

    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>filmes">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="editarFilme" value="Salvar" />
    </div>
  </form>
</div>