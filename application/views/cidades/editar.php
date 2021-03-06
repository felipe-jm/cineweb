<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Editar cidade</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>cidades/editarCidade" method="POST">
    <label for="nome">
      Nome
      <input id="nome" class="input" maxlength="200" type="text" name="nome" required value="<?php echo htmlspecialchars($cidade->nome, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <label for="estado">
      Estado
      <input id="estado" maxlength="2" class="input" type="string" name="estado" required value="<?php echo htmlspecialchars($cidade->estado, ENT_QUOTES, 'UTF-8'); ?>" style="text-transform: uppercase;">
    </label>

    <input type="hidden" name="cidade_id" value="<?php echo htmlspecialchars($cidade->id, ENT_QUOTES, 'UTF-8'); ?>" />

    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>cidades">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="editarCidade" value="Salvar" />
    </div>
  </form>
</div>