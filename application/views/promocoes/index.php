<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Promoções</h2>

  <div>
    <table>
      <tbody>
        <tr style="text-align:left">
          <th>Nome</th>
          <th>Data inicial</th> 
          <th>Data final</th> 
        </tr>
        <?php foreach ($promocoes as $promocao) { ?>
          <tr>
            <td><?php if (isset($promocao->nome)) echo htmlspecialchars($promocao->nome, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($promocao->data_inicio)) echo htmlspecialchars($promocao->data_inicio, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($promocao->data_fim)) echo htmlspecialchars($promocao->data_fim, ENT_QUOTES, 'UTF-8'); ?></td>
            <td class="acoes">
              <a href="<?php echo URL_WITH_INDEX_FILE . 'promocoes/editar/' . htmlspecialchars($promocao->id, ENT_QUOTES, 'UTF-8'); ?>">
                <img src="<?php echo URL; ?>public/img/icons/edit.svg" alt="Editar" height="28" width="28">
              </a>
            </td>
            <td class="acoes">
              <a href="<?php echo URL_WITH_INDEX_FILE . 'promocoes/deletarPromocao/' . htmlspecialchars($promocao->id, ENT_QUOTES, 'UTF-8'); ?>">
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
    <a id="novo" class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>promocoes/criar">
      Novo
    </a>
  </div>
</div>