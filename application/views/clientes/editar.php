<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Criar cliente</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>clientes/editarCliente" method="POST">
    <label for="nome">
      Nome
      <input id="nome" class="input" type="text" name="nome" required value="<?php echo htmlspecialchars($cliente->nome, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>clientes">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="editarCliente" value="Salvar" />
    </div>
  </form>
</div>