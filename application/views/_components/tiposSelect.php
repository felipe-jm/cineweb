<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
}
?>

<label for="tipo">
  Tipo
  <select id="tipo" name="tipo" class="input" required>
    <?php if ($tipo == 1) { ?>
      <option value="1" selected>
        Pequeno
      </option>
    <?php } else { ?>
      <option value="1">
        Pequeno
      </option>
    <?php } ?>

    <?php if ($tipo == 2) { ?>
      <option value="2" selected>
        Médio
      </option>
    <?php } else { ?>
      <option value="2">
        Médio
      </option>
    <?php } ?>

    <?php if ($tipo == 3) { ?>
      <option value="3" selected>
        Grande
      </option>
    <?php } else { ?>
      <option value="3">
        Grande
      </option>
    <?php } ?>
  </select>
</label>