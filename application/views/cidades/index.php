<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
  <div>
    <table>
      <thead>
        <tr>
          <th>
            Nome
          </th>
          <th>
            Editar
          </th>
          <th>
            Deletar
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            Fulano de tal
          </td>
          <td>
            <img src="<?php echo URL; ?>public/img/icons/edit.svg" alt="Editar" height="32" width="32">
          </td>
          <td>
            <img src="<?php echo URL; ?>public/img/icons/trash.svg" alt="Deletar" height="32" width="32">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>