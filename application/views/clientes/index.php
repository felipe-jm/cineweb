<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Clientes</h2>

  <div>
    <table>
      <tbody>
        <tr style="text-align:left">
          <th style="width:30%">Nome</th>
          <th>CPF</th> 
          <th>Telefone</th> 
        </tr>
        <?php foreach ($clientes as $cliente) { ?>
          <tr>
            <td><?php if (isset($cliente->nome)) echo htmlspecialchars($cliente->nome, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($cliente->cpf)) echo htmlspecialchars($cliente->cpf, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($cliente->telefone)) echo htmlspecialchars($cliente->telefone, ENT_QUOTES, 'UTF-8'); ?></td>
            <td class="acoes">
              <a href="<?php echo URL_WITH_INDEX_FILE . 'clientes/editar/' . htmlspecialchars($cliente->id, ENT_QUOTES, 'UTF-8'); ?>">
                <img src="<?php echo URL; ?>public/img/icons/edit.svg" alt="Editar" height="28" width="28">
              </a>
            </td>
            <td class="acoes">
              <a href="<?php echo URL_WITH_INDEX_FILE . 'clientes/deletarCliente/' . htmlspecialchars($cliente->id, ENT_QUOTES, 'UTF-8'); ?>">
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
    <a id="novo" class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>clientes/criar">
      Novo
    </a>
  </div>
</div>