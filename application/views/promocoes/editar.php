<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Criar promoção</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>promocoes/editarPromocao" method="POST">
    <label for="nome">
      Nome
      <input id="nome" class="input" type="text" name="nome" required value="<?php echo htmlspecialchars($promocao->nome, ENT_QUOTES, 'UTF-8'); ?>" maxlength="200">
    </label>

    <label for="data_inicio">
      Data inicial
      <input id="data_inicio" class="input" type="date" name="data_inicio" required value="<?php echo htmlspecialchars($promocao->data_inicio, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <label for="data_fim">
      Data término
      <input id="data_fim" class="input" type="date" name="data_fim" required value="<?php echo htmlspecialchars($promocao->data_fim, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <label for="preco">
      Preço
      <input id="preco" class="input" type="number" name="preco" required value="<?php echo htmlspecialchars($promocao->preco, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <?php require_once APP . '/views/_components/unidadesSelect.php'; ?>

    <input type="hidden" name="promocao_id" value="<?php echo htmlspecialchars($promocao->id, ENT_QUOTES, 'UTF-8'); ?>" />

    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>promocoes">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="editarPromocao" value="Salvar" />
    </div>
  </form>
</div>