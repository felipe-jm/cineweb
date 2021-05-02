<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Criar sessão</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>sessoes/criarSessao" method="POST">
    <label for="numero">
      Número
      <input id="numero" class="input" type="text" name="numero" required>
    </label>
  
    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>sessoes">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="criarSessao" value="Salvar" />
    </div>
  </form>
</div>