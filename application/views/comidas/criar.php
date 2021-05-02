<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Criar comida</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>comidas/criarComida" method="POST">
    <label for="nome">
      Nome
      <input id="nome" class="input" type="text" name="nome" required>
    </label>
  
  <form action="<?php echo URL_WITH_INDEX_FILE; ?>comidas/criarComida" method="POST">
    <label for="peso">
      Peso
      <input id="peso" class="input" type="number" name="peso" required>
    </label>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>comidas/criarComida" method="POST">
    <label for="preco">
      Preço
      <input id="preco" class="input" type="number" name="preco" required>
    </label>

    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>comidas">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="criarComida" value="Salvar" />
    </div>
  </form>
</div>