<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
}

require_once APP . 'models/cliente.php';

$clientes = Cliente::all();
?>

<label for="cliente_id">
  Cliente
  <select id="cliente_id" name="cliente_id" class="input" required>
    <?php foreach ($clientes as $cliente) { ?>
      <?php if (isset($default_id) && $default_id == $cliente->id) { ?>
        <option value="<?php echo $cliente->id ?>" selected>
          <?php if (isset($cliente->nome)) echo htmlspecialchars($cliente->nome, ENT_QUOTES, 'UTF-8'); ?>
        </option>
      <?php } else { ?>
        <option value="<?php echo $cliente->id ?>">
          <?php if (isset($cliente->nome)) echo htmlspecialchars($cliente->nome, ENT_QUOTES, 'UTF-8'); ?>
        </option>
      <?php } ?>
    <?php } ?>
  </select>
</label>