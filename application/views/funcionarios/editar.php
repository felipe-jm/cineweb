<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Criar funcionário</h2>

  <form action="<?php echo URL_WITH_INDEX_FILE; ?>funcionarios/editarFuncionario" method="POST">
    <label for="nome">
      Nome
      <input id="nome" class="input" type="text" name="nome" required value="<?php echo htmlspecialchars($funcionario->nome, ENT_QUOTES, 'UTF-8'); ?>">
    </label>
    
  <form action="<?php echo URL_WITH_INDEX_FILE; ?>funcionarios/criarFuncionario" method="POST">
    <label for="cpf">
      CPF
      <input id="cpf" class="input" type="string" name="cpf" required value="<?php echo htmlspecialchars($funcionario->cpf, ENT_QUOTES, 'UTF-8'); ?>">
    </label>
  
  <form action="<?php echo URL_WITH_INDEX_FILE; ?>funcionarios/criarFuncionario" method="POST">
    <label for="telefone">
      Telefone
      <input id="telefone" class="input" type="string" name="telefone" required value="<?php echo htmlspecialchars($funcionario->telefone, ENT_QUOTES, 'UTF-8'); ?>">
    </label>
    
    <div class="botoes">
      <a class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>funcionarios">
        Cancelar
      </a>
      <input class="btn submitBtn" type="submit" name="editarFuncionario" value="Salvar" />
    </div>
  </form>
</div>