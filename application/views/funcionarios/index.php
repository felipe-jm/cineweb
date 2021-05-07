<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Funcionários</h2>

  <div>
    <table>
      <tbody>
        <tr style="text-align:left">
          <th style="width:30%">Nome</th>
          <th>CPF</th> 
          <th>Telefone</th> 
        </tr>
        <?php foreach ($funcionarios as $funcionario) { ?>
          <tr>
            <td><?php if (isset($funcionario->nome)) echo htmlspecialchars($funcionario->nome, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($funcionario->cpf)) echo htmlspecialchars($funcionario->cpf, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($funcionario->telefone)) echo htmlspecialchars($funcionario->telefone, ENT_QUOTES, 'UTF-8'); ?></td>
            <td class="acoes">
              <a href="<?php echo URL_WITH_INDEX_FILE . 'funcionarios/editar/' . htmlspecialchars($funcionario->id, ENT_QUOTES, 'UTF-8'); ?>">
                <img src="<?php echo URL; ?>public/img/icons/edit.svg" alt="Editar" height="28" width="28">
              </a>
            </td>
            <td class="acoes">
              <a href="<?php echo URL_WITH_INDEX_FILE . 'funcionarios/deletarFuncionario/' . htmlspecialchars($funcionario->id, ENT_QUOTES, 'UTF-8'); ?>">
                <img src="<?php echo URL; ?>public/img/icons/trash.svg" alt="Deletar" height="28" width="28">
              </a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <div class="botoes">
    <a id="voltar" class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>">
      Voltar
    </a>
    <a id="novo" class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>funcionarios/criar">
      Novo
    </a>
  </div>
</div>