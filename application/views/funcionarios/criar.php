<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Criar funcionário</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>funcionarios/criarFuncionario" method="POST">
    <label for="nome">
      Nome
      <input id="nome" class="input" type="text" name="nome" required maxlength="200">
    </label>

    <label for="cpf">
      CPF
      <input id="cpf" class="input" type="string" name="cpf" required maxlength="11">
    </label>

    <label for="telefone">
      Telefone
      <input id="telefone" class="input" type="string" name="telefone" required maxlength="11">
    </label>

    <?php require_once APP . '/views/_components/unidadesSelect.php'; ?>

    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>funcionarios">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="criarFuncionario" value="Salvar" />
    </div>
  </form>
</div>