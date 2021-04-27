<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container" style="position: relative">
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
   <!-- <button class="btn"><i class="fa fa-home"></i> Home</button> -->
    <button type="button">Novo</button> 
    <button type="button">Voltar</button> 
  </div>
</div>