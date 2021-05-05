<?php if (!$this) {
  exit(header('HTTP/1.0 403 Forbidden'));
}
?>

<label for="categoria">
  Categoria
  <select id="categoria" name="categoria" class="input" required>
    <?php if ($categoria == "Ação") { ?>
      <option value="Ação" selected>
        Ação
      </option>
    <?php } else { ?>
      <option value="Ação">
        Ação
      </option>
    <?php } ?>

    <?php if ($categoria == "Aventura") { ?>
      <option value="Aventura" selected>
        Aventura
      </option>
    <?php } else { ?>
      <option value="Aventura">
        Aventura
      </option>
    <?php } ?>

    <?php if ($categoria == "Comédia romântica") { ?>
      <option value="Comédia romântica" selected>
        Comédia romântica
      </option>
    <?php } else { ?>
      <option value="Comédia romântica">
        Comédia romântica
      </option>
    <?php } ?>

    <?php if ($categoria == "Ficção científica") { ?>
      <option value="Ficção científica" selected>
        Ficção científica
      </option>
    <?php } else { ?>
      <option value="Ficção científica">
        Ficção científica
      </option>
    <?php } ?>

    <?php if ($categoria == "Terror") { ?>
      <option value="Terror" selected>
        Terror
      </option>
    <?php } else { ?>
      <option value="Terror">
        Terror
      </option>
    <?php } ?>
  </select>
</label>