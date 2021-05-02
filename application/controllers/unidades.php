<?php

require_once APP . 'models/unidade.php';

class Unidades
{
  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/unidades
   */
  public function index()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/unidades/index.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * PAGE: criar
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/unidades/criar
   */
  public function criar()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/unidades/criar.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * ACTION: criarUnidade
   * Este método é executado ao realizar o submit de um formulário com a action unidades/criarUnidade
   */
  public function criarUnidade()
  {
    // Se tiver dados no POST cria nova unidade
    if (isset($_POST['criarUnidade'])) {
      Unidade::add($_POST['nome'], $_POST['cidade_id']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'unidades/index');
  }

  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/unidades/editar/:id
   * @param int $unidade_id
   */
  public function editar($unidade_id)
  {
    if (isset($unidade_id)) {
      // load unidade
      $unidade = Unidade::get($unidade_id);

      // load views
      require APP . 'views/_templates/header.php';
      require APP . 'views/unidades/editar.php';
      require APP . 'views/_templates/footer.php';
    } else {
      header('location: ' . URL_WITH_INDEX_FILE . 'unidades/index');
    }
  }

  /**
   * ACTION: novo
   * Este método é executado ao realizar o submit de um formulário com a action unidades/editarUnidade
   * 
   */
  public function editarUnidade()
  {
    // Se tiver dados no POST cria nova unidade
    if (isset($_POST['editarUnidade'])) {
      Unidade::update($_POST['nome'], $_POST['cidade_id'], $_POST['unidade_id']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'unidades/index');
  }

  /**
   * ACTION: deletarUnidade
   * Este método é executado ao realizar o submit de um formulário com a action unidades/deletarUnidade
   * 
   */
  public function deletarUnidade($unidade_id)
  {
    if (isset($unidade_id)) {
      Unidade::delete($unidade_id);
    }

    header('location: ' . URL_WITH_INDEX_FILE . 'unidades/index');
  }
}
