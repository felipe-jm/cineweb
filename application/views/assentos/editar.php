<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Editar assento</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>assentos/editarAssento" method="POST">
    <label for="numero">
      Número
      <input id="numero" class="input" type="number" name="numero" required value="<?php echo htmlspecialchars($assento->numero, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <label for="disponivel">
      Disponível
      <input id="disponivel" type="checkbox" name="disponivel" value="<?php echo isset($assento->disponivel) && htmlspecialchars($assento->disponivel, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <?php require_once APP . '/views/_components/unidadesSelect.php'; ?>

    <?php require_once APP . '/views/_components/clientesSelect.php'; ?>

    <?php require_once APP . '/views/_components/sessoesSelect.php'; ?>

    <input type="hidden" name="assento_id" value="<?php echo htmlspecialchars($assento->id, ENT_QUOTES, 'UTF-8'); ?>" />

    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>assentos">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="editarAssento" value="Salvar" />
    </div>
  </form>
</div>