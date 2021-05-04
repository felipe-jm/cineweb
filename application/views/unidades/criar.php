<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Criar unidade</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>unidades/criarUnidade" method="POST">
    <label for="nome">
      Nome
      <input id="nome" class="input" type="text" name="nome" required>
    </label>

    <label for="endereco">
      Endereço
      <input id="endereco" class="input" type="text" name="endereco" required>
    </label>

    <?php require_once APP . '/views/_components/cidadesSelect.php'; ?>

    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>unidades">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="criarUnidade" value="Salvar" />
    </div>
  </form>
</div>