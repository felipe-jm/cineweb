<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Editar unidade</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>unidades/editarUnidade" method="POST">
    <label for="nome">
      Nome
      <input id="nome" class="input" type="text" name="nome" required value="<?php echo htmlspecialchars($unidade->nome, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <label for="endereco">
      Endereço
      <input id="endereco" class="input" type="text" name="endereco" required value="<?php echo htmlspecialchars($unidade->endereco, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <?php require_once APP . '/views/_components/cidadesSelect.php'; ?>

    <input type="hidden" name="unidade_id" value="<?php echo htmlspecialchars($unidade->id, ENT_QUOTES, 'UTF-8'); ?>" />

    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>unidades">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="editarUnidade" value="Salvar" />
    </div>
  </form>
</div>