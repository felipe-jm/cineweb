<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
}

require_once APP . 'models/sessao.php';

$sessoes = Sessao::all();
?>

<label for="sessao_id">
  Sessão
  <select id="sessao_id" name="sessao_id" class="input" required>
    <?php foreach ($sessoes as $sessao) { ?>
      <?php if (isset($sessao_id) && $sessao_id == $sessao->id) { ?>
        <option value="<?php echo $sessao->id ?>" selected>
          <?php if (isset($sessao->numero)) echo htmlspecialchars($sessao->numero, ENT_QUOTES, 'UTF-8'); ?>
        </option>
      <?php } else { ?>
        <option value="<?php echo $sessao->id ?>">
          <?php if (isset($sessao->numero)) echo htmlspecialchars($sessao->numero, ENT_QUOTES, 'UTF-8'); ?>
        </option>
      <?php } ?>
    <?php } ?>
  </select>
</label>