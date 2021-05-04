<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
}

require_once APP . 'models/unidade.php';

$unidades = Unidade::all();
?>

<label for="unidade_id">
  Unidade
  <select id="unidade_id" name="unidade_id" class="input" required>
    <?php foreach ($unidades as $unidade) { ?>
      <?php if (isset($default_id) && $default_id == $unidade->id) { ?>
        <option value="<?php echo $unidade->id ?>" selected>
          <?php if (isset($unidade->nome)) echo htmlspecialchars($unidade->nome, ENT_QUOTES, 'UTF-8'); ?>
        </option>
      <?php } else { ?>
        <option value="<?php echo $unidade->id ?>">
          <?php if (isset($unidade->nome)) echo htmlspecialchars($unidade->nome, ENT_QUOTES, 'UTF-8'); ?>
        </option>
      <?php } ?>
    <?php } ?>
  </select>
</label>