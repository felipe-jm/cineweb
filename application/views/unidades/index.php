<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Unidades</h2>

  <div>
    <table>
      <tbody>
        <tr style="text-align:left">
          <th style="width:45%">Unidade</th>
          <th>Endereço</th> 
        </tr>
        <?php foreach ($unidades as $unidade) { ?>
          <tr>
            <td><?php if (isset($unidade->nome)) echo htmlspecialchars($unidade->nome, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($unidade->endereco)) echo htmlspecialchars($unidade->endereco, ENT_QUOTES, 'UTF-8'); ?></td>
            <td class="acoes">
              <a href="<?php echo URL_WITH_INDEX_FILE . 'unidades/editar/' . htmlspecialchars($unidade->id, ENT_QUOTES, 'UTF-8'); ?>">
                <img src="<?php echo URL; ?>public/img/icons/edit.svg" alt="Editar" height="28" width="28">
              </a>
            </td>
            <td class="acoes">
              <a href="<?php echo URL_WITH_INDEX_FILE . 'unidades/deletarUnidade/' . htmlspecialchars($unidade->id, ENT_QUOTES, 'UTF-8'); ?>">
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
    <a id="novo" class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>unidades/criar">
      Novo
    </a>
  </div>
</div>