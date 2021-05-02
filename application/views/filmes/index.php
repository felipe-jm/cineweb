<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <h2>Filmes</h2>

  <div>
    <table>
      <tbody>
        <?php foreach ($filmes as $filme) { ?>
          <tr>
            <td><?php if (isset($filme->nome)) echo htmlspecialchars($filme->nome, ENT_QUOTES, 'UTF-8'); ?></td>
            <td class="acoes">
              <a href="<?php echo URL_WITH_INDEX_FILE . 'filmes/editar/' . htmlspecialchars($filme->id, ENT_QUOTES, 'UTF-8'); ?>">
                <img src="<?php echo URL; ?>public/img/icons/edit.svg" alt="Editar" height="28" width="28">
              </a>
            </td>
            <td class="acoes">
              <a href="<?php echo URL_WITH_INDEX_FILE . 'filmes/deletarFilme/' . htmlspecialchars($filme->id, ENT_QUOTES, 'UTF-8'); ?>">
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
    <a id="novo" class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>filmes/criar">
      Novo
    </a>
  </div>
</div>