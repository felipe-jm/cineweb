<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Criar cidade</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>cidades/criarCidade" method="POST">
    <label for="nome">
      Nome
      <input id="nome" maxlength="200" class="input" type="text" name="nome" required>
    </label>

    <label for="estado">
      Estado
      <input id="estado" maxlength="2" class="input" type="text" name="estado" required style="text-transform: uppercase;">
    </label>

    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>cidades">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="criarCidade" value="Salvar" />
    </div>
  </form>
</div>