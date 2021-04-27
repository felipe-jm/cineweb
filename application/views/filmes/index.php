<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container" style="position: relative">
  <h2>Filmes</h2>

  <div>
    <table>

      <tbody>
        <tr>
          <td>
            Cuiabá
          </td>
          <td class="acoes">
            <img src="<?php echo URL; ?>public/img/icons/edit.svg" alt="Editar" height="28" width="28">
          </td>
          <td class="acoes">
            <img src="<?php echo URL; ?>public/img/icons/trash.svg" alt="Deletar" height="28" width="28">
          </td>
        </tr>
        <tr>
          <td>
            Sinop
          </td>
          <td class="acoes">
            <img src="<?php echo URL; ?>public/img/icons/edit.svg" alt="Editar" height="28" width="28">
          </td>
          <td class="acoes">
            <img src="<?php echo URL; ?>public/img/icons/trash.svg" alt="Deletar" height="28" width="28">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="botoes">
    <a id="voltar" class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>">
      Voltar
    </a>
    <a id="novo" class="btn" href="<?php echo URL_WITH_INDEX_FILE; ?>criar">
      Novo
    </a>
  </div>
</div>