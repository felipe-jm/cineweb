<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Comidas</h2>

  <div>
    <table>
      <tbody>
        <tr style="text-align:left">
          <th style="width:30%">Nome</th>
          <th style="width:30%">Peso</th> 
          <th>Preço</th> 
        </tr>
        <?php foreach ($comidas as $comida) { ?>
          <tr>
            <td><?php if (isset($comida->nome)) echo htmlspecialchars($comida->nome, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($comida->peso)) echo htmlspecialchars($comida->peso, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($comida->preco)) echo htmlspecialchars($comida->preco, ENT_QUOTES, 'UTF-8'); ?></td>
            <td class="acoes">
              <a href="<?php echo URL_WITH_INDEX_FILE . 'comidas/editar/' . htmlspecialchars($comida->id, ENT_QUOTES, 'UTF-8'); ?>">
                <img src="<?php echo URL; ?>public/img/icons/edit.svg" alt="Editar" height="28" width="28">
              </a>
            </td>
            <td class="acoes">
              <a href="<?php echo URL_WITH_INDEX_FILE . 'comidas/deletarComida/' . htmlspecialchars($comida->id, ENT_QUOTES, 'UTF-8'); ?>">
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
    <a id="novo" class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>comidas/criar">
      Novo
    </a>
  </div>
</div>