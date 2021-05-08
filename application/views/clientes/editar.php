<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Criar cliente</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>clientes/editarCliente" method="POST">
    <label for="nome">
      Nome
      <input id="nome" class="input" type="text" name="nome" required value="<?php echo htmlspecialchars($cliente->nome, ENT_QUOTES, 'UTF-8'); ?>" maxlength="200">
    </label>

    <label for="cpf">
      CPF
      <input id="cpf" class="input" type="string" name="cpf" required value="<?php echo htmlspecialchars($cliente->cpf, ENT_QUOTES, 'UTF-8'); ?>" maxlength="11">
    </label>

    <label for="telefone">
      Telefone
      <input id="telefone" class="input" type="string" name="telefone" required value="<?php echo htmlspecialchars($cliente->telefone, ENT_QUOTES, 'UTF-8'); ?>" maxlength="11">
    </label>

    <?php require_once APP . '/views/_components/unidadesSelect.php'; ?>

    <input type="hidden" name="cliente_id" value="<?php echo htmlspecialchars($cliente->id, ENT_QUOTES, 'UTF-8'); ?>" />

    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>clientes">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="editarCliente" value="Salvar" />
    </div>
  </form>
</div>