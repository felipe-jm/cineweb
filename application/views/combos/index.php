<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Combos</h2>

  <div>
    <table>
      <tbody>
        <tr style="text-align:left">
          <th style="width:30%">Nome</th>
          <th>Tipo</th> 
          <th>Preço</th> 
        </tr>      
        <?php foreach ($combos as $combo) { ?>
          <tr>
            <td><?php if (isset($combo->nome)) echo htmlspecialchars($combo->nome, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($combo->tipo)) echo htmlspecialchars($combo->tipo, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($combo->preco)) echo htmlspecialchars($combo->preco, ENT_QUOTES, 'UTF-8'); ?></td>
            <td class="acoes">
              <a href="<?php echo URL_WITH_INDEX_FILE . 'combos/editar/' . htmlspecialchars($combo->id, ENT_QUOTES, 'UTF-8'); ?>">
                <img src="<?php echo URL; ?>public/img/icons/edit.svg" alt="Editar" height="28" width="28">
              </a>
            </td>
            <td class="acoes">
              <a href="<?php echo URL_WITH_INDEX_FILE . 'combos/deletarCombo/' . htmlspecialchars($combo->id, ENT_QUOTES, 'UTF-8'); ?>">
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
    <a id="novo" class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>combos/criar">
      Novo
    </a>
  </div>
</div>