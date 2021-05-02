<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Criar filme</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>filmes/editarFilme" method="POST">
    <label for="nome">
      Nome
      <input id="nome" class="input" type="text" name="nome" required value="<?php echo htmlspecialchars($filme->nome, ENT_QUOTES, 'UTF-8'); ?>">
    </label>
  
  <form action="<?php echo URL_WITH_INDEX_FILE; ?>filmes/editarFilme" method="POST">
    <label for="duracao">
      Duracao
      <input id="duracao" class="input" type="int" name="duracao" required value="<?php echo htmlspecialchars($filme->duracao, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <form action="<?php echo URL_WITH_INDEX_FILE; ?>filmes/criarFilme" method="POST">
    <label for="categoria">
      Categoria
      <input id="categoria" class="input" type="text" name="duracao" required value="<?php echo htmlspecialchars($filme->categoria, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <form action="<?php echo URL_WITH_INDEX_FILE; ?>filmes/criarFilme" method="POST">
    <label for="classificacao">
      Classificação
      <input id="classificacao" class="input" type="number" name="classificacao" required value="<?php echo htmlspecialchars($filme->classificacao, ENT_QUOTES, 'UTF-8'); ?>">
    </label>

    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>filmes">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="editarFilme" value="Salvar" />
    </div>
  </form>
</div>