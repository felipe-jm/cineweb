<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Criar filme</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>filmes/criarFilme" method="POST">
    <label for="nome">
      Nome
      <input id="nome" class="input" type="text" name="nome" required>
    </label>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>filmes/criarFilme" method="POST">
    <label for="duracao">
      Duração
      <input id="duracao" class="input" type="number" name="duracao" required>
    </label>

    <form action="<?php echo URL_WITH_INDEX_FILE; ?>filmes/criarFilme" method="POST">
    <label for="categoria">
      Categoria
      <input id="categoria" class="input" type="text" name="duracao" required>
    </label>

    <form action="<?php echo URL_WITH_INDEX_FILE; ?>filmes/criarFilme" method="POST">
    <label for="classificacao">
      Classificação
      <input id="classificacao" class="input" type="number" name="classificacao" required>
    </label>


    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>filmes">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="criarFilme" value="Salvar" />
    </div>
  </form>
</div>