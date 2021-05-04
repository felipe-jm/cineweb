<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
}

require_once APP . 'models/cidade.php';

$cidades = Cidade::all();
?>

<label for="cidade_id">
  Cidade
  <select id="cidade_id" name="cidade_id" class="input" required>
    <?php foreach ($cidades as $cidade) { ?>
      <?php if (isset($default_id) && $default_id == $cidade->id) { ?>
        <option value="<?php echo $cidade->id ?>" selected>
          <?php if (isset($cidade->nome)) echo htmlspecialchars($cidade->nome, ENT_QUOTES, 'UTF-8'); ?>
        </option>
      <?php } else { ?>
        <option value="<?php echo $cidade->id ?>">
          <?php if (isset($cidade->nome)) echo htmlspecialchars($cidade->nome, ENT_QUOTES, 'UTF-8'); ?>
        </option>
      <?php } ?>
    <?php } ?>
  </select>
</label>