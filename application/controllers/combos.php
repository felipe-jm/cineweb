<?php

require_once APP . 'models/combo.php';

class Combos
{
  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/combos
   */
  public function index()
  {
    $combos = Combo::all();

    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/combos/index.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * PAGE: criar
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/combos/criar
   */
  public function criar()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/combos/criar.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * ACTION: criarCombo
   * Este método é executado ao realizar o submit de um formulário com a action combos/criarCombo
   */
  public function criarCombo()
  {
    // Se tiver dados no POST cria novo combo
    if (isset($_POST['criarCombo'])) {
      Combo::add($_POST['nome'], $_POST['unidade_id'], $_POST['tipo'], $_POST['preco']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'combos/index');
  }

  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/combos/editar/:id
   * @param int $combo_id
   */
  public function editar($combo_id)
  {
    if (isset($combo_id)) {
      // load combo
      $combo = Combo::get($combo_id);
      $unidade_id = $combo->unidade_id;
      $tipo = $combo->tipo;

      // load views
      require APP . 'views/_templates/header.php';
      require APP . 'views/combos/editar.php';
      require APP . 'views/_templates/footer.php';
    } else {
      header('location: ' . URL_WITH_INDEX_FILE . 'combos/index');
    }
  }

  /**
   * ACTION: novo
   * Este método é executado ao realizar o submit de um formulário com a action combos/editarCombo
   * 
   */
  public function editarCombo()
  {
    // Se tiver dados no POST cria novo combo
    if (isset($_POST['editarCombo'])) {
      Combo::update($_POST['nome'], $_POST['unidade_id'], $_POST['combo_id'], $_POST['tipo'], $_POST['preco']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'combos/index');
  }

  /**
   * ACTION: deletarCombo
   * Este método é executado ao realizar o submit de um formulário com a action combos/deletarCombo
   * 
   */
  public function deletarCombo($combo_id)
  {
    if (isset($combo_id)) {
      Combo::delete($combo_id);
    }

    header('location: ' . URL_WITH_INDEX_FILE . 'combos/index');
  }
}
