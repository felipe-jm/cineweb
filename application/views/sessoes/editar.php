<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Criar sessão</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>sessoes/editarSessao" method="POST">
    <label for="numero">
      Número
      <input id="numero" class="input" type="number" name="numero" required value="<?php echo htmlspecialchars($sessao->numero, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <?php require_once APP . '/views/_components/unidadesSelect.php'; ?>

    <input type="hidden" name="sessao_id" value="<?php echo htmlspecialchars($sessao->id, ENT_QUOTES, 'UTF-8'); ?>" />

    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>sessoes">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="editarSessao" value="Salvar" />
    </div>
  </form>
</div>